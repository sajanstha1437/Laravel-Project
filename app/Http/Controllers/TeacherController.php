<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('teacher',['teachers'=>$teachers, 'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = Teacher::all();
        return view('teacher',['teachers'=>$teachers, 'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teacher = new Teacher();
        $teacher->tne = $request->input('tne');

        $teacher->firstName = $request->input('firstName');
        $teacher->lastName = $request->input('lastName');
        $teacher->department = $request->input('department');
        $teacher->speciality = $request->input('speciality');
        $teacher->save();
        return  redirect('/teacher');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = Teacher::find($id);
        $teachers = Teacher::all();
        return view('teacher',['teachers'=>$teachers, 'teacher'=>$teacher, 'layout'=>'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::find($id);
        $teachers = Teacher::all();
        return view('teacher',['teachers'=>$teachers, 'teacher'=>$teacher, 'layout'=>'edit']);
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
        $teachers = Teacher::find($id);
        $teacher->tne = $request->input('tne');

        $teacher->firstName = $request->input('firstName');
        $teacher->lastName = $request->input('lastName');
        $teacher->department = $request->input('department');
        $teacher->speciality = $request->input('speciality');
        $teacher->save();
        return  redirect('/teacher');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teachers = Teacher::find($id);
        $teacher->delete($id);
        return redirect('/teacher');
    }
}
