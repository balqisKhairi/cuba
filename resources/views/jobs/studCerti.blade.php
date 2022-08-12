@extends('layouts.template')
@section('content')
<div class="row">
<div class="row justify-content-center">
    <div class="col-md-12">
       
            
            <div class="card-body">
         <table class="table table-bordered">
        <thead>
        <th>No</th>
            <th>Certificate</th>
           <th>Status</th>
           <th>Action</th>
        </thead>
      
       <tbody>
        @foreach ($certi as $s)
           <tr>
           <td>{{$s->id}}</td>
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
               <a class="btn btn-primary" href="{{ route('studdents.viewCerti',$s->id) }}">Show</a>
            </td>
</tr>
</tbody>
@endforeach
    </table>
</div>
</div>

</div>
</div>
</div>
</div>
@endsection