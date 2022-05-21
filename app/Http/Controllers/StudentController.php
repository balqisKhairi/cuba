<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        
        $students = User::all();
        //dd($students);
        return view('students.index',compact('students'));
        //return view('students.index');
    }

    public function create()
    {
        return view('students.create');
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
            'email' => 'required',
            'password' => 'required'
        ]);
        Student::create($request->all());
   
        return redirect()->route('students.index')
                        ->with('success','Student created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
  
        $student->update($request->all());
  
        return redirect()->route('students.index')
                        ->with('success','Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $studentt->delete();

       return redirect()->route('students.index')
       ->with('success','student deleted successfully');
    }
}


