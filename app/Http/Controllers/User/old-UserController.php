<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Deposit;
use App\DepositUsdt;
use App\Interest;
use App\Package;
use App\Payout;
use App\Refferal;
use App\PaymentRequest;
use App\Team;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Requests;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use File;
use DB;

class UserController extends Controller
{
    public function __construct(User $userObject)
    {
       $this->middleware(['auth','verified']);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=Auth::user();
        $deposit = Deposit::where('user_id',$user->id)->first();
        $payout = Payout::where('user_id',$user->id)->first();
        $refferal = Refferal::where('user_id',$user->id)->first();
        $interest = Interest::where('user_id',$user->id)->first();
        $package= Package::where('user_id',$user->id)->first();
        $team= Team::where('user_id',$user->id)->first();

        return view('user.dashboard.index',
        [
            'deposit'=>$deposit,
            'payout'=>$payout,
            'refferal'=>$refferal,
            'interest'=>$interest,
            'package'=>$package,
            'team'=>$team,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    /**
     * User Profile Setting Method
     */

    public function profileSetting()
    {
        $admin = Auth::user();
        return view('user.admin.edit',['admin'=>$admin]);
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $this->validate($request, [
            'sponser_id' => 'required|max:255',
            'user_name' => 'required|max:255',
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'phone_number' => 'required|max:255',
            'email' => 'required|unique:users,email,'.$user->id,
        ]);
       $user->sponser_id = $request->input('sponser_id');
       $user->first_name = $request->input('first_name');
       $user->last_name = $request->input('last_name');
       $user->user_name = $request->input('user_name');
       $user->email = $request->input('email');
       $user->phone_number = $request->input('phone_number');
       $input = $request->all();
       $user->password = isset($input['password']) ? bcrypt($request->input('password')):$user->password;
       $user->save();
       Session::flash('success_message','Profile updated successfully.');
       return redirect()->back();
    }

    public function configCache(){
        Artisan::call('config:clear');
        Artisan::call('cache:clear');
        Artisan::call('config:cache');
        return redirect()->back();
    }
    public function myAccount(){
        $user = Auth::user();
        $deposit = Deposit::where('user_id',$user->id)->first();
        $payout = Payout::where('user_id',$user->id)->first();
        $refferal = Refferal::where('user_id',$user->id)->first();
        $interest = Interest::where('user_id',$user->id)->first();
        $package= Package::where('user_id',$user->id)->first();
        $PaymentRequest= PaymentRequest::where('user_id',$user->id)->first();
        return view('user.admin.my_account',
            [
                'deposit'=>$deposit,
                'payout'=>$payout,
                'refferal'=>$refferal,
                'interest'=>$interest,
                'package'=>$package,
                'PayReq'=>$PaymentRequest,
            ]);
    }
    public function changePassword(){
        return view('user.admin.change_password');
        
    }
     public function updatePassword(Request $request){
        $user = Auth::user();
        $this->validate($request, [
                    'new_password' => 'min:8|required_with:new_password_confirmation|same:new_password_confirmation',
                    'password' => 'min:8|required|different:new_password|password'
                ]);
        $input = $request->all();
        $user->password = isset($input['new_password']) ? bcrypt($request->input('new_password')):$user->new_password;
        $user->save();
        Session::flash('success_message','Your password has been changed successfully');
        //$user = User::where('id',$user->id)->first();
        //$password = bcrypt($request->input('new_password'));
        //$user->save();
        //Session::flash('success_message','Your password has been changed successfully');
        return redirect()->back();
        
    }
    public function investmentPlans(){
        return view('user.admin.investment_plans');
        
    }
    public function depositFund(){
        $user = Auth::user();
        $deposit = Deposit::where('user_id',$user->id)->first();
        return view('user.admin.deposit_fund',['deposit'=>$deposit]);
    }
    public function updateDepositFund(Request $request)
    {
        $user = Auth::user();
        $deposit = Deposit::where('user_id',$user->id)->first();
        if(!$deposit){
            $deposit= new Deposit();
        }
        $this->validate($request, [
            'amount' => 'required|max:255',
        ]);
        if ($request->hasFile('slip')) {
            if ($request->file('slip')->isValid()) {
                $this->validate($request, [
                    'slip' => 'required'
                ]);
                $slip = $request->file('slip');
                $destinationPath = "uploads/";
                $extension = $slip->getClientOriginalExtension();
                $fileName = $slip->getClientOriginalName();
                $fileName = rand() . $fileName;
                //renaming image
                $request->file('slip')->move($destinationPath, $fileName);
                $deposit->slip = $fileName;
            }
        }
        $deposit->amount = $request->input('amount');
        $deposit->active_deposit = $request->input('active_deposit');
        $deposit->remarks = $request->input('remarks');
        $deposit->pin = $request->input('pin');
        $deposit->user_id = $user->id;
        $deposit->save();
        Session::flash('success_message','Deposit Fund updated successfully. Please wait for 48 hours for verification!');
        return redirect()->back();
    }

    public function depositUsdt(){
        $user = Auth::user();
        $deposit = DepositUsdt::where('user_id',$user->id)->first();
        return view('user.admin.deposit_usdt',['deposit'=>$deposit]);
    }

    public function updateDepositUsdt(Request $request)
    {
        $user = Auth::user();
        $deposit = DepositUsdt::find($user->id);
        if(!$deposit){
            $deposit= new DepositUsdt();
        }
        $this->validate($request, [
            'network' => 'required|max:255',
            'wallet_address' => 'required|max:255',
            'selected_wallet' => 'required|max:255',
        ]);
        $deposit->network = $request->input('network');
        $deposit->wallet_address = $request->input('wallet_address');
        $deposit->selected_wallet = $request->input('selected_wallet');
        $deposit->user_id = $user->id;
        $deposit->save();
        Session::flash('success_message','Deposit Fund updated successfully.');
        return redirect()->back();
    }
    public function paymentRequest(){
        return view('user.admin.payment_request');
    }
    public function submitPaymentRequest(Request $request){
        $this->validate($request, [
            'account_id' => 'required|max:255',
            'network_type' => 'required',
        ]);
        $user = Auth::user()->id;
        $nt = $request->input('network_type');
        $ac = $request->input('account_id');
        $acc = filter_var($ac, FILTER_SANITIZE_STRING);
        DB::insert('INSERT INTO payment_requests (account_id, user_id, network) values (?, ?, ?)', [$acc,$user,$nt]);
        Session::flash('success_message', 'Account information saved successfully!');
        return redirect()->back();
    }
    public function notifications()
    {
//        dd(auth()->user()->notifications());
//        dd(auth()->user()->unreadNotifications()->groupBy('notifiable_type')->count());
        return auth()->user()->unreadNotifications()->limit(10)->get()->toArray();
    }
    public function showMessage(){


    }

}
