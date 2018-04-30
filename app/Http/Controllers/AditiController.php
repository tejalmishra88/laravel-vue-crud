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

   
    public function save111names(Request $request)
    { 
        $todo = aditi::create($t1->all());
        if($todo){
            return $this->_getRecord();
        }
        
    }

}
