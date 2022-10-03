<?php

namespace App\Http\Controllers;

use App\Job;
use App\Employer;
use App\User;
use App\Studdent;
use App\Certificate;
use App\Skill;
use Auth;
use Notification;
use App\Mail\AcceptMail;
use App\Notifications\MyfirstNotification;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

//use App\Http\Requests\JobPostRequest;

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
     public function store(Request $request)
    {
        $user_id=auth()->user()->id;
        $employer = Employer::where('user_id',$user_id)->first();
        $employerId = $employer->id;

        $requestData = $request->all();
        $fileName = $request->file('jobPic')->getClientOriginalName();
        $path = $request->file('jobPic')->storeAs('images',$fileName,'public');
        $requestData["jobPic"] = '/storage/'.$path; 
    

        $requestData ['user_id'] = $user_id;
        $requestData ['employerId'] = $employerId;
        $requestData['jobName']= $request->jobName;
        $requestData['jobDesc']= $request->jobDesc;
        $requestData['jobLocation']= $request->jobLocation;
        $requestData['jobPay']= $request->jobPay;
        $requestData['skill_id']= $request->skill_id;
        $requestData['jobType']= $request->jobType;
        $requestData['jobStatus']= $request->jobStatus;

        Job::create($requestData);
       
        /**$requestData = $request->all();
        //Job::create($request->all());
        $fileName = time().$request->file('jobPic')->getClientOriginalName();
        $path = $request->file('jobPic')->storeAs('images',$fileName,'public');
        $requestData["jobPic"] = '/storage/'.$path; 
        Job::create($requestData);**/

   
        return back()->with('success','Job has been successfully submitted pending for approval');
   } 
    

   
    public function myjobs(){
        $jobs = Job::where('user_id',auth()->user()->id)->get();
        return view('jobs.myjobs',compact('jobs'));
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
        $skills = DB::table('jobs')->select('skill_id')->distinct()->get()->pluck('skill_id');
        $locations = DB::table('jobs')->select('jobLocation')->distinct()->get()->pluck('jobLocation');
        $post = Job::query();

        if($request->filled('jobName')){
        $post->where('jobName',$request->jobName);
        }
        if($request->filled('skill_id')){
            $post->where('skill_id',$request->skill_id);
        }

        if($request->filled('jobLocation')){
            $post->where('jobLocation',$request->jobLocation);
        }
        return view('jobs.alljobs', [
        'skills' => $skills,
        'locations' => $locations,
        //'jobs'=>$jobs,
        'posts' => $post->get(),

        ]);
  }
  
    public function studView(Request $request){
    $skills = DB::table('jobs')->select('skill_id')->distinct()->get()->pluck('skill_id');
    $locations = DB::table('jobs')->select('jobLocation')->distinct()->get()->pluck('jobLocation');
     $post = Job::query();

    if($request->filled('jobName')){
        $post->where('jobName',$request->jobName);
    }
    if($request->filled('skill_id')){
        $post->where('skill_id',$request->skill_id);
    }

    if($request->filled('jobLocation')){
        $post->where('jobLocation',$request->jobLocation);
    }
    return view('jobs.studView', [
    'skills' => $skills,
    'locations' => $locations,
    //'jobs'=>$jobs,
    'posts' => $post->get(),

    ]);
    
    }
    public function emailView($id){

        $data = User::find($id);
        ////$applicants = Job::has('users')->where('user_id',auth()->user()->id)->get();
        return view('jobs.email_view',compact('data'));
    }

    public function send(Request $request,$id){
        $user = User::find($id);
        $data = array(
            'message'=> $request->message
        );
        
       // Notification::send($data,new MyFirstNotification($details));
        //$jobId->users()->attach(Auth::user()->id);
        Mail::to($user->email)->send(new AcceptMail($data));
        return redirect()->back()->with('success','Email Send Successfully');

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
        
        return redirect()->back()
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

    public function showStati(){
        $totalStud = Studdent ::count();
        $totalEmplo = Employer ::count();
        $totalUser = User ::count();
        $getJob = Studdent::where('studStatus','0')->count();
        $notJob = Studdent::where('studStatus','1')->count();
        $needcerti = Certificate::where('certiStatus','')->count();
        $needjob = Job::where('jobStatus','')->count();

        return view('jobs.statics',compact('getJob','notJob','totalStud','totalEmplo','totalUser','needcerti','needjob'));
}

}

