<?php

namespace App\Http\Controllers;
use Auth;

class AuthController extends Controller
{
    function showlogin(){
        return view('login');
    }

    function loginprocess(){
        if(Auth::attempt(['email' => request('email'),'password' => request('password')])){
            return redirect('home')->with('succes', 'Login Berhasil');
        }else{
            return back()->with('danger', 'Login Gagal,Silahkan cek email dan password anda');
        }
    }

    function logout(){
       Auth::logout();
       return redirect('home');
    }
    
    function registrasi(){
        
    }
    
    function forgotpassword(){
        
    }
}