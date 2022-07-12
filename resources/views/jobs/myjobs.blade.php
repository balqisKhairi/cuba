@extends('layouts.template')

@section('content')
<div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <div class="card">
                <div class="card-header">{{ __('MY JOB') }}</div>

                <div class="card-body">
                <table class="table table-bordered">
        <thead>
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
</thead>
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
   
                    <a class="btn btn-primary" href="{{ route('jobs.show',$s->id) }}">Show</a>
    
                   
                    <a class="btn btn-primary" href="{{ route('jobs.edit',$s->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger remove-user">Delete</button>
                    
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>

@endsection
