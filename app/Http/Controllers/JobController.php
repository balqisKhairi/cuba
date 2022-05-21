<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::all();
        //dd($jobs);
        return view('jobs.index', compact('jobs'));
       // return view('jobs.index');
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$states = State::pluck('stateName', 'id');
        
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$request->validate([
            //'jobPic' => 'required',
            //'jobName' => 'required',
            //'jobLocation' => 'required',
            //'jobPay' => 'required',
            //'jobSkill' => 'required',
            //'jobType' => 'required',
        //]); 
  
        $requestData = $request->all();
        //Job::create($request->all());
        $fileName = time().$request->file('jobPic')->getClientOriginalName();
        $path = $request->file('jobPic')->storeAs('images',$fileName,'public');
        $requestData["jobPic"] = '/storage/'.$path; 
        Job::create($requestData);

   
        return redirect()->route('jobs.index')
                        ->with('success','Job created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        return view('jobs.show',compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
       // $states = State::pluck('stateName', 'id');
        return view('jobs.edit',compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        $job->update($request->all());
  
        return redirect()->route('jobs.index')
                        ->with('success','Job updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        $job->delete();

       return redirect()->route('jobs.index')
       ->with('success','Job deleted successfully');
    }
}
