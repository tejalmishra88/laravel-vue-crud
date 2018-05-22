<?php

namespace App\Http\Controllers;
use App\aditi;
use Illuminate\Http\Request;

class AditiController extends Controller
{
    //
    public function getnames() 
    { 
       return aditi::all();
    
    }

   
    public function savenames(Request $request)
    { 
        $todo = aditi::create($request->all());
        if($todo)
        {   
            $tasks = aditi::all();
            return request()->json(200,$tasks);
          // return "tejal";
        }
    }
    public function aditidelete(Request $task)
    {  $id=$task->input('id');
       $task1= aditi::where('id','=',$id)->delete();
       if($task1)  
        {  $task2 = aditi::all();
           return $task2;
        }
      
    }

}
