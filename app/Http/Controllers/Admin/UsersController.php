<?php

namespace App\Http\Controllers\Admin;

use App\Bonus;
use App\CronJob;
use App\Deposit;
use App\Http\Controllers\Controller;
use App\Interest;
use App\Package;
use App\Payout;
use App\Permission;
use App\Refferal;
use App\Team;
use App\User;
use Auth;
use Datatables;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Mail;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $obj_user;

    public function __construct(User $userObject)
    {
        $this->middleware('auth:admin');
        $this->obj_user = $userObject;
    }

    public function index()
    {

        return view('admin.users.index', ['title' => 'Registered users List']);
    }

    public function getUsers(Request $request)
    {
        $columns = array(
            0 => 'id',
            1 => 'user_name',
            2 => 'email',
            3 => 'status',
            4 => 'created_at',
            5 => 'action'
        );

        $totalData = User::count();
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if (empty($request->input('search.value'))) {
            $users = User::offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
            $totalFiltered = User::count();
        } else {
            $search = $request->input('search.value');
            $users = User::where('user_name', 'like', "%{$search}%")
                ->orWhere('email', 'like', "%{$search}%")
                ->orWhere('created_at', 'like', "%{$search}%")
                ->offset($start)
                ->limit($limit)
                ->orderBy($order, $dir)
                ->get();
            $totalFiltered = User::where('user_name', 'like', "%{$search}%")
                ->orWhere('email', 'like', "%{$search}%")
                ->count();
        }


        $data = array();

        if ($users) {
            foreach ($users as $r) {
                $edit_url = route('users.edit', $r->id);
                $nestedData['id'] = '
                                <td>
                                <div class="checkbox checkbox-success m-0">
                                        <input id="checkbox3" type="checkbox" name="users[]" value="' . $r->id . '">
                                        <label for="checkbox3"></label>
                                    </div>
                                </td>
                            ';
                $nestedData['user_name'] = $r->user_name;
                $nestedData['email'] = $r->email;
                if ($r->active) {
                    $nestedData['active'] = '<span class="btn btn-xs btn-success">Active</span>';
                } else {
                    $nestedData['active'] = '<span class="btn btn-xs btn-warning">Inactive</span>';
                }

                $nestedData['created_at'] = date('d-m-Y', strtotime($r->created_at));
                $nestedData['action'] = '
                                <div>
                                <td>
                                    <a class="btn btn-info btn-circle" onclick="event.preventDefault();viewInfo(' . $r->id . ');" title="View User" href="javascript:void(0)">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a title="Edit User" class="btn btn-primary btn-circle"
                                       href="' . $edit_url . '">
                                       <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-circle" onclick="event.preventDefault();del(' . $r->id . ');" title="Delete User" href="javascript:void(0)">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                                </div>
                            ';
                $data[] = $nestedData;
            }
        }

        $json_data = array(
            "draw" => intval($request->input('draw')),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data
        );

        echo json_encode($json_data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.users.create', ['title' => 'Registere User']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'sponser_id' => 'required|max:255',
            'user_name' => 'required|max:255',
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'phone_number' => 'required|max:255',
            'email' => 'required|unique:users,email',
        ]);
        $input = $request->all();
        $user = new User();
        $user->sponser_id = $request->input('sponser_id');
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->user_name = $request->input('user_name');
        $user->phone_number = $request->input('phone_number');
        $user->email = $request->input('email');
        $res = array_key_exists('active', $input);
        if ($res == false) {
            $user->active = 0;
        } else {
            $user->active = 1;

        }
        $user->password = bcrypt($input['password']);
        $user->save();
        $user = $this->obj_user->findOrFail($user->id);
        $user->userid='FT000'.$user->id;
        $user->save();
        Session::flash('success_message', 'Great! User has been saved successfully!');
        $user->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = $this->obj_user->findOrFail($id);
        return view('admin.users.profile-setting', ['title' => 'Edit Profile'])->withUser($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this->obj_user->findOrFail($id);
        $deposit = Deposit::where('user_id', $id)->first();
        $payout = Payout::where('user_id', $id)->first();
        $refferal = Refferal::where('user_id', $id)->first();
        $interest = Interest::where('user_id', $id)->first();
        $package = Package::where('user_id', $id)->first();
        $team = Team::where('user_id', $id)->first();
        $bonus = Bonus::where('user_id', $id)->first();

        return view('admin.users.edit',
            [
                'title' => 'Update User Details',
                'user' => $user,
                'deposit' => $deposit,
                'payout' => $payout,
                'refferal' => $refferal,
                'interest' => $interest,
                'package' => $package,
                'team' => $team,
                'bonus' => $bonus,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = $this->obj_user->findOrFail($id);
        $this->validate($request, [
            'sponser_id' => 'required|max:255',
            'user_name' => 'required|max:255',
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'phone_number' => 'required|max:255',
            'email' => 'required|unique:users,email,' . $user->id,
        ]);
        $user->sponser_id = $request->input('sponser_id');
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->user_name = $request->input('user_name');
        $user->email = $request->input('email');
        $user->phone_number = $request->input('phone_number');
        $input = $request->all();
        $res = array_key_exists('active', $input);
        if ($res == false) {
            $user->active = 0;
        } else {
            $user->active = 1;

        }
        $user->password = isset($input['password']) ? bcrypt($request->input('password')) : $user->password;
        $user->save();
        Session::flash('success_message', 'Profile updated successfully.');
        return redirect()->back();

        Session::flash('success_message', 'Great! user successfully updated!');
        return redirect()->back();
    }

    public function updateDeposit(Request $request, $id)
    {
        $deposit = Deposit::where('user_id', $id)->first();
            if(!$deposit){
                $deposit =new Deposit();
            }
        $this->validate($request, [
            'active_deposit' => 'required|max:255',
            'new_deposit' => 'required|max:255',
            'matured_deposit' => 'required|max:255',
            'released_deposit' => 'required|max:255',
        ]);
        $deposit->active_deposit = $request->input('active_deposit');
        $deposit->amount = $request->input('amount');
        $deposit->new_deposit = $request->input('new_deposit');
        $deposit->matured_deposit = $request->input('matured_deposit');
        $deposit->released_deposit = $request->input('released_deposit');
        $deposit->user_id = $id;
        $deposit->save();
        Session::flash('success_message', 'Great! Deposit Information successfully updated!');
        return redirect()->back();
    }

    public function updatePayouts(Request $request, $id)
    {
        $this->validate($request, [
            'total_payout' => 'required|max:255',
            'pending_payout' => 'required|max:255',
        ]);
        $payout = Payout::where('user_id', $id)->first();
        if(!$payout){
            $payout =new Payout();
        }
        $payout->total_payout = $request->input('total_payout');
        $payout->pending_payout = $request->input('pending_payout');
        $payout->user_id = $id;
        $payout->save();
        Session::flash('success_message', 'Payout updated successfully.');
        return redirect()->back();
    }

    public function updateRefferal(Request $request, $id)
    {
        $refferal = Refferal::where('user_id', $id)->first();
        if(!$refferal){
            $refferal =new Refferal();
        }
        $this->validate($request, [
            'today_interest' => 'required|max:255',
            'weekly_interest' => 'required|max:255',
        ]);
        $refferal->today_interest = $request->input('today_interest');
        $refferal->weekly_interest = $request->input('weekly_interest');
        $refferal->user_id = $id;
        $refferal->save();
        Session::flash('success_message', 'Refferal updated successfully.');
        return redirect()->back();
    }

    public function updateInterest(Request $request, $id)
    {
        $interest = Interest::where('user_id', $id)->first();
        if(!$interest){
            $interest =new Interest();
        }
        $this->validate($request, [
            'today_interest' => 'required|max:255',
            'weekly_interest' => 'required|max:255',
            'monthly_interest' => 'required|max:255',
            'interest_earning' => 'required|max:255',
        ]);
        $interest->today_interest = $request->input('today_interest');
        $interest->weekly_interest = $request->input('weekly_interest');
        $interest->monthly_interest = $request->input('monthly_interest');
        $interest->interest_earning = $request->input('interest_earning');
        $interest->user_id = $id;
        $interest->save();
        Session::flash('success_message', 'Interest updated successfully.');
        return redirect()->back();
    }

    public function updatePurchasedPackage(Request $request, $id)
    {
        $package = Package::where('user_id', $id)->first();
        if(!$package){
            $package =new Package();
        }
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);
        $package->name = $request->input('name');
        $package->user_id = $id;
        $package->save();
        Session::flash('success_message', 'Package updated successfully.');
        return redirect()->back();
    }

    public function updateTotalTeam(Request $request, $id)
    {
        $team = Team::where('user_id', $id)->first();
        if(!$team){
            $team =new Team();
        }
        $this->validate($request, [
            'all_team' => 'required|max:255',
            'direct_team' => 'required|max:255',
        ]);
        $team->direct_team = $request->input('direct_team');
        $team->all_team = $request->input('all_team');
        $team->user_id = $id;
        $team->save();
        Session::flash('success_message', 'Team updated successfully.');
        return redirect()->back();
    }

    public function updateBonus(Request $request, $id)
    {
        $bonus = Bonus::where('user_id', $id)->first();
        if(!$bonus){
            $bonus =new Bonus();
        }
        $bonus->week = $request->input('week');
        $bonus->total = $request->input('total');
        $bonus->ranks = $request->input('ranks');
        $bonus->rewards = $request->input('rewards');
        $bonus->user_id = $id;
        $bonus->save();
        Session::flash('success_message', 'Bonus updated successfully.');
        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $user = $this->obj_user->findOrFail($id);
        $user->delete();
        Session::flash('success_message', 'User successfully deleted!');
        return redirect()->route('users.index');
    }

    public function DeleteSelectedUsers(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'users' => 'required',

        ]);
        foreach ($input['users'] as $index => $id) {

            $user = $this->obj_user->findOrFail($id);
            $user->delete();

        }
        Session::flash('success_message', 'Users successfully deleted!');
        return redirect()->back();

    }

    public function userDetail(Request $request)
    {

        $user = User::findOrFail($request->input('id'));


        return view('admin.users.single', ['title' => 'User Detail', 'user' => $user]);
    }


}
