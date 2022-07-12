@extends('layouts.template')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Student</h2>
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
  
    <form action="{{ route('studdents.update',$studdent->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="studName" value="{{ $studdent->studName }}" class="form-control" placeholder="Name"></input>
                </div>
            </div> 

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>IC Number:</strong>
                    <input type="text" class="form-control" name="studIC" value="{{ $studdent->studIC }}" placeholder="IC Number"></input>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <lable for ="studGender">
                   Gender
                </label>
                <div class="form-check">
                <input type="radio" name="studGender" class="form-check-input" id="genderM" value="{{ $studdent->studGender }}" >
            <label for="genderM" class="form-check-label">
                Male
        </label>
            </div>
        </div>
        <div class="form-check">
                <input type="radio" name="studGender" class="form-check-input" id="genderF" value="{{ $studdent->studGender }}" >
            <label for="genderF" class="form-check-label">
                Female
        </label>
            </div>
        </div> 
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Phone Number:</strong>
                    <input type="text" textarea class="form-control" name="studNum" value="{{ $studdent->studNum }}" placeholder="phone number"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address:</strong>
                    <input type="text" class="form-control"  name="studAddress" value="{{ $studdent->studAddress }}" placeholder="Address"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" class="form-control" name="studEmail" value="{{ $studdent->studEmail }}" placeholder="Email"></input>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Password:</strong>
                    <input type="text" class="form-control" name="studPassword" value="{{ $studdent->studPassword }}" placeholder="Password"></input>
                </div>
            </div> 
            <!--<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Certificate (IF ANY):</strong>
                    <input type="file" class="form-control" name="studCertificate" value="{{ $studdent->studCertificate}}" placeholder="Certificate"></input>
                </div>
            </div> -->

            @if(Auth::user()->userType=='student')
            <div class="col-xs-24 col-sm-12 col-md-24">
                <div class="form-group">
                    <strong>Job Status (Are you already have a job or not?):</strong>
                    <select name="studStatus" class="form-control">
                  <option value="0" @if($studdent->studStatus==0)selected @endif>YES</option>
                  <option value="1" @if($studdent->studStatus==1)selected @endif>NOT YET</option>
                  <option value="2" @if($studdent->studStatus==2)selected @endif>STILL WAITING</option>
                </select></div>
</div>

           @endif

        
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href=""> Back</a>
            </div>
        </div>
   
    </form>
@endsection