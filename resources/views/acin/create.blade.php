@extends('layout')

@section('link')

@section('content')
	
	<br><br>
	<h1>Add your company, institution or organization!</h1>

	<hr/>
	
		{{ Form::open(array('action' => 'AcinController@store')) }}
			<div class="form-group">
				{{ Form::label('name', 'Name:') }}
				<br>
				{{ Form::text('name') }}
			</div>
			 

			 <!-- <div class="form-group">
				{{ Form::label('latitude', 'Latitude:') }}
				<br>
				{{ Form::text('latitude') }}
			</div>
			<div class="form-group">
				{{ Form::label('longitude', 'Longitude:') }}
				<br>
				{{ Form::text('longitude') }}
			</div> -->
		
			 

			 <div class="form-group">
				{{ Form::label('about', 'Brief Description:') }}
				<br>
				{{ Form::text('about') }}
			</div>
			<div class="form-group">
				{{ Form::label('address:', 'Address:') }}
				<br>
				{{ Form::text('address') }}
			</div>
			<div class="form-group">
				{{ Form::label('contact:', 'Contact Information:') }}
				<br>
				{{ Form::text('contact') }}
			</div>
			<div class="form-group">
				{{ Form::label('website:', 'Website:') }}
				<br>
				{{ Form::text('website') }}
			</div> 
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Add and Show Map!</button>
			</div>
		{{ Form::close() }}
		<!-- <form method="POST">
			<div class="form-group">
				<p>Name</p>
				<textarea name="name"></textarea>

				<p>Description</p>
				<textarea name="body"></textarea>

				<p>Latitude</p>
				<textarea name="latitude"></textarea>

				<p>Longitude</p>
				<textarea name="longitude"></textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Add and Show Map!</button>
			</div>
		</form> -->

@stop