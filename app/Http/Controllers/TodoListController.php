<?php

namespace App\Http\Controllers;

use App\Models\todo_list;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $tasks = todo_list::orderBy('id')->get(); // --> Eloquent Method
        // $tasks = todo_list::all()->sortBy('id'); --> Collection Method
        $view = view('view_list')->with('todo_arr', $tasks);

        return $view;
        // return todo_list::all();  --> return as JSON
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_new_list');
        
    }

    /**
     * Store a newly created resource in storage. 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $fields = $request->validate([
            'taskname'=>'required|string'
        ]);

        $todo_list = todo_list::create([
            'name' => $fields['taskname']
        ]);

        // Method 1
        // $todo_list = todo_list::create([
        //     'name' => $request -> input('taskname')
        // ]);

        // Method 2
        // $todo = new todo_list();
        // $todo->name = $request -> input('taskname');
        // $todo->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\todo_list  $todo_list
     * @return \Illuminate\Http\Response
     */
    public function show(todo_list $todo_list)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\todo_list  $todo_list
     * @return \Illuminate\Http\Response
     */
    public function edit(todo_list $todo_list, $id)
    {
        $todo = todo_list::find($id);
        return view('edit_list')->with('todo_arr', $todo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\todo_list  $todo_list
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, todo_list $todo_list, $id)
    {
        $todo = todo_list::find($id);
        $todo->name = $request -> input('taskname');
        $todo->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\todo_list  $todo_list
     * @return \Illuminate\Http\Response
     */
    public function destroy(todo_list $todo_list, $id)
    {
        $row = todo_list::destroy($id);
        return redirect('/');
    }
}
