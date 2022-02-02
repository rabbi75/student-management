<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Takes;
use File;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $information = Student::orderBy('id', 'DESC')->paginate(4);
        return view('welcome', compact('information'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
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
            'name' => 'required',
            'surename' => 'required',
            'studentid' => 'unique:students',
            'date_of_birth' => 'required',
            'date_of_enrolled' => 'required',
            'image' => 'required',
        ]);
        $document = $request->file('image');
        $document_name = rand().'.'.$document->getClientOriginalExtension();
        $document->move(public_path().'/images',$document_name);
        Student::create([
            'name'=>$request->name,
            'surename'=>$request->surename,
            'studentid'=>$request->studentid,
            'date_of_birth'=>$request->date_of_birth,
            'date_of_enrolled'=>$request->date_of_enrolled,
            'image'=>$document_name,
        ]);
        session()->flash('success', 'A new student has added successfully.');
        return redirect()->route('student.welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $information = Student::find($id);
        $shows = Takes::where('student_id',$id)->get();
        return view('show', compact('information','shows'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $information = Student::find($id);
        return view('edit', compact('information'));
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
        $data = Student::find($id);
        $data->name=$request->name;
        $data->surename=$request->surename;
        $data->studentid=$request->studentid;
        $data->date_of_birth= $request->date_of_birth;
        $data->date_of_enrolled= $request->date_of_enrolled;
        // inser images also
        if ($request -> hasFile('image')) {
            // delete the old image from folder
            if (File::exists('images/'.$data->image)) {
                file::delete('images/'.$data->image);
            }
            $document = $request->file('image');
            $document_name = rand().'.'.$document->getClientOriginalExtension();
            $document->move(public_path().'/images',$document_name);
            $data->image=$document_name;
        }
        $data->save();
        session()->flash('success', 'Student has updated successfully.');
        return redirect()->route('student.welcome');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $information = Student::find($id);
        if (!is_null($information)) {
            // Delete image
            if (File::exists('images/'.$information->image)) {
                File::delete('images/'.$information->image);
            }
            $information->delete();
        }
        session()->flash('success', 'Student has deleted successfully !!');
        return back();
    }
    /**
     * Search the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $search = $request->search;

        $information = Student::orWhere('name', 'like', '%'.$search.'%')
        ->orWhere('studentid', 'like', '%'.$search.'%')
        ->orWhere('date_of_birth', 'like', '%'.$search.'%')
        ->orWhere('date_of_enrolled', 'like', '%'.$search.'%')
            ->paginate(4);

        return view('search', compact('search', 'information'));
    }
}
