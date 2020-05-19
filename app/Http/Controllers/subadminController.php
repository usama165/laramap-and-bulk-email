<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fetch;
use App\designation;
use DB;
use Validator;
use Mail;
class subadminController extends Controller
{

    public function index(){

        $data=fetch::all();
        $desi=designation::all();
        return view('fetch',compact(['data','desi']));


    }

    public function store(Request $request)
    {
        $teams=new fetch;
        $teams->firstName=$request->input('firstname');
        $teams->lastName=$request->input('lastname');
        $teams->email=$request->input('email');
        $teams->password=$request->input('password');
        $teams->contact=$request->input('contact');
        $teams->designationid=$request->input('designationName');
        $teams->save();

        // for email:
        $email= $request->input('email');
        $firstName=$request->input('firstname');
        $data = array('email'=> $email,'firstName'=> $firstName);

         Mail::send(['html'=>'email'],$data,function($message)use($data)
        {
            $message->to($data['email'], $data['firstName'])->subject('wellcome');
            $message->from('usamashaikh8888888888@gmail.com','usama');
        });

    //     Mail::send(['text'=>'email'],['name','madni'],function($message)
    //     {
    //         $message->to('alisyedmadni@gmail.com','Madni')->subject('WellCome!');
    //         $message->from('alisyedmadni@gmail.com','Madni');
    // });
    
    //  $data =array('email'=>'$email','firstname'=>'$firstname','from'=>'alisyedmadni@gmail.com','fromname'=>'MADNI' );

    //  Mail::send( 'email.welcome', $data,function( $message )use($data)
    // {
    //     $message->to( $data['email'],$data['firstname'] )->from( $data['from'],$data['fromname'] )->subject( 'Welcome!' );
    // });
    // }

    // public function send()
    // {
    //     Mail::send(['text'=>'mail'],['name','madni'],function($message){
    //         $message->to('alisyedmadni@gmail.com','Madni')->subject('Greetings');
    //         $message->from('alisyedmadni@gmail.com','madni');

    //     });
    }



    public function update(Request $request,$id)
    {
            $teams = fetch::find($id);
            $teams->firstName=$request->input('firstname');
            $teams->lastName=$request->input('lastname');
            $teams->email=$request->input('email');
            $teams->password=$request->input('password');
            $teams->contact=$request->input('contact');
            $teams->designationId=$request->input('designationName');
            
            $teams->save();

    }

    public function delete($id)
    {
    
    $teams=fetch::find($id);
    $teams->delete();
    
    return $teams;
    
}

}