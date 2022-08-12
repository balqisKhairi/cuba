@extends('layouts.main')
@section('content')

        <div class="col-lg-12 margin-tb">
            <div class="container">
            <div class="row">
               
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
   

                    <!--<a class="btn btn-info" href="{{ route('jobs.show',$s->id) }}">Apply</a> -->
                  
                   
                    <a class="btn btn-info" href="{{ route('register') }}">View</a>

                   
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
 var query=<?php echo json_encode((object)Request::only(['jobName','skillId','jobLocation'])); ?>;

function search_post(){
    Object.assign(query,{'jobName': $('#jobName').val()});
    Object.assign(query,{'skillId': $('#skillId').val()});
    Object.assign(query,{'jobLocation': $('#jobLocatio').val()});
    window.location.href="{{route('alljobs')}}?"+$.param(query);
  }

  </script>
@endsection