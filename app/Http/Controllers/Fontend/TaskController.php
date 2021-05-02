<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::where('status', 1)->orderBy('created_at', 'desc')->get();
        // foreach ($tasks as $task){
        //    echo $task->name;
        // }
        return view('tasks.tasks.home', [
           'tasks'=>$tasks 
        ]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->get('name');
        $content = $request->get('content');
        $deadline = $request->get('deadline');
        $task = new Task();
        $task->name =$name;
        $task->content =$content;
        $task->status = 1;
        $task->deadline = $deadline;
        $task->save();

        return redirect()->route('task.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::find($id);
        return view('tasks.tasks.show', [
            'task'=>$task
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.tasks.edit', [
            'task'=>$task
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name = $request->get('name');
        $content = $request->get('content');
        $deadline = $request->get('deadline');
        $task = Task::find($id);
        $task->name =$name;
        $task->content =$content;
        $task->status = 1;
        $task->deadline = $deadline;
        $task->save();

        return redirect()->route('task.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // echo "Delete task có id = ";
        // dd($id);
        $task = Task::find($id);
        $task->delete();

        return redirect()->route('task.index');
    }

    public function complete($id)
    {
        echo "complete task".$id;
    }

    public function reComplete($id)
    {
        echo "Recomplete task".$id;
    }

}
