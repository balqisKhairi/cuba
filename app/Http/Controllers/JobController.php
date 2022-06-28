<?php

namespace App\Http\Controllers;

use App\Job;
use App\Employer;
use App\User;
use App\Studdent;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests\JobPostRequest;

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

    /**public function index()
    {
        $jobs = Job::all()take(limit:10);
        return view('mainpage', compact('jobs'));
      
    }**/
    

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
    public function store(JobPostRequest $request)
    {
        $userId=auth()->user()->id;
        $employer = Employer::where('user_id',$userId)->first();
        $employerId = $employer->id;
        Job::create([
            'user_id'=>$userId,
            'employerId'=>$employerId,
            'jobPic'=>request('jobPic'),
            'jobName' =>request('jobName'),
            'jobDesc' =>request('jobDesc'),
            'jobLocation' =>request('jobLocation'),
            'jobPay' =>request('jobPay'),
            'skillId' =>request('skill'),
            'jobType' =>request('jobType'),
            'jobStatus' =>request('jobStatus'),

        ]);
       
        /**$requestData = $request->all();
        //Job::create($request->all());
        $fileName = time().$request->file('jobPic')->getClientOriginalName();
        $path = $request->file('jobPic')->storeAs('images',$fileName,'public');
        $requestData["jobPic"] = '/storage/'.$path; 
        Job::create($requestData);
**/
   
        return redirect()->route('jobs.index')
                        ->with('success','Job has been successfully submitted pending for approval');
    }


    public function myjob(){
        $jobs = Job::where('user_id',auth()->user()->id)->get();
        return view('jobs.myjob',compact('jobs'));
    }


    public function apply(Request $request,$id){
        $jobId = Job::find($id);
        $jobId->users()->attach(Auth::user()->id);
        return redirect()->back()->with('success','Job Applied Successfully');

    }

    public function applicant(){
        $applicants = Job::has('users')->where('user_id',auth()->user()->id)->get();
        return view('jobs.applicant',compact('applicants'));
    }

    public function alljobs(Request $request){

        $keyword = request ('jobName');
        $skill = request ('skillId');
        $address = request ('jobLocation');

        if($keyword||$skill||$address){
            $jobs = Job::where('jobName','LIKE','%'.$keyword.'%')
            ->orWhere('skillId',$skill)
            ->orWhere('jobLocation',$address)
            ->paginate(10);
            return view('jobs.alljobs',compact('jobs'));
        }
        else{
            $jobs = Job::paginate(10);
            return view('jobs.alljobs',compact('jobs'));
        }
        
    }

    public function searchJob(Request $request){
        $keyword = $request->get('keyword');
        $users = Job::where('jobName','LIKE','%'.$keyword.'%')
        ->orWhere('skillId','LIKE','%'.$keyword.'%')
        ->orWhere('jobLocation','LIKE','%'.$keyword.'%')
        ->limit(5)->get();

    return response()->json($users); 
    }


   
    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function view($id, Job $job)
    {
        return view('jobs.show',compact('job'));
    }

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
