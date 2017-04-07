<?php

namespace App\Http\Controllers;

use App\User;
use App\UserInfo;
use App\Role;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function index() {
        return view('/admin/index');
    }

    public function all($n = 0) {
        $users = User::all();
        $array = array();
        foreach($users as $user) {
            $temp = array();
            $temp['id'] = $user->id;
            $temp['username'] = $user->username;
            $temp['email'] = $user->email;
            $info = $user->info;
            $temp['nickname'] = $info->nickname;
            $temp['real_name'] = $info->real_name;
            $role = $user->roles->first()->display_name;
            $temp['role'] = $role;
            if ($n == 1 && $role !== '用户') continue;
            if ($n == 2 && $role !== '医生') continue;
            if ($n == 3 && $role !== '教练') continue;
            if ($role === '系统管理员') continue;
            $array[] = $temp;
        }
        return response()->json($array);
    }

    public function add() {
        return view('admin/add');
    }

    public function create() {
        $user = new User();
        $user->username = $_POST['username'];
        $user->email = $_POST['email'];
        $user->password = bcrypt($_POST['password']);
        $user->save();
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
        $user->attachRole(Role::where('display_name', '=', $_POST['role'])->first());
        return redirect('/admin');
    }

    public function edit($id) {
        $user = User::find($id);
        $id = $user->id;
        $username = $user->username;
        return view('/admin/edit', compact('id', 'username'));
    }

    public function update() {
        $id = $_POST['id'];
        $role = $_POST['role'];
        $user = User::find($id);
        $user->detachRoles(Role::all());
        $user->attachRole(Role::where('display_name', '=', $_POST['role'])->first());
        return redirect('/admin');
    }

    public function delete($id) {
        User::find($id)->delete();
    }

}
