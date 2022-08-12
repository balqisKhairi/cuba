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
  margin: 4px 2px;
  cursor: pointer;
}

.button:hover {
  background-color: #555555;
  color: white;

}

.flex-parent {
  display: flex;
}

.jc-center {
  justify-content: center;
}

.table-bordered{
  margin-left: auto;
  margin-right: auto;
}
</style>


@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <div class="col-lg-12 margin">
         <table class="table table-bordered" >
              <thead>
            
            <th width="280px">Action</th>
            </thead>
        
</div>
        @foreach ($studdents as $s)
      <td>
                <form action="{{ route('studdents.destroy',$s->id) }}" method="POST">

                <div class="flex-parent jc-center">
   
                    <a class="button" href="{{ route('studdents.show',$s->id) }}">Show Detail</a>
    
                   
                    <a class="button" href="{{ route('studdents.edit',$s->id) }}">Edit Detail</a>
   
                     
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>

@endsection
