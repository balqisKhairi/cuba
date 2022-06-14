@extends('layouts.template')
@section('content')
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-8">
        @foreach($applicants as $applicant)
            <div class="card">
            <div class="card-header"> {{$applicant->jobName}}</div>

            
            <div class="card-body">
         <table class="table table-bordered">
        <thead>
         <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone</th>
           <th>Cerificate</th>
        </thead>
        @foreach($applicant->users as $user)
       <tbody>
           <tr>
               <td>{{$user->name}}</td>
               <td>{{$user->email}}</td>
               <td>{{$user->studdent->studAddress}}</td>
               <td>{{$user->studdent->studNum}}</td>
               <td>
                <a href="{{Storage::url($user->studdent->studCertificate)}}">Click Here</a>
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