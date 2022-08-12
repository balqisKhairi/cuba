@extends('layouts.template')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            
        </div>
       
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
<form action="{{ route('jobs.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
     <div class="row">
        <div class="col-xs-6 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Profile Picture:</strong>
                <input type="file" name="jobPic" class="form-control" placeholder="picture">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Job Title:</strong>
                <input type="text" class="form-control" name="jobName" placeholder="Job Title">
            </div>
        </div>


        <div class="col-xs-4 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Description (Requirement):</strong>
                <textarea name="jobDesc" class="form-control" placeholder="Description and requirement"></textarea>
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group" name="jobLocation">
            <strong>State:</strong>
            <!--<input type="text" class="form-control" name="jobLocation" placeholder="Description and requirement">-->
            <select name="jobLocation" class="form-control">
                   <option value=""> --SELECT--</option>
                   <option value="JOHOR"> JOHOR</option>
                   <option value="KELANTAN"> KELANTAN</option>
                   <option value="KEDAH"> KEDAH</option>
                   <option value="KUALA LUMPUR"> KUALA LUMPUR</option>
                   <option value="LABUAN">LABUAN</option>
                   <option value="MELAKA"> MELAKA</option>
                   <option value="NEGERI SEMBILAN"> NEGERI SEMBILAN</option>
                   <option value="PAHANG">PAHANG</option>
                   <option value="PENANG"> PENANG</option>
                   <option value="PERAK"> PERAK</option>
                   <option value="PERLIS">PERLIS</option>
                   <option value="PUTRAJAYA">PUTRAJAYA</option>
                   <option value="SABAH">SABAH</option>
                   <option value="SARAWAK">SARAWAK</option>
                   <option value="SELANGOR">SELANGOR</option>
                   <option value="TERENGGANU">TERENGGANU</option>
</select>
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Salary:</strong>
                <input type="text" class="form-control" name="jobPay" placeholder="Salary">
            </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Skill:</strong>
                <select name="skill" class="form-control">
                    <option selected="true" disabled="disabled"> --SELECT--</option>
                    @foreach(App\Skill::all() as $cat)
                    <option value="{{$cat->id}}">{{$cat->skillName}}  </option>
                   @endforeach
                </select>
                 </div>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Type:</strong>
               <!-- <input type="text" class="form-control" name="jobType" placeholder="Type">-->
               <select name="jobType" class="form-control">
                   <option selected="true" disabled="disabled"> --SELECT--</option>
                   <option value="parttime"> PART TIME</option>
                   <option value="fulltime"> FULLTIME</option>
</select>

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        
                <a class="btn btn-primary" onclick="history.back()"> Back</a>
        </div>
    </div>
   
</form>
@endsection