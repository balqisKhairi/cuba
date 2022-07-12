@extends('layouts.template')

@section('content')
<div class="col-lg-12 margin-tb">
            <div class="pull-left">
           
                <div class="card-body">
                <table class="table table-bordered">
        <thead>
            
            <th width="280px">Action</th>
</thead>
        @foreach ($studdents as $s)
      <td>
                <form action="{{ route('studdents.destroy',$s->id) }}" method="POST">
   
                    <a class="btn btn-primary" href="{{ route('studdents.show',$s->id) }}">Show Detail</a>
    
                   
                    <a class="btn btn-primary" href="{{ route('studdents.edit',$s->id) }}">Edit Detail</a>
   
                     
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>

@endsection
