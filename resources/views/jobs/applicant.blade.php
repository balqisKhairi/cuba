@extends('layouts.template')
@section('content')
<div class="row">
<div class="row justify-content-center">
    <div class="col-md-12">
        @foreach($applicants as $applicant)
            <div class="card">
            <div class="card-header"> {{$applicant->jobName}}</div>

            
            <div class="card-body">
         <table class="table table-bordered">
        <thead>
         <th>Name</th>
         <th>IC Number</th>
         <th>Gender</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone Number</th>
           <th>Certificate</th>
           <th>Action</th>
        </thead>
        @foreach($applicant->users as $user)
       <tbody>
           <tr>
               <td>{{$user->studdent->studName}}</td>
               <td>{{$user->studdent->studIC}}</td>
               <td>{{$user->studdent->studGender}}</td>
               <td>{{$user->email}}</td>
               <td>{{$user->studdent->studAddress}}</td>
               <td>{{$user->studdent->studNum}}</td>
              <td>
              <a class="btn btn-primary" href="{{ route('jobs.studCerti',$user->id) }}">VIEW</a>
            </td>
            <td>
   
                    <a class="btn btn-primary" href="{{ route('jobs.emailView',$user->id) }}">SEND EMAIL</a>
    
   
            </td>
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