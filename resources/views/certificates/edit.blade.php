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
  
<div class="container  h-50">
    <div class="row justify-content-center align-items-center h-50">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="card shadow-2-strong card-registration">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-2">Verify Status</h3>
           
   
<form action="{{ route('certificates.update',$certificate->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
     
    @if(Auth::user()->userType=='student')
            <div class="input-group control-group increment" >
                <strong>Certificate</strong>
                <input type="file" name="certiType[]"  value="{{ $certificate->certiType }}"class="form-control" placeholder="CERTIFICATE">
       
        
                <div class="input-group-btn"> 
            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
          </div>
        </div>

        <div class="clone hide">
          <div class="control-group input-group" style="margin-top:10px">
            <input type="file" name="certiType[]" class="form-control">
            <div class="input-group-btn"> 
              <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
            </div>
          </div>
        </div>

        @endif
            @if(Auth::user()->userType=='admin')

            <div class="col-xs-24 col-sm-12 col-md-24">
                <br>
                <div class="form-group">
                <label class="form-label">Approval</label>
                <select name="certiStatus" class="form-control">
                  <option value="0" @if($certificate->certiStatus==0)selected @endif>Pending</option>
                  <option value="1" @if($certificate->certiStatus==1)selected @endif>Approve</option>
                  <option value="2" @if($certificate->certiStatus==2)selected @endif>Reject</option>
                </select>
</div>
</div>
@endif
   
<br></br> &nbsp;
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary1">Submit</button>
        
                <a class="btn btn-primary1" href="{{ route('certificates.index') }}"> Back</a>
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
          $(this).parents(".control-group").remove();
      });

    });

</script>

@endsection