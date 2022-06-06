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
   
<form action="{{ route('studdents.store') }}" method= "POST" enctype="multipart/form-data">
    @csrf
  
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="studName" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>IC Number:</strong>
                <input type="text" name="studIC" class="form-control" placeholder="IC Number">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
               <lable for ="studGender">
                   Gender
                </label>
                <div class="form-check">
                <input type="radio" name="studGender" class="form-check-input" id="genderM" value="Male" >
            <label for="genderM" class="form-check-label">
                Male
        </label>
            </div>
        </div>
        <div class="form-check">
                <input type="radio" name="studGender" class="form-check-input" id="genderF" value="Female" >
            <label for="genderF" class="form-check-label">
                Female
        </label>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Phone Number:</strong>
                <input type="text" class="form-control" name="studNum" placeholder="Phone Number">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                <textarea name="studAddress" class="form-control"  placeholder="Address"></textarea>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" class="form-control" name="studEmail" placeholder="Email">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Password:</strong>
                <input type="password" class="form-control" name="studPassword" placeholder="password">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
            <div class="form-group">
                <strong>Certificate (IF ANY):</strong>
                <input type="file" class="form-control" name="studCertificate" placeholder="Certificate">
            </div>
        </div>
        <!--<div class="col-md-6">
            <div class="form-group row">
                <strong>Job status:</strong>
                <input type="radio" class="form-check-input" name="studStatus" value="Jobless" >Jobless</input>
                    <input type="radio" class="form-check-input" name="studStatus" value="Have Job" >Have Job</input>
            </div>
        </div>-->

        <div class="col-md-6">
            <div class="form-group">
               <lable for ="studStatus">
                   STATUS
                </label>
                <div class="form-check">
                <input type="radio" name="studStatus" class="form-check-input"  value="JOBLESS" > JOBLESS </input> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="studStatus" class="form-check-input"  value="HAVE JOB" > HAVE JOB </input>
            </div>
        </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        
                <a class="btn btn-primary" href="{{ route('studdents.index') }}"> Back</a>
        </div>
    </div>
   
</form>
@endsection