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

.btn-primary:hover {
  background-color: #555555;
  color: white;

}

.btn-primary  {
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
  


  <div class="container  h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="card shadow-2-strong card-registration">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-2">Edit Detail</h3>
           

            <form action="{{ route('employers.update',$employer->id) }}" method="POST">
        @csrf
        @method('PUT')
   
              <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">

                  <div class="form-outline">
                  <label class="form-label" > Company Name</label>
                    <input type="text" name="emploCompName" value="{{ $employer->emploCompName }}" class="form-control form-control-lg" />
                  </div>
                </div>

          
                 <div class="col-xs-12 col-sm-12 col-md-12">
            <br>
                 <div class="form-outline">
                 <label class="form-label">Email</label>
                 <input type="text"   name="emploEmail" value="{{ $employer->emploEmail}}" class="form-control form-control-lg" />
                    </div>
                </div>
             
           
                <div class="col-xs-12 col-sm-12 col-md-12">
            <br>
                 <div class="form-outline">
                 <label class="form-label">Password </label>
                 <input type="text" name="emploPassword" value="{{ $employer->emploPassword }}" placeholder="Email" class="form-control form-control-lg" />
                    </div>
                </div>
             
                <div class="col-xs-12 col-sm-12 col-md-12">
            <br>
                 <div class="form-outline">
                 <label class="form-label">Contact Number</label>
                 <input type="Password" name="emploNum" value="{{ $employer->emploNum }}" placeholder="Email" class="form-control form-control-lg" />
                    </div>
                </div>

              

              <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <br>
              <button type="submit" class="btn-primary">Submit</button>
                <a class="btn-primary" href="{{ route('employers.myAcc') }}"> Back</a>
            </div>
        </div>
    </form>
          
</section>
    

@endsection
    