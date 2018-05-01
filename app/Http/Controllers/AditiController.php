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
            $tasks = aditi::orderBy('id','desc');
            return request()->json(200,$tasks);
        }
    }

}
