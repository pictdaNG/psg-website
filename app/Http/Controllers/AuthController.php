<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function index(){
    	return view('admin.auth.login');
    }

    public function login(Request $request){
        // dd($request->all());
    	$this->validate($request, [
    		'email' => 'email|required',
    		'password' => 'required|min:4'
    	]);
        
        if(Auth::attempt([ 'email' => $request->input('email'), 'password' => $request->input('password')]))
        {
    		return redirect()->route('dashboard');
        }else {
            return back()->with('unsuccess','Your Email / Password Combination is Wrong');
        }
       
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect()->route('login');
    }
}
