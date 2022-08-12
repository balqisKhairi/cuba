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
  margin: 6px 4px;
  cursor: pointer;
}

.button:hover {
  background-color: #555555;
  color: white;

}


.table-bordered{
  margin-left: auto;
  margin-right: auto;
}

.card-header{
    color:#000000;
    font-size: 16px;
}


.card {
        margin:auto; /* Added */
        float: none; /* Added */
        
}

.card-body{
        margin:auto; /* Added */
        float: none; /* Added */
        
}

</style>


@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <div class="card border-primary " style="max-width: 60rem;">
  <div class="card-header">{{ __('MY ACCOUNT') }}</div>
  <div class="card-body">
 
<div class="row">
<div class="row justify-content-center">

        @foreach ($studdents as $s)
      <td>
                <form action="{{ route('studdents.destroy',$s->id) }}" method="POST">

              
   
                    <a class="button" href="{{ route('studdents.show',$s->id) }}">Show Detail</a>
    
                   
                    <a class="button" href="{{ route('studdents.edit',$s->id) }}">Edit Detail</a>
   
                     
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
</div>
</div>
@endsection
