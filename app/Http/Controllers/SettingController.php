<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class SettingController extends Controller
{
    public function index() {
        $user = \Auth::user();
        $id = $user->id;
        $username = $user->username;
        $email = $user->email;
        $role = $user->roles()->first()->display_name;
        $info = $user->info;
        $real_name = $info->real_name;
        $nickname = $info->nickname;
        $gender = $info->gender;
        $province = $info->province;
        $city = $info->city;
        $birthday = $info->birthday;
        $introduction = $info->introduction;
        $avatar_url = $info->avatar_url;
        return view('setting/index', compact('id', 'username', 'email', 'role', 'real_name',
            'nickname', 'gender', 'province', 'city', 'birthday', 'introduction', 'avatar_url'));
    }

    public function info() {
        $info = \Auth::user()->info;
        $info->real_name = $_POST['real_name'];
        $info->nickname = $_POST['nickname'];
        $info->gender = $_POST['gender'];
        $info->province = $_POST['province'];
        $info->city = $_POST['city'];
        $info->birthday = $_POST['birthday'];
        $info->introduction = $_POST['introduction'];
        $info->save();
    }

    public function avatar() {
        $info = \Auth::user()->info;
        $id = \Auth::user()->id;
        $upload = Input::file('upload');
        // $realPath = $upload->getRealPath();
        $entension = $upload->getClientOriginalExtension();
        $new_name = $id.'.'.$entension;
        $path = $upload->move('img/avatar', $new_name);
        $info->avatar_url = $new_name;
        $info->save();
        return redirect('/setting');
    }

    public function password() {
        $old = $_POST['old_password'];
        $new = $_POST['new_password'];
        $again = $_POST['new_password_again'];
        $user = \Auth::user();
        if (!\Hash::check($old, $user->password)) {
            return redirect('/setting');
        } else if ($new !== $again) {
            return redirect('/setting');
        } else {
            $user->password = bcrypt($new);
            $user->save();
            \Auth::logout();
            return redirect('/auth/login');
        }
    }

}
