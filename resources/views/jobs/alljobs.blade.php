
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>JOBS AVAILABLE</h2>
                <form action="{{route('alljobs') }}" method="get">
                <div class="form-group">
                    <label> TITLE &nbsp; &nbsp;</label>
                    <input type="text" name="jobName" class="form-control">
                </div> &nbsp; &nbsp;
                <div class="form-group">
                    <label> SKILL&nbsp; &nbsp; </label>
                    <select name="skill_id" class="form-control">
                        <option> Select Skill</option>
                    @foreach(App\Skill::all() as $cat)
                    <option value="{{$cat->id}}">{{$cat->skillName}}</option>
                    @endforeach
                </select>
            </div>&nbsp; &nbsp;
            <div class="form-group">
                    <label>ADDRESS &nbsp; &nbsp;</label>
                    <input type="text" name="jobAddress" class="form-control">
                </div>&nbsp; &nbsp;

                <div class="form-group">
                    <button type="submit" class="btn btn-outline-dark">SEARCH</button>
            </div>
            
        </div>
    </div>
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Picture</th>
            <th>Name</th>
            <th>Desc</th>
            <th>Location</th>
           <th>Salary</th>
           <th>Skill Required</th>
           <th>Type</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($jobs as $s)
        <tr>
            <td>{{ $s->id }}</td>
            <!--<td>{{ $s->jobPic }}</td> -->
            <td><img src="{{ asset($s->jobPic) }}" width='50' height='50' class="img img-responsive"/></td>
           <td>{{ $s->jobName }}</td>
            <td>{{ $s->jobDesc}}</td>
            <td>{{ $s->jobLocation}}</td>
            <td>{{ $s->jobPay}}</td>
            <td>{{ $s->skillId}}</td>
            <td>{{ $s->jobType}}</td>
            <td>
                <form action="{{ route('jobs.destroy',$s->id) }}" method="POST">
   
                    <a class="btn btn-info" href="">Apply</a>
    
                   
                    @csrf
                  
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        <button style="width:100%" class="btn btn-warning btn-lg">Browse All Jobs</button>
</div>
</div>
@endsection