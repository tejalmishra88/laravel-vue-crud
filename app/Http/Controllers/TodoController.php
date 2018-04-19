<?php

namespace App\Http\Controllers;

use App\todo;
use Illuminate\Http\Request;
use App\Http\Requests\todorequest;
class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $task = todo::orderBy('id', 'desc')->paginate(3);
        return request()->json(200,$task);
     //   return todo::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(todorequest $request)
    { 
        $todo = todo::create($t1->all());
        if($todo){
            $tasks = todo::orderBy('id','desc')->paginate(3);
         
            return request()->json(200,$tasks);
          // return "gggggggg";
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(todo $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit(todo $task)
    {
        return request()->json(200,$task);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(todorequest $request, todo $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(todo $task)
    {
        //
    }
}
