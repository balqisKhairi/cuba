@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Students</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('studdents.create') }}"> Add New Student</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>IC Number</th>
            <th>Gender</th>
            <th>Number Phone</th>
            <th>Address</th>
            <th>Email</th>
            <th>Certificate</th>
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
            <td><a href= "{{ Storage::url($s->studCertificate) }} "></a></td>
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
    
                    <a class="btn btn-primary" href="{{ route('studdents.edit',$s->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection