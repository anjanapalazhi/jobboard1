<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    
    
public function registerform(){

return view('register');
}

public function store(Request $request){

    $request->validate([

     'name'=>'required',
     'email'=>'required|email',
     'password'=>'required|min:5'


    ]) ;

 $user= User::create([

    'name'=>$request->name,
    'email'=>$request->email,
    'password'=>$request->password,
    'role'=>$request->role,


   ]);

//    dd($user);
  return redirect()->route('login-form');

}

    
    
    
    
    
    
public function loginform(){

  return view('login');


    }

public function login(Request $request){

 $credentials=$request->validate([

     'email' => 'required',
     'password' => 'required',

]);

if(Auth::attempt($credentials)){


$request->session()->regenerate();

if(Auth::user()->role==='admin'){

return redirect()->route('admin-dashboard');


}elseif(Auth::user()->role==='employer'){

return redirect()->route('employer-index');


}elseif(Auth::user()->role==='jobseeker'){

    return redirect()->route('jobseeker-dashboard');
    
    
    }
    



}
return back()->withErrors(['email'=>'The credentials not valid']);


}









}
