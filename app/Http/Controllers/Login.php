<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
	public function register(){
    return view('index.html.register');
}
	public function login(){
    return view('index.html.login');
}
}