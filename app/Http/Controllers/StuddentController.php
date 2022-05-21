<?php

namespace App\Http\Controllers;

use App\Studdent;
use Illuminate\Http\Request;

class StuddentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studdents = Studdent::all();
        //dd($students);
        return view('studdents.index',compact('studdents'));
       // return view('subjects.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('studdents.create');
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
            'studName' => 'required',
            'studIC' => 'required',
            'studGender' => 'required',
            'studNum' => 'required',
            'studAddress' => 'required',
            'studEmail' => 'required',
            'studPassword' => 'required',
            //'studCertificate' => 'required',
           // 'studStatus' => 'required',
           
        ]);
  
        Studdent::create($request->all());
   
        return redirect()->route('studdents.index')
                        ->with('success','student created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Studdent  $studdent
     * @return \Illuminate\Http\Response
     */
    public function show(Studdent $studdent)
    {
        return view('studdents.show',compact('studdent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Studdent  $studdent
     * @return \Illuminate\Http\Response
     */
    public function edit(Studdent $studdent)
    {
        return view('studdents.edit',compact('studdent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Studdent  $studdent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Studdent $studdent)
    {
        $studdent->update($request->all());
  
        return redirect()->route('studdents.index')
                        ->with('success','Studdent updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Studdent  $studdent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Studdent $studdent)
    {
        $studdent->delete();

        return redirect()->route('studdents.index')
        ->with('success','Studdent deleted successfully');
    }
}
