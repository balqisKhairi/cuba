<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Job;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::all();
        //dd($students);
        return view('admins.index',compact('admins'));
       // return view('subjects.index');
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
    public function store(){
        $user = User::create([
            'name'=>request('adminName'),
            'email' =>request('adminEmail'),
            'userType'=>request('userType'),
            'password'=>Hash::make(request('adminPassword')),
        ]);

        Admin::create([
            'user_id'=>$user->id,
            
            'adminName'=> request ('adminName'),
            'adminEmail'=> request ('adminEmail'),
            'adminPassword'=>request('adminPassword'),
            

        ]);
        return redirect()->to('login');
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
