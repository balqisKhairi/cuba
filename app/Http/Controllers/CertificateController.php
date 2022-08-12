<?php

namespace App\Http\Controllers;

use App\Certificate;
use App\Studdent;
use App\User;
use App\Job;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



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
           // 'certiStatus' => 'required',

    ]);
        $user_id=auth()->user()->id;
        $student = Studdent::where('user_id',$user_id)->first();
        $studentId = $student->id;
       

        if($request->hasfile('certiType'))
        { foreach($request->file('certiType') as $file)
           {
            //$filename = time().'.'.$file->getClientOriginalName();
            //$file->move('assets',$filename);
            //$data['certiType']= 'assets/'.$filename;
            //$files[] = $filename;

            $filename =$file->getClientOriginalName();
            $file->move('assets',$filename);
            $data['certiType']= $filename;
            //$files[] = $filename;
        }
    }
        $data ['user_id'] = $user_id;
        $data ['studentId'] = $studentId;
        $data['certiStatus']= $request->certiStatus;

        Certificate::create($data);
       //  Certificate::create([
            //'user_id'=>$user_id,
            //'studentId'=>$studentId,
        
        //]);
            
        /**if($request->hasfile('certiType'))
         { foreach($request->file('certiType') as $file)
            {
                //$name=$file->getClientOriginalName();
                $filename=time().'.'.$file->getClientOriginalExtension();
                $file->move('assets',$filename);
                //$name=time().rand(1,100).'.'.$file->extension();
                //$file->move(public_path().'/files/', $name);  
                $files[] = $filename;
                  
            }
         }
         Certificate::create([
            'user_id'=>$user_id,
            'studentId'=>$studentId,
         'certiType'=> $file,
         //$file->certiType = $files,
         'certiStatus'=>request('certiStatus'),
         ]);**/

         $file->certiType=json_encode($data); 
   
         return back()->with('success','Certificate has been successfully added');

    }

    public function mycertificate(){
        $certificates = Certificate::where('user_id',auth()->user()->id)->get();
        return view('certificates.mycertificate',compact('certificates'));
        
    }

    public function download(Request $request, $file){

       // $data = DB::table('certificates')->where('id',$id)->first();
       // $filepath = storage_path("app/{$data->path}");
        return response()->download(public_path('assets/'.$file));
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

    public function view($id)
    {
        $data= Certificate::find($id);
        return view('studdents.viewCerti',compact('data'));
    }

    public function applicantCerti($id){
        // $studCerti = Certificate::has('users')->where('user_id',auth()->user()->id)->get();
        $certi = Certificate::find($id);
        $certi =array();
         return view('jobs.studCerti',compact('certificates'));
    }
 
     /**public function showCerti($id)
     {  $certi = User::find($id);

         return view('jobs.studCerti',compact('certi'));
     }**/
 
     /**public function showCerti($id)
     {  $certi = User::find($id);

        //$certi = User::where ('user_id',$user)->get();
       // $certi = Certificate::where('user_id')->get();
         return view('jobs.studCerti',compact('certi'));
     }**/
     public function showCerti()
     {
        //$certi = Certificate::find($id);
        //$certi =array();
        //$certi = Certificate::where('id',$id)->first();
        $certi = DB::table('users')
            ->join('certificates', 'certificates.studentId','users.id')
            //->join('studdents', 'studdents.id','certificates.studentId')
            ->select('certificates.id', 'certificates.certiType','certificates.certiStatus')
            ->get();

         return view('jobs.studCerti',compact('certi'));
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

        return back()
       ->with('success','Certificate deleted successfully');
    
    }
}
