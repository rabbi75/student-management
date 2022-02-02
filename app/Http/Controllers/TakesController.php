<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Duration;
use App\Models\Student;
use App\Models\Takes;
use Illuminate\Http\Request;

class TakesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $information = Takes::orderBy('id', 'DESC')->paginate(4);
        return view('takes.index', compact('information'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all();
        $courses = Course::all();
        $durations = Duration::all();
        return view('takes.create',compact('students','courses','durations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required',
            'course_id' => 'required',
            'duration_id' => 'required',
            'mark' => 'required',
        ]);
        Takes::create([
            'student_id'=>$request->student_id,
            'course_id'=>$request->course_id,
            'duration_id'=>$request->duration_id,
            'mark'=>$request->mark,
        ]);
        session()->flash('success', 'A takes created successfully.');
        return redirect()->route('takes.index');
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
    public function edit($id)
    {
        $take = Takes::find($id);
        $students = Student::all();
        $courses = Course::all();
        $durations = Duration::all();
        return view('takes.edit',compact('students','courses','durations','take'));
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
        $data = Takes::find($id);
        $data->student_id=$request->student_id;
        $data->course_id=$request->course_id;
        $data->duration_id=$request->duration_id;
        $data->mark=$request->mark;
        $data->save();
        session()->flash('success', 'Course has updated successfully.');
        return redirect()->route('takes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $information = Takes::find($id);
        if (!is_null($information)) {
            $information->delete();
        }
        session()->flash('success', 'Takes has deleted successfully !!');
        return back();
    }
}
