<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManojController extends Controller
{
    //
    public function index() 
    { 
       return manoj::all();
    
    }
}
