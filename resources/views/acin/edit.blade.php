@extends('layout')

@section('content')

	
	<div style="padding-left: 10px;">
	<h1>Edit Company</h1>

	<form method="POST" action="/acin/{{ $acin->id }}">
	{{ method_field('PATCH') }}

		<div class="form-group">
			<p>Name
			<textarea name="name" class="form-control">{{ $acin->name }}</textarea>
			</p>
		</div>
		<div class="form-group">
			<p>About
			<textarea name="about" class="form-control">{{ $acin->about }}</textarea>
			</p>
		</div>
		<div class="form-group">
			<p>Address
			<textarea name="address" class="form-control">{{ $acin->address }}</textarea>
			</p>
		</div>
		<div class="form-group">
			<p>Website
			<textarea name="website" class="form-control">{{ $acin->website }}</textarea>
			</p>
		</div>
		<div class="form-group">
			<p>Contact
			<textarea name="contact" class="form-control">{{ $acin->contact }}</textarea>
			</p>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Update Company</button>
		</div>
	</form>

		<a href="/acin" class="btn btn-info" role="button">Back to Map</a>

		</div>
	<!-- {{ Form::open(array('url' => 'http://homestead.app/acin/1/edit')) }}
			<div class="form-group">
				{{ Form::label('name', 'Name:') }}
				<br>
				{{ Form::text('name') }}
			</div>
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
				<button type="submit" class="btn btn-primary">Edit</button>
			</div>
		{{ Form::close() }} -->

	

@stop