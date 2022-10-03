@extends('layouts.main')
@section('content')

        <div class="col-lg-12 margin-tb">
            <div class="container">
            <div class="row">
                <h2>JOBS AVAILABLE</h2>
</div>
                <form action="{{ route('alljobs') }}" method="get ">
                <div class="form-inline">
               <!-- <div class="form-group">
                    <label> TITLE &nbsp; &nbsp;</label>
                    <input type="text" name="jobName" id="jobName" class="form-control">
                </div> &nbsp; &nbsp; -->

                <div class="form-group">
                   <label> SKILL&nbsp; &nbsp; </label>
                    <select name="skill_id" id="skill_filter" class="form-control">
                    <option value=""> --SELECT--</option>
                    @foreach(App\Skill::all() as $cat)
                    <option value="{{$cat->id}}">{{$cat->skillName}}</option>
                    @endforeach


                </select>
            </div>&nbsp; &nbsp; 

           <!--  <div class="form-group">
                    <label>LOCATION &nbsp; &nbsp;</label>
                    <select name="jobLocation" id="jobLocation"class="form-control">
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
                </div>&nbsp; &nbsp;-->

                <div class="form-group">
                    <button class="btn btn-outline-dark" onlick="search_post()"  >SEARCH</button>
            </div>
            </form>
        </div>
    </div>
    <hr>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Picture</th>
            <th>Name</th>
            <th>Desc</th>
            <th>Location</th>
           <th>Salary</th>
          <!-- <th>Skill Required</th>-->
           <th>Type</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($posts as $s)
        <tr>
            <td>{{ $s->id }}</td>
            <!--<td>{{ $s->jobPic }}</td> -->
            <td><img src="{{ asset($s->jobPic) }}" width='50' height='50' class="img img-responsive"/></td>
           <td>{{ $s->jobName }}</td>
            <td>{{ $s->jobDesc}}</td>
            <td>{{ $s->jobLocation}}</td>
            <td>{{ $s->jobPay}}</td>
            <!--<td>{{ $s->skill_id}}</td>-->
            <td>{{ $s->jobType}}</td>
            <td>
                <form action="{{ route('jobs.destroy',$s->id) }}" method="POST">
   

                    <!--<a class="btn btn-info" href="{{ route('jobs.show',$s->id) }}">Apply</a> -->
                  
                   
                    <a class="btn btn-info" href="{{ route('login') }}">View</a>

                   
                    @csrf
                  
                </form>  
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        <button style="width:100%" onclick href="{{ route('alljobs') }}"class="btn btn-warning btn-lg">Browse All Jobs</button>
</div>
</div>


@endsection

@section('javascript')
<script type="text/javascript">
 var query=<?php echo json_encode((object)Request::query()); ?>;

function search_post(){
    Object.assign(query,{'jobName': $('#jobName').val()});
    Object.assign(query,{'skill': $('#skill_filter').val()});
    Object.assign(query,{'jobLocation': $('#location_filter').val()});
    window.location.href="{{route('studView')}}?"+$.param(query);
  }

  </script>
@endsection