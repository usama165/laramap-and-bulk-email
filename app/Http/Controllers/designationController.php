<?php

namespace App\Http\Controllers;

use App\designation;
use Illuminate\Http\Request;
use DB;
// use validator;

class designationController extends Controller
{
    public function index(){

        $data=designation::all();
        return view('designation',compact('data'));


    }

    public function store(Request $request)
    {
        $teams=new designation;
        // $this->validate($request,['designationName'=>'reqiured']);
        $teams->designationName=$request->input('designationName');
        $teams->save();

    }

    public function update(Request $request,$id){
        $teams = designation::find($id);
        $teams->designationName=$request->input('designationName');
        $teams->save();

    }

    public function delete($id)
    {
    
    $teams=designation::find($id);
    $teams->delete();
    
    return $teams;
    
}
    



}
