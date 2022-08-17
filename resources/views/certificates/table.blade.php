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
            <div class="card-header"><h3> List of Certificates</h3></div>

            
            <div class="card-body"  style="max-width: 80rem;">
         <table class="table table-bordered">
      
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
            <th>No</th>
            <th>Student ID</th>
            <th>Certificate</th>
            
           <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($certificates as $s)
        <tr>
            <td>{{ $s->id }}</td>
            <!--<td>{{ $s->jobPic }}</td> -->
            <td>{{ $s->studentId }}</td>
            <td>{{$s->certiType }}</td>
            
           <td>
            @if($s->certiStatus == 0)
        <span class="badge bg-primary">PENDING</span>
        @elseif($s->certiStatus == 1)
        <span class="badge bg-success">APPROVED</span>
        @else
        <span class="badge bg-danger">REJECTED</span>
       @endif
        </td>
        <td>
                <form action="{{ route('certificates.destroy',$s->id) }}" method="POST">
   
                    <a class="btn btn-primary" href="{{ route('studdents.viewCerti',$s->id) }}">Show</a>
    
                   
            <a class="btn btn-primary" href="{{ route('certificates.edit',$s->id) }}">Verify</a>
                    
                    
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

