<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class FinanceController extends Controller {
public function index(){
$users = DB::select("select * from deposits WHERE new_deposit >= 100");
return view('verify_users',['deposit'=>$users]);
}
}