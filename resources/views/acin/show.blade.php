@extends('layout')

@section('content')

	@foreach($acin as $acin)

	<h1>{{ $acin->name }}</h1>

	<ul>
		<li>{{$acin->about}}</li>
		<li>{{$acin->website}}</li>
		<li>{{$acin->address}}</li>
		<li>{{$acin->contact}}</li>
	</ul>
	<div class="form-group">
			<button type="submit" class="btn btn-primary">Update Company</button>
		</div>
	@endforeach
@stop