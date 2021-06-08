<?php

namespace App\Http\Controllers;

use App\models\User;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view ('auths.login');
    }

    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/dashboard');
        }
        return redirect ('/login');
    }
	
     
    public function logout()
    {
        Auth::logout();
        return redirect ('/login');
    }
	
	public function register (){
		return view('auths.register');
	}
    public function postregister (Request $request){
        //dd($request->all());
		User::create([
			'name' =>$request->name,
			'email' =>$request->email,
			'password' => bcrypt ($request->password),
			'remember_token' => Str::random(60),
		]);
		return redirect ('/login');
        
    }
}
