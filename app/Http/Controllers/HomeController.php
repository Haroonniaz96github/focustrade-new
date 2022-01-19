<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('theme.index');
    }

    public function checkSponser(Request $request)
    {
        $sponser_id = User::where('userid', $request->input("sponser_id"))->first();
        if ($sponser_id==null) {
            return response()->json(['status' => '0']);
        } else {
            return response()->json(['status' => '1',]);
        }
    }

}
