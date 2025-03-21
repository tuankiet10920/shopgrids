<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function login(){
        return view('user.login');
    }
    function register(){
        return view('user.register');
    }
}
