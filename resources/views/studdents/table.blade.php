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
        margin-left: 20px;
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


<div class="row justify-content-center"  style="max-width: 90rem;">
    <div class="col-md-12">

    <div class="card">
            <div class="card-header"><h3> List of Students</h3></div>

            
            <div class="card-body"  style="max-width: 90rem;">
         <table class="table table-bordered">


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
   
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>IC Number</th>
            <th>Gender</th>
            <th>Number Phone</th>
            <th>Address</th>
            <th>Email</th>
          
            <th>Job status (Have a job?)</th>
         
            <th width="280px">Action</th>
        </tr>
        @foreach ($studdents as $s)
        <tr>
            <td>{{ $s->id }}</td>
            <td>{{ $s->studName }}</td>
            <td>{{ $s->studIC }}</td>
            <td>{{ $s->studGender }}</td>
            <td>{{ $s->studNum }}</td>
            <td>{{ $s->studAddress }}</td>
            <td>{{ $s->studEmail }}</td>
           
            <td>
            @if($s->studStatus == 0)
        <span class="badge bg-primary">YES</span>
        @elseif($s->studStatus == 1)
        <span class="badge bg-success">NOT YET</span>
        @else
        <span class="badge bg-danger">STILL WAITING</span>
       @endif
        </td>
            <td>
                <form action="{{ route('studdents.destroy',$s->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('studdents.show',$s->id) }}">Show</a>
    
                    <!--<a class="btn btn-primary" href="{{ route('studdents.edit',$s->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>-->
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