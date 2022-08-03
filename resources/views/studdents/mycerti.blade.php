@extends('layouts.template')

@section('content')
<div class="col-lg-12 margin-tb">
            <div class="pull-left">

            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('certificates.create') }}"> Add Certificate</a>
            </div>
            <br>
            <div class="card">
                <div class="card-header">{{ __('MY CERTIFICATE') }}</div>

                <div class="card-body">
                <table class="table table-bordered">
        <thead>
            <th>No</th>
            <th>Certificate</th>
            <th>Status</th>
            
            <th width="280px">Action</th>
</thead>
        @foreach ($studdents as $s)
        <tr>
            <td>{{ $s->id }}</td>
            <td>{{ $s->certiType }}</td>
           <td>
            @if($s->certiStatus == 0)
        <span class="badge bg-primary">PENDING</span>
        @elseif($s->certiStatus == 1)
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
