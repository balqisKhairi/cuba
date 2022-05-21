<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Application;

class ApplyJobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $data['jobs']=Job::orderBy('id','desc')->get();

      if($request->keyword){
       $post_query->where('jobName','LIKE','%'.$request->keyword.'%');
      }
      
      if($request->location){
        $post_query->whereHas('location',function($q) use ($request){
         $q->where('jobLocation',$request->location);
        });
      }

      if($request->skill){
        $post_query->whereHas('skill',function($r) use ($request){
         $r->where('jobSkill',$request->skill);
        });
      }

     // $data['posts']=$post_query->orderBy('id','DESC')->paginate(2);
      return view('applications.index',$data);

     

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function show($id)
    {

        $data['post']=$post=Application::findOrFail($id);
      $this->authorize('view', $post);
       return view('applications.show',$data);
    }

}
