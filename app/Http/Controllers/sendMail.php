<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Auth;
use App\Mail\welcomeMail;

class sendMail extends Controller
{
	public function sendMailOut(){
		Mail::to('test@test.de')->send(new welcomeMail);
		$user = Auth::user();
		return view('emails.mailing', compact($user));
	}
	
}
