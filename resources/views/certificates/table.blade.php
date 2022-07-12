@extends('layouts.template')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Certificate</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('certificates.create') }}"> Add Certificate</a>
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
            <th>Certificate</th>
            <th>Student ID</th>
           <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($certificates as $s)
        <tr>
            <td>{{ $s->id }}</td>
            <!--<td>{{ $s->jobPic }}</td> -->
            <td><img src="{{ asset($s->certiType) }}" width='50' height='50' class="img img-responsive"/></td>
            <td>{{ $s->studentId }}</td>
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
                <form action="{{ route('certificates.destroy',$s->id) }}" method="POST">
   
                    <a class="btn btn-primary" href="{{ route('certificates.show',$s->id) }}">Show</a>
    
                   
            <a class="btn btn-primary" href="{{ route('certificates.edit',$s->id) }}">Verify</a>
                    
                    
                </form>
            </td>
        </tr>
        @endforeach
    </table>
   
</div>

@endsection

