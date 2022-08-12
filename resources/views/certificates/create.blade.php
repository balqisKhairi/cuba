@extends('layouts.template')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            
        </div>
       
    </div>
</div>
   
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
  
     
            <div class="input-group xpress control-group 1st increment" >
                <strong>Certificate</strong>
                <input type="file" name="certiType[]" class="form-control" placeholder="CERTIFICATE" >
       
        
                <div class="input-group-btn"> 
            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
          </div>
        </div>

        <div class="clone d-none">
          <div class="xpress control-group 1st input-group " style="margin-top:10px">
            <input type="file" name="certiType[]" class="form-control">
            <div class="input-group-btn"> 
              <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
            </div>
          </div>
        </div>

   
<br></br> &nbsp;
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        
                <a class="btn btn-primary" onclick="history.back()"> Back</a>
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