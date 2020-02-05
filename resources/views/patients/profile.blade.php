@extends('layouts.app')

@section('content')
<div class="container" style="padding: 20px">
	<div class = "profile"> 
    	{!! Form::label('name', 'Name: ') !!}
    	{{ $patient->last_name}}, {{$patient->first_name}} {{$patient->middle_name}}
	</div>
	<div class = "profile">
    	{!! Form::label('age', 'Age: ') !!}
    	{{ $patient->age}}  
	</div>

	<div class = "profile">
    	{!! Form::label('roomNum', 'Room number: ') !!}
    	{{ $admissions->room}} 
	</div>

	<div class = "profile">
    	{!! Form::label('res', 'Address: ') !!}
    	{{ $residence->street}}, 
    	{{ $residence->city}}, 
    	{{ $residence->postal_code}}, 
    	{{ $residence->province}}, 
    	{{ $residence->country}} 
	</div>
</div>

@endsection
