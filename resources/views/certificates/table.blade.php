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
                <h2>List of Certificate</h2>
            </div>
           
            
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered" style= color:black;>
        <tr>
            <th>No</th>
            <th>Student ID</th>
            <th>Certificate</th>
            
           <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($certificates as $s)
        <tr>
            <td>{{ $s->id }}</td>
            <!--<td>{{ $s->jobPic }}</td> -->
            <td>{{ $s->studentId }}</td>
            <td>{{$s->certiType }}</td>
            
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
   
                    <a class="btn btn-primary" href="{{ route('studdents.viewCerti',$s->id) }}">Show</a>
    
                   
            <a class="btn btn-primary" href="{{ route('certificates.edit',$s->id) }}">Verify</a>
                    
                    
                </form>
            </td>
        </tr>
        @endforeach
    </table>
   
</div>

@endsection

