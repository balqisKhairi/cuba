@extends('layouts.template')

@section('content')
<div class="col-lg-12 margin-tb">
            <div class="pull-left">
           
                
                <table class="table table-bordered" >
        <thead>
            
            <th width="280px">Action</th>
</thead>
        @foreach ($employers as $s)
      <td>
                <form action="{{ route('employers.destroy',$s->id) }}" method="POST">
   
                    <a class="btn btn-primary" href="{{ route('employers.show',$s->id) }}">Show Detail</a>
    
                   
                    <a class="btn btn-primary" href="{{ route('employers.edit',$s->id) }}">Edit Detail</a>
   
                     
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>

@endsection
