<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'user/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'user_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone_number' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    /* protected function create(array $data)
    {
        return User::create([
            'sponser_id' => $data['sponser_id'],
            'user_name' => $data['user_name'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'phone_number' => $data['phone_number'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    } */

    protected function create(array $data)
    {
        $user = User::where('userid', $data['sponser_id'])->first();
        if ($user != null) {
            $user = new User();
            $user->sponser_id = $data['sponser_id'];
            $user->first_name = $data['first_name'];
            $user->last_name = $data['last_name'];
            $user->user_name = $data['user_name'];
            $user->phone_number = $data['phone_number'];
            $user->email = $data['email'];
            $user->password = Hash::make($data['password']);
            $user->save();
            $user=User::findorfail($user->id);
            $user->userid = "FT000".$user->id;
            $user->save();
            return $user;
        } else {
            Session()->put('error_message', "Sponser Id is not found!.");
            return new User();
        }
    }

    public function reg() {
      return view('exceptions.404');
    }
}
