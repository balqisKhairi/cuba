@extends('layouts.template')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
            <div class="card">
            <div class="card-header"> {{$applicant->jobName}}</div>

            @foreach($applicants as $applicant)
               
            <div class="card-body">
         <table class="table table-bordered">
        <thead>
         <th>Name</th>
            <th>IC Number</th>
            <th>Gender</th>
            <th>Number</th>
            <th>Address</th>
           <th>Email</th>
           <th>Cerificate</th>
          
        </thead>
        @foreach($applicant->users as $user)
       <tbody>
           <tr>
               <td>{{$user->name}}</td>
</tr>
</tbody>
@endforeach
    </table>
</div>
</div>
@endforeach
</div>
</div>
</div>
</div>
@endsection