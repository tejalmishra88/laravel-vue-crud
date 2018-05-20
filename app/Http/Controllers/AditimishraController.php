<?php

namespace App\Http\Controllers;
use App\aditimishra;
use Illuminate\Http\Request;

class AditimishraController extends Controller
{
    //
    public function getnames() 
    { 
       return aditimishra::all();
    
    }

   
    public function savenames(Request $request)
    { 
        $todo = aditimishra::create($request->all());
        if($todo)
        {   
            $tasks = aditimishra::all();
            return request()->json(200,$tasks);
          // return "tejal";
        }
    }
    public function aditidelc(Request $task)
    {  $id=$task->input('id');
       $task1= aditimishra::where('id','=',$id)->delete();
       if($task1)  
        {  $task2 = aditimishra::all();
           return $task2;
        }
      
    }

}
