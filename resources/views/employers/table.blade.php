@extends('layouts.template')
@section('content')

<style>

.card-header{
    color:#000000;
    font-size: 16px;
}

.btn-success{
    background: rgb(255,207,35);
    color: rgb(0,0,0)
}
.card {
         /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
        margin-left: 50px;
}

.card-body{
       /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
       
}

h3, .h3 {
    font-size: calc(1.3rem + 0.6vw);
    color:#000000;
}
.table-bordered{
        /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
}
thead, tbody, tfoot, tr, td, th {
    border-color: inherit;
    border-style: solid;
    border-width: 0;
    color: black;
}
    </style>


<div class="row justify-content-center"  style="max-width: 70rem;">
    <div class="col-md-12">

    <div class="card">
            <div class="card-header"><h3> List of Employers</h3></div>

            
            <div class="card-body"  style="max-width: 80rem;">
         <table class="table table-bordered">
      
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    
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
</div>
</div>
</div>
</div>
</div>

@endsection