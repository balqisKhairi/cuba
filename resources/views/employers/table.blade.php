@extends('layouts.template')
@section('content')
<style>
.table {

    color: #000000;
}
h2, .h2 {
    font-size: calc(1.325rem + 0.9vw);
    color: #000000;
}

</style>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Employer</h2>
            </div>
            
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Company Name</th>
            <th>Email</th>
            <th>Number</th>
           <th>Joined On</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($employers as $s)
        <tr>
            <td>{{ $s->id }}</td>
            <td>{{ $s->emploCompName }}</td>
            <td>{{ $s->emploEmail }}</td>
            <td>{{ $s->emploNum}}</td>
            <td>{{ $s->created_at }}</td>
            <td>
                <form action="{{ route('employers.destroy',$s->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('employers.show',$s->id) }}">Show</a>
    
                    @if(Auth::user()->userType=='employer')
                    <a class="btn btn-primary" href="{{ route('employers.edit',$s->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endif
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection