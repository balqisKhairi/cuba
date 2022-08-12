<?php

namespace App\Http\Controllers;

use App\Job;
use App\Employer;
use App\User;
use App\Studdent;
use App\Certificate;
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
    public function store()
    {
        $user_id=auth()->user()->id;
        $employer = Employer::where('user_id',$user_id)->first();
        $employerId = $employer->id;
        Job::create([
            'user_id'=>$user_id,
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

        $keyword = request ('jobName');
        $skill = request('skillId');
        $address = request ('jobLocation');

        if($keyword||$skill||$address){
            $jobs = Job::where('jobName','LIKE','%'.$keyword.'%')
                ->orWhere('skillId',$skill)
                ->orWhere('jobLocation',$address)
                ->paginate(5);
            return view('jobs.alljobs',compact('jobs'));
        }
        else{
            $jobs = Job::paginate(0);
            return view('jobs.alljobs',compact('jobs'))->with('success','No Result Found');;
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
        //$user = Job::find($id);
       // $user->users()->attach(Auth::user()->id);
        //$details=[
                //'greeting'=> $request->greeting,
                //'body'=> $request->body, 
                //'endpart'=> $request->endpart,
       // ];

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
    
    public function studView(Request $request)
    {
        $keyword = request ('jobName');
        $skill = request('skillId');
        $address = request ('jobLocation');

        if($keyword||$skill||$address){
            $jobs = Job::where('jobName','LIKE','%'.$keyword.'%')
                ->orWhere('skillId',$skill)
                ->orWhere('jobLocation',$address)
                ->paginate(5);
            return view('jobs.studView',compact('jobs'));
        }
        else{
            $jobs = Job::paginate(0);
            return view('jobs.studView',compact('jobs'))->with('success','No Result Found');;
        }
        
       
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
