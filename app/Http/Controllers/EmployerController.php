<?php

namespace App\Http\Controllers;

use App\Employer;
use App\User;
use App\Studdent;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;



class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employers = Employer::all();
        //dd($employers);
        return view('employers.index',compact('employers'));
       // return view('employers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
    {
        return view('employers.emp-register');
    } 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /**public function store(Request $request)
    {
        $request->validate([
            'emploCompName' => 'required',
            'emploEmail' => 'required',
            'emploPassword' => 'required',
            'emploNum' => 'required',
           
        ]);
  
        Employer::create($request->all());
   
        return redirect()->route('employers.index')
                        ->with('success','Employer created successfully.');
    } **/



    
    public function store(){
        $user = User::create([
            'name'=>request('emploCompName'),
            'email' =>request('emploEmail'),
            'userType'=>request('userType'),
            'password'=>Hash::make(request('emploPassword')),
        ]);

        Employer::create([
            'user_id'=>$user->id,
            
            'emploCompName'=> request ('emploCompName'),
            'emploEmail'=> request ('emploEmail'),
            'emploPassword'=>request('emploPassword'),
            'emploNum'=>request('emploNum'),

        ]);
        return redirect()->to('login');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function show(Employer $employer)
    {
        return view('employers.show',compact('employer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function edit(Employer $employer)
    {
        return view('employers.edit',compact('employer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employer $employer)
    {
        $employer->update($request->all());
  
        return redirect()->route('employers.myAcc')
                        ->with('success','employer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employer $employer)
    {
        $employer->delete();

        return redirect()->back()
        ->with('success','employer deleted successfully');
    }

    
    public function myAcc(){
        $employers = Employer::where('user_id',auth()->user()->id)->get();
        return view('employers.myAcc',compact('employers'));
    }
       
   
}
