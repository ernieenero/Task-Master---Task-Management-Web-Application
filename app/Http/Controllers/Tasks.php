<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subject;
use App\Models\Task;

class Tasks extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user_id, $subject_id)
    {
        $subjects = Subject::find($subject_id);

        return view('appLayout/task-list', compact('subjects', 'subject_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user_id, $subject_id)
    {
        return view('appLayout/add-task', compact('subject_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $user_id, $subject_id)
    {
        $validation = $request->validate([
            'task_name'=>['required', 'unique:tasks'],
            'task_detail'=>['required'],
            'task_deadline'=>['required']
        ]);
        $data = $request->all();
        $subject = Subject::find($subject_id);
        $task = new Task(['task_name'=>$data['task_name'], 'task_detail'=>$data['task_detail'], 'task_deadline'=>$data['task_deadline']]);
        
        $subject->tasks()->save($task);

        return redirect()->route('task-home', [$user_id, $subject_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($user_id, $subject_id, $task_id)
    {
        $task = Task::find($task_id);
        return view('appLayout/task-edit', compact('subject_id', 'task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user_id, $subject_id, $task_id)
    {
        $task = Task::find($task_id);
        $data = $request->all();

        $task->task_name = $data['task_name'];
        $task->task_detail = $data['task_detail'];
        $task->task_deadline = $data['task_deadline'];

        $task->save();
        return  redirect()->route('task-home', [$user_id, $subject_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user_id, $subject_id, $task_id)
    {
        $task = Task::find($task_id);
        $task->delete();
        return  redirect()->route('task-home', [$user_id, $subject_id]);
    }
}
