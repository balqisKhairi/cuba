@extends('layouts.template')

@section('content')
<!--<div class="row">
        <div class="col-lg-12 margin-tb"> -->
        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card">
                <div class="card-header">
            <div class="pull-left">
                <h2>Result Search of Job</h2>
            </div>
        </div>
    </div>
   
    <div class="card-body">
                 <div class="mb-4">
                      <form class="form-inline" action="#">
                      <label for="jobName"> Job Title &nbsp;&nbsp;</label>
                      <input type="text" class="form-control"  name="jobName" placeholder="Enter Job" id="jobName" data-column="0">
                     
                       <label for="location"> Location &nbsp;</label>
                       <select class="form-control" id="location" name="location">
                        <option value="">Select Location</option>
                      <!-- @if(count($jobs))
                          @foreach($jobs as $location)
                             <option value="{{$location->jobLocation}}"  {{(Request::query('location') && Request::query('location')==$location->jobLocation)?'selected':''}}  >{{$location->jobLocation}}</option>
                          @endforeach
                        @endif --> 
                   <option value="JOHOR"> JOHOR</option>
                   <option value="KELANTAN"> KELANTAN</option>
                   <option value="KEDAH"> KEDAH</option>
                   <option value="KUALA LUMPUR"> KUALA LUMPUR</option>
                   <option value="LABUAN">LABUAN</option>
                   <option value="MELAKA"> MELAKA</option>
                   <option value="NEGERI SEMBILAN"> NEGERI SEMBILAN</option>
                   <option value="PAHANG">PAHANG</option>
                   <option value="PENANG"> PENANG</option>
                   <option value="PERAK"> PERAK</option>
                   <option value="PERLIS">PERLIS</option>
                   <option value="PUTRAJAYA">PUTRAJAYA</option>
                   <option value="SABAH">SABAH</option>
                   <option value="SARAWAK">SARAWAK</option>
                   <option value="SELANGOR">SELANGOR</option>
                   <option value="TERENGGANU">TERENGGANU</option>
                      </select>

                      <label for="skill"> Skill &nbsp;</label>
                       <select class="form-control" id="skill" name="skill">
                        <option value="">Select Skill</option>
                       @if(count($jobs))
                          @foreach($jobs as $skill)
                             <option value="{{$skill->jobSkill}}"  {{(Request::query('skill') && Request::query('skill')==$skill->jobSkill)?'selected':''}}  >{{$skill->jobSkill}}</option>
                          @endforeach
                        @endif
                      </select>

                      <span>&nbsp;</span> 
                       <button type="button" onclick="search_post()" class="btn btn-primary" >Search</button>
                 
                       @if(Request::query('jobName') || Request::query('location')|| Request::query('skill'))
                        <a class="btn btn-success" href="{{route('applications.index')}}">Clear</a>
                       @endif

                       </form>
                  </div>
    <!--<table class="table-responsive"> -->
    <div class="table-responsive">
                    <table style="width: 100%;" class="table table-stripped ">
                      <thead>
            <tr>
            <th>No</th>
            <th>Picture</th>
            <th>Name</th>
            <th>Desc</th>
            <th>Location</th>
           <th>Salary</th>
           <th>Skill Required</th>
           <th>Type</th>
            <th >Action</th>
        </tr>
        </thead>
        <tbody>
        @if(count($jobs))
        @foreach ($jobs as $app)
        <tr>
            <td>{{ $app->id }}</td>
            <td><img src="{{ asset($app->jobPic) }}" width='100' height='100' class="img img-responsive"/></td>
            <td style="width:10%">{{ $app->jobName }}</td>
            <td style="width:20%">{{ $app->jobDesc}}</td>
            <td>{{ $app->jobLocation}}</td>
            <td>{{ $app->jobPay}}</td>
            <td>{{ $app->jobSkill}}</td>
            <td>{{ $app->jobType}}</td>
            <td style="width:250px;">

               <!-- <form action="{{ route('applications.destroy',$app->id) }}" method="POST"> -->
   
                    <a class="btn btn-info" href="{{ route('applications.show',$app->id) }}">VIEW DETAIL</a>
    
                    <a class="btn btn-primary" href="{{ route('applications.edit',$app->id) }}">APPLY</a>
   
                    </td>
                     </tr>
                      @endforeach
                        @else

                          <tr>
                            <td colspan="6" >No posts found</td>
        
                          </tr>
                        @endif

                
                      </tbody>
                    </table>
  
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
                  @csrf
                    @method('DELETE')
      
                    <!--<button type="submit" class="btn btn-danger">Delete</button> -->
                
           
@endsection

@section('javascript')
<script type="text/javascript">
  var query=<?php echo json_encode((object)Request::only(['keyword','location','skill'])); ?>;
  
  function search_post(){
   
    Object.assign(query,{'keyword': $('#keyword').val()});
    Object.assign(query,{'location': $('#location').val()});
    Object.assign(query,{'skill': $('#skill').val()});
    window.location.href="{{route('applications.index')}}?"+$.param(query);
  }

  var path = "{{ url('typeahead_autocomplete/action') }}";

  $('#jobName').typeahead({

    source: function(query, process){

        return $.get(path, {query:query}, function(data){

            return process(data);

        });

    }

});

</script>


  </script>
@endsection