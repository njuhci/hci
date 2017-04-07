<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Role;
use App\UserInfo;
use App\UserGoal;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $redirectPath = '/index';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
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
            'username' => 'required|min:5|max:255|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
        UserInfo::create([
            'id' => $user->id,
            'gender' => 0,
            'province' => '江苏省',
            'city' => '南京市',
            'birthday' => '1990-01-01',
            'avatar_url' => 'default.jpg',
            'info_secret' => 0,
            'health_secret' => 0,
        ]);
        UserGoal::create([
            'user_id' => $user->id,
            'heat' => 1500,
            'distance' => 20,
            'step' => 50000,
            'weight' => 60,
        ]);
        $user->attachRole(Role::where('name', '=', 'user')->first());
        return $user;
    }

}
