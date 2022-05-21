<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Job;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$admins = Admin::all();
        //dd($students);
        return view('admins.index',compact('admins'));
       // return view('subjects.index');
    }

    public function index2()
    {
        $jobs = Job::all();
        //dd($jobs);
        return view('admins.index', compact('jobs'));
       // return view('jobs.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.create');
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
            'adminEmail' => 'required',
            'adminPassword' => 'required',
    
        ]);
  
        Admin::create($request->all());
   
        return redirect()->route('admins.index')
                        ->with('success','Admin created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        return view('admins.show',compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        return view('admins.edit',compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            'adminEmail' => 'required',
            'adminPassword' => 'required'
        ]);
  
        $admin->update($request->all());
  
        return redirect()->route('admins.index')
                        ->with('success','Admin updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        $admin->delete();

        return redirect()->route('admins.index')
        ->with('success','admin deleted successfully');
    }
}
