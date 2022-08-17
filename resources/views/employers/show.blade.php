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
thead, tbody, tfoot, tr, td, th {
    border-color: inherit;
    border-style: solid;
    border-width: 0;
    color: black;
}
</style>


<div class="card mb-3">
  <h3 class="card-header" align="center" >Company Details</h3>
  <div class="card-body" >
  <table class="table table-hover" >
  
  <tbody>
    <tr class="table-warning">
      <th scope="row">Company Name :</th>
      <td> {{ $employer->emploCompName }}</td>
      
    </tr>
    <tr>
      <th scope="row">Email :</th>
      <td>{{ $employer->emploEmail }}</td>
     
    </tr>
    
    <tr class="table-warning">
      <th scope="row">Password :</th>
      <td>  {{ $employer->emploPassword }}</td>
    </tr>

    <tr>
      <th scope="row">Contact Number  :</th>
      <td> {{ $employer->emploNum }}</td>
     
    </tr>
    
   
  </tbody>
</table>
</div>
    </div>


<div class="flex-parent jc-center">
  <button class="btn btn-primary1 " type="button" onclick="history.back()">BACK</button>
</div>

@endsection
    