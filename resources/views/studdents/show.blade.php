@extends('layouts.template')
@section('content')
    <style>
.btn-primary1  {
  background-color: #ffd338;
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
 
  cursor: pointer;
}

.flex-parent {
  display: flex;
}

.jc-center {
  justify-content: center;
}

.btn-primary1:hover {
  background-color: #555555;
  color: white;

}

.card-header{
    color: black;
}

.table table-hover{
    
}
</style>


<div class="card mb-3">
  <h3 class="card-header" align="center" >My Profile</h3>
  <div class="card-body">
  <table class="table table-hover">
  
  <tbody>
    <tr class="table-warning">
      <th scope="row">Name :</th>
      <td>{{ $studdent->studName }}</td>
      
    </tr>
    <tr>
      <th scope="row">IC Number :</th>
      <td>{{ $studdent->studIC }}</td>
     
    </tr>
    <tr class="table-warning">
      <th scope="row">Gender :</th>
      <td> {{ $studdent->studGender }}</td>
     
    </tr>
    <tr >
      <th scope="row">Phone Number :</th>
      <td> {{ $studdent->studNum }}</td>
    
    </tr>
    <tr class="table-warning">
      <th scope="row">Address :</th>
      <td> {{ $studdent->studAddress }}</td>
      
    </tr>
    <tr >
      <th scope="row">Email :</th>
      <td>{{ $studdent->studEmail }}</td>
     
    </tr>
    <tr class="table-warning">
      <th scope="row">Job Status :</th>
            
      @if($studdent->studStatus == 0)
      <td>Yes</td>
      @else
        <td>Not Yet</td>
       @endif
      
    </tr>
   
  </tbody>
</table>


<div class="flex-parent jc-center">
  <button class="btn btn-primary1 " type="button" onclick="history.back()">BACK</button>
 
</div>
    </div>
</div>
@endsection