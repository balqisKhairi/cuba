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


<div class="row justify-content-center"  style="max-width: 70rem;">
<div class="col-md-12">

<div class="pull-right">
                <a class="btn btn-success" href="{{ route('skills.create') }}"> Add New Skill</a>
            </div>
            <br>
            <br>

<div class="card">
        <div class="card-header"><h3> List of Skills</h3></div>

            
        <div class="card-body"  style="max-width: 70rem;">
         <table class="table table-bordered">

       
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
           
            <th width="280px">Action</th>
        </tr>
        @foreach ($skills as $s)
        <tr>
            <td>{{ $s->id }}</td>
            <td>{{ $s->skillName }}</td>
           
            <td>
                <form action="{{ route('skills.destroy',$s->id) }}" method="POST">
   
                 
    
                    <a class="btn btn-primary" href="{{ route('skills.edit',$s->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" onclick="return confirm('Are you sure want to delete this?')"  class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection