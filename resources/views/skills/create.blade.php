@extends('layouts.template')
@section('content')
<style>
  .gradient-custom {
/* fallback for old browsers */
background: #f093fb;


/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
}

.mb-4{
    color:#000000;
}

.form-label{
    color:#000000;
    font-size: 16px;
}

.form-control{
    color:#000000;
    font-size: 16px;
}

.mb-2{
    color:#000000;
    font-size: 16px;
}

.form-check{
    color:#000000;
}

.btn-primary1:hover {
  background-color: #555555;
  color: white;

}

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
.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .50em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}
</style>

<div class="container  h-50">
    <div class="row justify-content-center align-items-center h-50">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="card shadow-2-strong card-registration">
          <div class="card-body p-4 p-md-5">
     
        <h1 class="text-black mb-4">Add Skill</h1>

        @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
<form action="{{ route('skills.store') }}" method="POST">
    @csrf
  
    <div class="card" style="border-radius: 15px;">
          <div class="card-body">
    
          <hr class="mx-n3">
        <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">Skill Name</h6>
                 </div>
              <div class="col-md-9 pe-5">

                <input type="text" class="form-control form-control-lg"name="skillName" />

              </div>
            </div>

            <hr class="mx-n3">

<div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <button type="submit" class="btn btn-primary1">Submit</button>

    <a class="btn btn-primary1" onclick="history.back()"> Back</a>

</div>
</div>

</div>
</div>
</div>

</form>
@endsection
