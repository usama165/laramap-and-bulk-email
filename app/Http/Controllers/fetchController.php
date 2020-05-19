<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fetch;
use DB;
// use Validator;
class fetchController extends Controller
{

    public function index(){

        $data=fetch::all();
        return view('fetch',compact('data'));


    }




    public function store(Request $request)
    {
        $teams=new fetch;
         
        // $this->validate($request,['firstname'=>'reqiured','lastname'=>'reqiured',
        // 'email'=>'reqiured','password'=>'reqiured','contact'=>'reqiured',
        // 'designationid'=>'reqiured']);




        $teams->firstName=$request->input('firstname');
        $teams->lastName=$request->input('lastname');
        $teams->email=$request->input('email');
        $teams->password=$request->input('password');
        $teams->contact=$request->input('contact');
        $teams->designationId=$request->input('designationid');
        $teams->save();

    }

    public function update(Request $request,$id){
        $teams = fetch::find($id);
        $teams->firstName=$request->input('firstname');
        $teams->lastName=$request->input('lastname');
        $teams->email=$request->input('email');
        $teams->password=$request->input('password');
        $teams->contact=$request->input('contact');
        $teams->designationId=$request->input('designationid');
        
        $teams->save();

    }

    public function delete($id)
    {
    
    $teams=fetch::find($id);
    $teams->delete();
    
    return $teams;
    
}

}