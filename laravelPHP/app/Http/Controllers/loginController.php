<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    function showLogin(){
        return view('signIn');
    }
    function showSignUp(){
        return view('signUp');
    }
}
