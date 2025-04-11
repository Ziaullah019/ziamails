<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
   ///Authantication 
    public function registerShow(){
        return view('registration');
        
    }
    public function registerSave(Request $request){
        $validated=$request->validate([
            'name'=>'required|string',
            'email'=>'required|email',
            'password'=>'required|confirmed',
        ]);
        $user=User::create($validated);
        return redirect()->route('login.show');
        
    }

    public function login(){
        return view('login');
        
    }

    public function loginSave(Request $request) {
        $credentials=$request->validate([
            'email'=>'required|email',
            'password'=>'required|',
        ]);
        if (Auth::attempt($credentials)) {
            return redirect()->route('index');
        }
        
    }

    public function index(){
        if (Auth::check()) {
            return view('index');
        }else{
            return redirect()->route('login.show');
        }
        
    }


   
    
    public function logout(){
        Auth::logout();
        return redirect()->route('login.show');
        
    }
    ////end athantication

    
    
}
