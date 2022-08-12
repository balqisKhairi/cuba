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
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
        
}

.card-body{
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
}

.table-bordered{
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
}
.table-one{
    background-color:#000000;
}
    </style>

<div class="card border-primary " style="max-width: 60rem;">
  <div class="card-header">{{ __('MY APPLICATION') }}</div>
  <div class="card-body">
  
<div class="row">


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
         
        </thead>
        @foreach($studdents as $s)
       <tbody>
           <tr >
           <td>{{$s->id}}</td>
           <td><img src="{{ asset($s->jobPic) }}" width='50' height='50' class="img img-responsive"/></td>
               <td>{{$s->jobName}}</td>
               <td>{{$s->jobDesc}}</td>
               <td>{{$s->jobLocation}}</td>
               <td>{{$s->jobPay}}</td>
            
               <td>{{$s->skillId}}</td>
            
               <td>{{$s->jobType}}</td>
               <td>
            @if($s->jobStatus == 0)
        <span class="badge bg-primary">PENDING</span>
        @elseif($s->jobStatus == 1)
        <span class="badge bg-success">APPROVED</span>
        @else
        <span class="badge bg-danger">REJECTED</span>
       @endif
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