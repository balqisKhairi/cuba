<?php

namespace App\Http\Controllers;

use App\Certificate;
use App\Studdent;
use App\User;
use Auth;
use Illuminate\Http\Request;


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
    public function store(Request $request)
    {

        $this->validate($request, [

            'certiType' => 'required',
            'certiType.*' => 'mimes:doc,pdf,docx,zip'

    ]);
        $user_id=auth()->user()->id;
        $student = Studdent::where('user_id',$user_id)->first();
        $studentId = $student->id;
       //  Certificate::create([
            //'user_id'=>$user_id,
            //'studentId'=>$studentId,
        
        //]);
            
        if($request->hasfile('certiType'))
         { foreach($request->file('certiType') as $file)
            {
                //$name=$file->getClientOriginalName();
                $name=time().rand(1,100).'.'.$file->extension();
                $file->move(public_path().'/files/', $name);  
                $files[] = $name;
                  
            }
         }
         Certificate::create([
            'user_id'=>$user_id,
            'studentId'=>$studentId,
         'certiType'=> $file,
         //$file->certiType = $files,
         'certiStatus'=>request('certiStatus'),
         ]);

         $file->certiType=json_encode($files);
   
         return back()->with('success','Certificate has been successfully added');

    }

    public function mycertificate(){
        $certificates = Certificate::where('user_id',auth()->user()->id)->get();
        return view('certificates.mycertificate',compact('certificates'));
        
    }

    public function download($id){

        $data = DB::table('certificates')->where('id',$id)->first();
        $filepath = storage_path("app/{$data->path}");
        return \Response::download($filepath);
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
        return view('certificates.edit',compact('certificate'));
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
        $certificate->update($request->all());
        
        return redirect()->route('certificates.index')
                        ->with('success','Certificate updated successfully');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certificate $certificate)
    {
        $certificate->delete();

       return redirect()->route('certificates.mycertificate')
       ->with('success','Certificate deleted successfully');
    
    }
}
