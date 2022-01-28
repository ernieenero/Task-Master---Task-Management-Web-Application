<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\User;

class Subjects extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('appLayout/subject-list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $user = User::findOrFail($id);


        return view('appLayout/subject-list', compact('user'));  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $validated = $request->validate([
            'subject_name'=>['required'],
            'subject_detail'=>['required'],
        ]);
        
        $user = User::find($id);

        $data = $request->all();

        unset($data['submit']);

        $subject = new Subject(['subject_name'=>$data['subject_name'], 'subject_detail'=>$data['subject_detail']]);
        
        $user->subjects()->save($subject);

        return redirect()->route('user-home', $user['user_id']);
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
    public function edit($user_id, $subject_id)
    {   
        $user = User::find($user_id);
        $subject = $user->subjects()->where('subject_id', $subject_id)->first();
        return view('appLayout/subject-edit', compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user_id, $subject_id)
    {
        $data = $request->all();

        $user = User::find($user_id);
        $subject = $user->subjects()->where('subject_id', $subject_id)->first();

        $subject->subject_name = $data['subject_name'];
        $subject->subject_detail = $data['subject_detail'];

        $subject->save();

        return redirect()->route('user-home', ['id'=>$user_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user_id, $subject_id)
    {
        $user = User::find($user_id);

        $user->subjects()->where('subject_id', $subject_id)->delete();

        return redirect()->route('user-home', ['id'=>$user_id]);
    }
}
