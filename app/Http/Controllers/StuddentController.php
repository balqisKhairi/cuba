<?php

namespace App\Http\Controllers;

use App\Studdent;
use App\Certificate;
use App\Job;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StuddentController extends Controller
{
    /**public function __construct()
    {
        $this->middleware('student');
    }**/

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

    /**public function certificate(Request $request){

        $this->validate($request,[
            'certificate' =>'required|mimes:pdf,doc,docx|max:20000',
        ]);
        
        $data=new Certificate();

        $user_id = auth()->user()->id;
        $certificate = $request->file('certificate')
        ->store('storage/public/files');

        $filename=time().'.'.$certificate->getClientOriginalExtension();
        $request->file('certificate')->move('files',$fileName,'public');
		       // $request->file->move('assets',$filename);

       /**Studdent::where('user_id',$user_id)->update(
         ['certificate'=>$certificate
        ]); 

        $data->certiType=$filename;
        $data->certiType=$request->certiType;
		$data->save();

        return redirect()->route('studdents.index')
        ->with('success','certificate created Uploaded successfully.');
}**/


public function myAcc(){
    $studdents = Studdent::where('user_id',auth()->user()->id)->get();
    return view('studdents.myAcc',compact('studdents'));
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
        return redirect()->route('studdents.myAcc')
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

    public function mycerti(){
        $studdents = Certificate::where('user_id',auth()->user()->id)->get();
        return view('studdents.mycerti',compact('studdents'));
    }

    public function myJob(){
       // $studdents = Job::where('user_id',auth()->user()->id)->get();
       //$studdents= Job::has('users')->where('user_id',auth()->user()->id)->get();
       $studdents = DB::table('users')
      // ->join('job_user', 'job_user.user_id','jobs.user_id')
     
       ->join('job_user', 'job_user.user_id','users.id')
       //->join('studdents', 'studdents.user_id','job_user.user_id')
       ->join('jobs', 'jobs.id','job_user.id')
    ->select('jobs.*','jobs.id', 'jobs.jobPic','jobs.jobName','jobs.jobDesc','jobs.jobLocation','jobs.jobPay'
       ,'jobs.skillId','jobs.jobType')

       ->get();
        return view('studdents.myJob',compact('studdents'));
    }

   
}
