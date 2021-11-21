<?php

namespace App\Http\Controllers\Auth;

use Inertia\Inertia;
use App\Mail\ResetMailer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function forgotPassword()
    {
        return Inertia::render('Auth/ForgotPassword');
    }

    public function sendMessage($email)
    {
        Mail::to($email)->send(new ResetMailer());

        return Redirect::route('login')->with('success', 'We did it!');  
    }
}
