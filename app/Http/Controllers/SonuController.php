<?php

namespace App\Http\Controllers;
use App\sonu;

use Illuminate\Http\Request;

class SonuController extends Controller
{
    //
    public function getnames() 
    { 
       return sonu::all();
    
    }
}
