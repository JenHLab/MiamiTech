@extends('layout')

@section('content')

	

	<h1>Edit Company</h1>

	<form method="POST" action="/acin/{{ $acin->id }}">
	{{ method_field('PATCH') }}

		<div class="form-group">
			<textarea name="name" class="form-control">{{ $acin->name }}</textarea>
		</div>
		<div class="form-group">
			<textarea name="about" class="form-control">{{ $acin->about }}</textarea>
		</div>
		<div class="form-group">
			<textarea name="address" class="form-control">{{ $acin->address }}</textarea>
		</div>
		<div class="form-group">
			<textarea name="website" class="form-control">{{ $acin->website }}</textarea>
		</div>
		<div class="form-group">
			<textarea name="contact" class="form-control">{{ $acin->contact }}</textarea>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Update Company</button>
		</div>
	</form>

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