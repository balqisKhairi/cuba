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
        margin-right: 20px;
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
thead, tbody, tfoot, tr, td, th {
    border-color: inherit;
    border-style: solid;
    border-width: 0;
    color: black;
}
    </style>


<div class="card border-primary " style="max-width: 70rem;">
  <div class="card-header">{{ __('Applicants Certificate') }}</div>
  <div class="card-body">
  <div class="row">
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