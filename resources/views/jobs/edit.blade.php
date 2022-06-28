@extends('layouts.template')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Job</h2>
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
  
    <form action="{{ route('jobs.update',$job->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
   

        @if(Auth::user()->userType=='employer')
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Profile picture:</strong>
                    <input type="file" name="jobPic" value="{{ $job->jobPic }}" class="form-control" placeholder="profile picture">
                </div>
            </div>
           
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="jobName" value="{{ $job->jobName }}" class="form-control" placeholder="title">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description/Requirement:</strong>
                    <input type="text" name="jobDesc" value="{{ $job->jobDesc }}" class="form-control" placeholder="Description/Requirement">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Location:</strong>
                    <input type="text" name="jobLocation" value="{{ $job->jobLocation }}" class="form-control" placeholder="Location">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Salary:</strong>
                    <input type="text" name="jobPay" value="{{ $job->jobPay }}" class="form-control" placeholder="salary">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Skill needed:</strong>
                    <input type="text" name="jobSkill" value="{{ $job->jobSkill }}" class="form-control" placeholder="skill">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Type:</strong>
                    <input type="text" name="jobType" value="{{ $job->jobType }}" class="form-control" placeholder="type">
                </div>
            </div>
            @endif
            @if(Auth::user()->userType=='admin')
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Approval</strong>
                <select name="jobStatus" class="form-control">
                  <option value="0" @if($job->jobStatus==0)selected @endif>Pending</option>
                  <option value="1" @if($job->jobStatus==1)selected @endif>Approve</option>
                  <option value="2" @if($job->jobStatus==2)selected @endif>Reject</option>
                </select>
</div>
</div>
@endif
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-primary" href="{{ route('jobs.index') }}"> Back</a>
            </div>
        </div>
   
  
    </form>
@endsection