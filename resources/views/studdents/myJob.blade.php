@extends('layouts.template')
@section('content')
<div class="row">
<div class="row justify-content-center">
    <div class="col-md-12">
      
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
         
        </thead>
        @foreach($studdents as $s)
       <tbody>
           <tr>
           <td>{{$s->id}}</td>
           <td><img src="{{ asset($s->jobPic) }}" width='50' height='50' class="img img-responsive"/></td>
               <td>{{$s->jobName}}</td>
               <td>{{$s->jobDesc}}</td>
               <td>{{$s->jobLocation}}</td>
               <td>{{$s->jobPay}}</td>
               <td>{{$s->skillId}}</td>
               <td>{{$s->jobType}}</td>
               <td></td>
              
           
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