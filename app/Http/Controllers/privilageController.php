<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\privilage;
use DB;
// use Validator;
class privilageController extends Controller
{

    public function index(){

        $data=privilage::all();
        return view('privilage',compact('data'));


    }



    public function store(Request $request)
    {
        $teams=new privilage;

        // $this->validate($request,['insert'=>'reqiured','update'=>'reqiured',
        // 'delete'=>'reqiured','view'=>'reqiured','designationId'=>'reqiured']);
        
        $teams->insert=$request->input('insert');
        $teams->update=$request->input('update');
        $teams->delete=$request->input('delete');
        $teams->view=$request->input('view');
        $teams->designationId=$request->input('designationId');
        $teams->save();

    }

    public function update(Request $request,$id){
        $teams = privilage::find($id);
          
        $teams->insert=$request->input('insert');
        $teams->update=$request->input('update');
        $teams->delete=$request->input('delete');
        $teams->view=$request->input('view');
        $teams->designationId=$request->input('designationId');
       
        $teams->save();

    }

    public function delete($id)
    {
    
    $teams=privilage::find($id);
    $teams->delete();
    
    return $teams;
    
}

}