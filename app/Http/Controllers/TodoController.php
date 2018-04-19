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
    public function index($term=null) 
    { if($term !=null) {
         $tasks['data'] = Todo::where('name', 'like', '%'.$term.'%')->get();
       return request()->json(200, $tasks); }
        return $this->_getRecord();
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
            return $this->_getRecord();
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
        $task->name = $request->name;
        $task->save();
      //  return"hehe";
       if( $task->save()){
        $tasks = Todo::orderBy('id','desc')->paginate(3);
        return request()->json(200,$tasks);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(todo $task)
    {
        if($task->delete())  return $this->_getRecord();
       // else return response()->json(425,['delete'=>"error deleting record"]);
    }
    private function _getRecord(){
        $tasks = todo::orderBy('id','desc')->paginate(3);
         
            return request()->json(200,$tasks);

    }
}
