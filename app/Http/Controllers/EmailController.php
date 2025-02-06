<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SignupMail;


class EmailController extends Controller
{
    // Signup Mail
    public function sendSignupMail($mailUsername, $emailId){
        return Mail::to($emailId)->send(new SignupMail($mailUsername));
    }
}
