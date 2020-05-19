<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    public function send()
    {
        Mail::send(['text'=>'mail'],['name','madni'],function($message){
            $message->to('usamasheikh833@gmail.com','Madni')->subject('Greetings');
            $message->from('usamashaikh8888888888@gmail.com','madni');

        });
    }
}