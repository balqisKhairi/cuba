@extends('layouts.template')
@section('content')
<style>

.card-header{
    color:#000000;
    font-size: 16px;
}

.btn-success{
    background: rgb(255,207,35);
    color: rgb(0,0,0)
}
.card {
         /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
        margin-left: 20px;
}

.card-body{
       /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
       
}

h3, .h3 {
    font-size: calc(1.3rem + 0.6vw);
    color:#000000;
}
.table-bordered{
        /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
}

thead, tbody, tfoot, tr, td, th {
    border-color: inherit;
    border-style: solid;
    border-width: 0;
    color: black;
}
    </style>


<div class="row justify-content-center"  style="max-width: 70rem;">
    <div class="col-md-12">

    <div class="card">
            <div class="card-header"><h3> List of Jobs</h3></div>

            
            <div class="card-body"  style="max-width: 70rem;">
         <table class="table table-bordered">

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

   
   
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
            <td>{{ $s->skill_id}}</td>
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

                    <a class="btn btn-primary" href="{{ route('jobs.show',$s->id) }}">Show</a>
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
</div>
</div>
</div>

@endsection

