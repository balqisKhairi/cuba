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
    </style>


<div class="card border-primary " style="max-width: 60rem;">
  <div class="card-header">{{ __('CERTIFICATE') }}</div>
  <div class="card-body">
  

   
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
   
   
<form action="{{ route('certificates.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
    <div class="row">

            <div class="input-group xpress control-group 1st increment" >
               <input type="file" name="certiType[]" class="form-control" placeholder="CERTIFICATE" >
        </div>

        <br>

        <div class="clone d-none">
          <div class="xpress control-group 1st input-group " style="margin-top:10px">
            <input type="file" name="certiType[]" class="form-control">
           
          </div>
        </div>

   
<br></br> &nbsp;
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary1">Submit</button>
        
                <a class="btn btn-primary1" href="{{ route('studdents.mycerti')}}"> Back</a>
        </div>
    </div>
   
</form>
<div>

<script type="text/javascript">

    $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".xpress").remove();
      });

    });

</script>

@endsection