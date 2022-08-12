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
        margin-left: 50px;
}

.card-body{
       /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
       
}

.table-bordered{
        /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
}
    </style>


<div class="card border-primary " style="max-width: 60rem;">
  <div class="card-header">{{ __('MY CERTIFICATE') }}</div>
  <div class="card-body">
  
<div class="row">

    <div class="col-md-12">
         <a class="btn btn-success" href="{{ route('certificates.create') }}"> Add Certificate</a>
        <br></br>
            
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
           
            <td>{{$s->certiType}}</td>
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
   
                    <a class="btn btn-primary" href="{{ asset($s->certiType) }}" download="" >Download</a>

                    <a class="btn btn-primary" href="{{ route('studdents.viewCerti',$s->id) }}">Show</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger remove-user">Delete</button>
                    
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
</div>
@endsection
