@extends('layouts.template')
@section('content')

<style>
.button {
  background-color: #ffd338;
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 6px 4px;
  cursor: pointer;
}

.button:hover {
  background-color: #555555;
  color: white;

}


.table-bordered{
  margin-left: auto;
  margin-right: auto;
}

.card-header{
    color:#000000;
    font-size: 16px;
}


.card {
        margin:auto; /* Added */
        float: none; /* Added */
        
}

.form-group{
    float: none; /* Added */
        margin-bottom: 10px; /* Added */
        margin-left: 50px;
        color: #000000;
}
.card-body{
        margin:auto; /* Added */
        float: none; /* Added */
        
}

</style>


@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

  
    
<form action="{{ route('jobs.send',$data->id) }}" method="POST">
    
    @csrf
    
  
     <div class="row">
     <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Message:</strong>
                <textarea name="message"  class="form-control" rows="5"></textarea>
            </div>
        </div>
       
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" name="send" class="button">Submit</button>
        
                <a class="button" href="{{ route('jobs.applicant') }}"> Back</a>
        </div>
    </div>
   
</form>
@endsection