<?php

namespace App\Http\Controllers;

use App\Certificate;
use App\Studdent;
use App\User;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests\CertiPostRequest;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $certificates = Certificate::all();
            //dd($jobs);
            return view('certificates.index', compact('certificates'));
           
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         //$states = State::pluck('stateName', 'id');
            
            return view('certificates.create');
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CertiPostRequest $request)
    {
        $userId=auth()->user()->id;
        $student = Studdent::where('user_id',$userId)->first();
        $studId = $student->id;
        Certificate::create([
            'user_id'=>$userId,
            'studId'=>$studId,
            'certiType'=>request('certiType'),
          
        ]);
        return redirect()->route('certificates.index')
        ->with('success','Certificate has been successfully added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function show(Certificate $certificate)
    {
        return view('certificates.show',compact('certificate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function edit(Certificate $certificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Certificate $certificate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certificate $certificate)
    {
        //
    }
}
