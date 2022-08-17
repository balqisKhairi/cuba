<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;

class SkillController extends Controller
{
    public function index()
    {
       $skills = Skill::all();
        //dd($students);
        return view('skills.index',compact('skills'));
       // return view('subjects.index');
    }

    public function create()
    {
        return view('skills.create');
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
            'skillName' => 'required',
           
        ]);
  
        Skill::create($request->all());
   
        return redirect()->route('skills.index')
                        ->with('success','Skill added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
        return view('skills.show',compact('skill'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        return view('skills.edit',compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {
        $request->validate([
            'skillName' => 'required',
        ]);
  
        $skill->update($request->all());
  
        return redirect()->route('skills.index')
                        ->with('success','Skill updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();

       return redirect()->route('skills.index')
       ->with('success','Skill deleted successfully');
    }
}


