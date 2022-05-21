<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class CustomSearchController extends Controller
{
    public function index(Request $request)
    {
     if(request()->ajax())
     {
      if(!empty($request->filter_jobName))
      {
       $data = DB::table('jobs')
         ->select('jobPic', 'jobName', 'jobDesc', 'jobLocation', 'jobPay', 'jobSkill','jobType')
         ->where('jobName', $request->filter_jobName)
         ->where('jobLocation', $request->filter_jobLocation)
         ->where('jobSkill', $request->filter_jobSkill)
         ->get();
      }
      else
      {
       $data = DB::table('jobs')
         ->select('jobPic', 'jobName', 'jobDesc', 'jobLocation', 'jobPay', 'jobSkill','jobType')
         ->get();
      }
      return datatables()->of($data)->make(true);
     }
     $job_Location = DB::table('jobs')
          ->select('jobLocation')
          ->groupBy('jobLocation')
          ->orderBy('jobLocation', 'ASC')
          ->get();
     return view('custom_search', compact('job_Location'));

     $job_skill = DB::table('jobs')
     ->select('jobSkill')
     ->groupBy('jobSkill')
     ->orderBy('jobSkill', 'ASC')
     ->get();
return view('custom_search', compact('job_skill'));
    }
}

?>
