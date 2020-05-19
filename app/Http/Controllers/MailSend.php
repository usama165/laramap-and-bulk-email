<?php

namespace App\Http\Controllers;

use \App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailSend extends Controller
{
    public function mailsend()
    {
        $details = [
            'title' => 'Title: Mail from Real Programmer',
            'body' => 'Body: This is for testing email using smtp'
        ];

        \Mail::to('usamasheikh833@gmail.com')->send(new SendMail($details));
        return view('emails.thanks');
    }
}
