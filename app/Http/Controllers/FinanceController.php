<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class FinanceController extends Controller {
public function index(){
     if(session()->has('user')){
    //$users = DB::select("select * from deposits WHERE new_deposit >= 100");
    $users = DB::table('deposits')->where('new_deposit','>', 100)->get();
    return view('finance.verify_users',['deposit'=>$users]);
     }
     return redirect('/finance');
}
public function login(){
    if(!session()->has('user')){
    return view('finance.login');
    }
    return redirect('finance/dashboard');
}
public function loginSubmit(Request $req){
    
    $this->validate($req, [
            'email' => 'required',
            'password' => 'required',
        ]);
    
    $email = $req->input('email');
    $pass = $req->input('password');
    $query =  DB::table('finances')->where('email', $email)->where('password',$pass)->first();
    if($query!=NULL){
        $data = $req->input();
        $req->session()->put('user',$data['email']);
        return redirect('finance/dashboard');
    }
    Session::flash('error_message','Incorrect email or password. try again!');
    return redirect()->back();  
}
public function viewSingle($req){
     if(session()->has('user')){
        //$user = DB::select("select * from deposits WHERE id = $req");
        $user = DB::table('deposits')->find($req);
        return view('finance.verify',['user'=>$user]);
     }
    return redirect('/finance');
}
public function updateUser(Request $req){
        $ud = $req->input();
        $user = DB::table('deposits')->find($req->id);
        
        $a = $req->active_deposit;
        $n = $req->new_deposit;
        $sum_a = $a + $n;
        //$user = DB::table('deposits')->find($req->id);
        
     if(session()->has('user')){
        $updated = DB::table('deposits')
              ->where('id', $req->id)
              ->update(['new_deposit' => 0, 'active_deposit'=> $sum_a, 'status'=> 'verified']);
        Session::flash('success_message','Deposit Proceeded Successfully!');
        return redirect('/finance');
     }
    return redirect('/finance');
}
}