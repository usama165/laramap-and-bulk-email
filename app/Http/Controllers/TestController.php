<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Importer;
use Illuminate\Support\Facades\Mail;
use mysqli;
use PhpParser\Node\Expr\AssignOp\Div;

class TestController extends Controller
{
    public function importFile()
    {
        return view('excel');
    }
    public function importExcel(Request $request)
    {
        $validator=Validator::make($request->all(), [
          'file' => 'required|max:5000|mimes:xlsx,xls,csv'
      ]);

      
        if ($validator->passes()) {
            $dateTime= date('Ymd_His');
            $file=$request->file('file');
            $fileName=$dateTime.'-'.$file->getClientOriginalName();
            $savePath=public_path('/upload/');
            $file->move($savePath, $fileName);
     

            $excel= Importer::make('Excel');
            $excel->load($savePath.$fileName);
            $excel->hasHeader(true);
            $collection=$excel->getCollection('email');
            
            $arr=array();
            
            foreach($collection as $collection){
              $data=$collection['email'];
              array_push($arr,$data);
              
            }
          
                    Mail::send(['html'=>'mail'],['name','madni'],function($message)use($arr){
                       
                $message->to($arr,'madni')->subject('Greetings');
                $message->from('usamashaikh8888888888@gmail.com','usama shaikh');
     
             });
             print('Sent Successfully');
            }
            else{
              return redirect()->back()
              ->with(['errors'=>$validator->errors()->all()]);
          }
            
          }
      }
           
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      //if(sizeof($collection[1])==1){
            
            
        //  else{
        //     return redirect()->back()
        //     ->with(['errors'=>[0=> 'please provide data in file acc to sample file']]);
    

         //}
        // return redirect()->back()
        // ->with(['success'=>'File Upload Successfully']);
      //}
   
    // }





































    // print_r($arr);
            //print_r($arr);
           //  $get=implode(',',$arr);
            //  for($row=0; $row<=sizeof($arr); $row++ ){
                    
             //}

            //  foreach($final as $last => $value){
            //   Mail::send(['html'=>'mail'],['name','madni'],function($message)use($value){
                       
            //     $message->to($value,'madni')->subject('Greetings');
            //     $message->from('usamashaikh8888888888@gmail.com','usama shaikh');
     
            //  });
          

            //  }
            // $get=implode(',',$arr);
            // print_r($get);
          //  foreach($get as $take){
          //     Mail::send(['html'=>'mail'],['name','madni'],function($message)use($get){
                       
          //       $message->to($get)->subject('Greetings');
          //       $message->from('usamashaikh8888888888@gmail.com','madni');
     
          //    });
          
          //  }
           
            
          
            //   for ($row=0; $row<count($get); $row++) {
            //     print_r($get); 
              
            // }
            
            
           //  for ($row=0; $row<sizeof($collection); $row++) {
        
               //  $gets=var_dump($collection);
             //        print($collection);
                
            //     print('<br>');
            //    $get=$collection;
            //     print($get);
         //    }
               
              //  Mail::send(['html'=>'mail'],['name','madni'],function($message)use($str){
                       
              //          $message->to($str)->subject('Greetings');
              //          $message->from('usamashaikh8888888888@gmail.com','madni');
            
              //       });
                 
                
            
            
               // }


 //print_r('<br><br>'.$collection);
               // $json = json_decode($data[0]['json']);
                
                    //print_r($collection);
                //printf('<br><br>'.$json);






            //   try{
                   // print_r('<td>'.$collection[$row].'</td>');
                //  var_dump($collection[$row]);
            //    $mysql=mysqli_fetch_array($collection);
                //  print_r('<br><br>'.$collection);
                //   print_r("ID: %s  Name: %s", $collection[1], $collection[1]);
               // printf("ID: %s  Name: %s", $collection[1], $collection[2]);
                 //}
                //  catch(\Exception $e){
                //     return redirect()->back()
                //     ->with(['errors'=>$e->getMessage()]);
               
                //  }
          //   }

         //}
           

         // $result=explode(',',$collection);
           //$str=implode('&nbsp',$collection);
            // echo "<pre>";
            // print_r($collection);
            // echo "<pre>";
            //$collection =$excel->getCollection();
            //print_r($collection);
            // foreach($get as $i){
            //   print($i);

            // }
            // return $collection;
            //  $str=implode('/',$collection);
            // print($str);
       
            // print($collection);
        
            //print_r($collection);
            // $json=json_encode($collection);
            // printf('<br>');
            // echo $json;
         
            //     foreach ($collection as $data){
            //        //printf($collection[$key]["A"]);
            //       {{$data->email}}
            //  }
   


  //  }
  