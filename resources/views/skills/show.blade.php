@extends('layouts.template')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Skill Details</h2>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $skill->skillName }}
            </div>
        </div>
        
        </div>
       
        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('skills.index') }}"> Back</a>
        </div>
    </div>
@endsection