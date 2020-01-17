<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoginModel;

class Login extends Controller
{
	public function register(){
    return view('index.html.register');
}
	public function register_do(){
        $post = request()->except(['_token','tel','email']);
		//dd($post);
		$result = LoginModel::create($post);
		//dd($result);
		if($result){
		   return redirect('/login/login');
		}

}

	public function login(){
    return view('index.html.login');
}
    public function do_login()
    {
        $data=request()->except(['_token']);

        $res = LoginModel::where(['username'=>$data['username'],'pwd'=>$data['pwd']])->first();
        if($res){
           session(['res'=>$res]);
           request()->session()->save();
		   return redirect('/news');
		}
    }

    public function loginout()
    {
        session(['res'=>null]);
        request()->session()->save();
		return view('admin.brand.login');
    }

}