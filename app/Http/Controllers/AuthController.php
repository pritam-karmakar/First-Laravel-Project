<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Show Register page
    public function showRegister(){
        return view('auth.register');
    }

    // Registration
    public function registration(Request $request){
        $validation = $request->validate([

        ]);
    }

    // Show login page
    public function showLogin(){
        return view('auth.login');
    }

}
