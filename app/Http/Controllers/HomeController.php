<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{

    public function __construct() {

    }

    public function index() {
        return redirect('/health');
    }

    public function welcome() {
        return view('welcome');
    }

    public function home() {
        if (Auth::check()) {
            return Redirect::to('/index');
        } else {
            return Redirect::to('/welcome');
        }
    }

}
