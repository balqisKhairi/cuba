@extends('layouts.template')
@section('content')
<style>
.table {

    color: #000000;
}
h2, .h2 {
    font-size: calc(1.325rem + 0.9vw);
    color: #000000;
}

</style>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Jobs</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('jobs.create') }}"> Add New Job</a>
            </div>
            
        </div>
    </div>
   
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
           <th>Skill Required</th>
           <th>Type</th>
           <th>Status</th>
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
            @if($s->jobStatus == 0)
        <span class="badge bg-primary">PENDING</span>
        @elseif($s->jobStatus == 1)
        <span class="badge bg-success">APPROVED</span>
        @else
        <span class="badge bg-danger">REJECTED</span>
       @endif
        </td>
        <td>
                <form action="{{ route('jobs.destroy',$s->id) }}" method="POST">
   

                @if(Auth::user()->userType=='admin')
                    
                    <a class="btn btn-primary" href="{{ route('jobs.edit',$s->id) }}">Verify</a>
                    @endif

                    @if(Auth::user()->userType=='employer')
                    <a class="btn btn-primary" href="{{ route('jobs.edit',$s->id) }}">Edit</a>
                    @endif
                    @csrf
                    
                    
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
</div>

@endsection

