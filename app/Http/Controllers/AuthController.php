<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Show Register page
    public function showRegister(){
        return view('auth.register');
    }

    // Registration
    public function userRegistration(Request $request){
        $validation = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email_address' => 'required|email|unique:App\Models\User,email_address',
            'password' => 'required'
        ],[
            'first_name.required' => 'This field is required!',
            'last_name.required' => 'This field is required!',
            'email_address.required' => 'This field is required!',
            'email_address.email' => 'This field requires an valid email!',
            'email_address.unique' => 'This email address already exists!',
            'password' => 'This field is required!'
        ]);
        
        $createUser = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email_address' => $request->email_address,
            'password' => $request->password,
        ]);

        // return $createUser;
        if ($createUser):
            return redirect()->route('user.login.page')->with('registrationStatus', 'You have successfully registered!');
        else:
            return redirect()->route('user.register.page');
        endif;
    }

    // Show login page
    public function showLogin(){
        return view('auth.login');
    }

    // User
    public function userLogin(Request $request){
        $validation = $request->validate([
            'email_address' => 'required|email',
            'password' => 'required'
        ],[
            'email_address.required' => 'This field is required!',
            'email_address.email' => 'This field requires an valid email!',
            'password' => 'This field is required!'
        ]);
        
        if(Auth::attempt($validation)):
            return redirect()->route('dashboard.page');
        else:
            return redirect()->route('user.login.page')->with('loginErrorStatus', 'Authentication Failed');
        endif;
    }

    // Dashboard Page
    public function dashboardPage(){
        if(Auth::check()):
            return view('user.dashboard');
        else:
            return redirect()->route('user.login.page');
        endif;
    }

}
