@extends('layouts.template')
   
@section('content')


<style>
  .gradient-custom {
/* fallback for old browsers */
background: #f093fb;


/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
}

.mb-4{
    color:#000000;
}

.form-label{
    color:#000000;
    font-size: 16px;
}

.form-control{
    color:#000000;
    font-size: 16px;
}

.mb-2{
    color:#000000;
    font-size: 16px;
}

.form-check{
    color:#000000;
}

.btn-primary1:hover {
  background-color: #555555;
  color: white;

}

.btn-primary1  {
  background-color: #ffd338;
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
 
  cursor: pointer;
}
.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .50em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}
</style>

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
  


  <div class="container  h-50">
    <div class="row justify-content-center align-items-center h-50">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="card shadow-2-strong card-registration">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-2">Edit Job Detail</h3>
           

    <form action="{{ route('jobs.update',$job->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
   

        @if(Auth::user()->userType=='employer')
        <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-outline">
                  <label class="form-label" >Picture</label>
                    <input type="file" name="jobPic" value="{{ $job->jobPic }}" class="form-control form-control-lg">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <br>
                 <div class="form-outline">
                 <label class="form-label">Titile</label>
                    <input type="text" name="jobName" value="{{ $job->jobName }}" class="form-control" placeholder="title">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
            <br>
                 <div class="form-outline">
                 <label class="form-label">Description / Requirements</label>
                    <input type="text" name="jobDesc" value="{{ $job->jobDesc }}" class="form-control" placeholder="Description/Requirement">
                </div>
            </div>

            <div class="col-xs-24 col-sm-12 col-md-24">
                <br>
                <div class="form-outline">
                <label class="form-label">Status</label>
                <select name="jobLocation" value="{{ $job->jobLocation }}"class="select form-control">
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
</select> </div>
            </div>

           
            <div class="col-xs-12 col-sm-12 col-md-12">
            <br>
                 <div class="form-outline">
                 <label class="form-label">Salary</label>
                    <input type="text" name="jobPay" value="{{ $job->jobPay }}" class="form-control" placeholder="salary">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
            <br>
            <div class="form-outline">
                 <label class="form-label">Skill</label>
                 <select name="skill_id" class="select form-control">
                   
                    @foreach(App\Skill::all() as $job)
                    <option value="{{ $job->id}}">{{$job->skillName}}  </option>
                   @endforeach
</select>
               </div>
            </div>

            <div class="col-xs-24 col-sm-12 col-md-24">
                <br>
                <div class="form-group">
                <label class="form-label">Type</label>
                <select name="jobType" class="form-control">
               
                   <option value="fulltime" {{($job->jobType === 'fulltime') ? 'Selected' : ''}} >FULLTIME</option>
                   <option value="parttime" {{($job->jobType === 'parttime') ? 'Selected' : ''}} >PART TIME</option>
            </select>
            </div>
              </div>
            @endif


            @if(Auth::user()->userType=='admin')
            <div class="col-xs-24 col-sm-12 col-md-24">
                <br>
                <div class="form-group">
                <label class="form-label">Approval</label>
                <select name="jobStatus" class="form-control">
                  <option value="0" @if($job->jobStatus==0)selected @endif>Pending</option>
                  <option value="1" @if($job->jobStatus==1)selected @endif>Approve</option>
                  <option value="2" @if($job->jobStatus==2)selected @endif>Reject</option>
                </select>
</div>
</div>
@endif
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <br>
            <button type="submit" class="btn btn-primary1">Submit</button>
                <a class="btn btn-primary1" onclick="history.back()"> Back</a>
            </div>
        </div>
   
  
    </form>
@endsection