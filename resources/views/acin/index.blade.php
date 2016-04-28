@extends('layout')

@section('link')
<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css"/>
<script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

<style type="text/css">
.leaflet-popup-tip,
.leaflet-popup-content-wrapper {
    background:white;
    color: black;
}
 </style>
@stop

@section('content')

<div id="mapid" style="width: 950px; height: 400px; margin: 60px;"></div>

	
	<script>

		var mymap = L.map('mapid').setView([25.7753, -80.2089], 12);

		L.tileLayer('http://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
	attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community'
		}).addTo(mymap);
		

		function addDataToMap(data, mymap) {
	    	//var dataLayer = L.geoJson(data);
	    	var myLayer = L.geoJson(data, {
    		onEachFeature: myOnEachFeatureFunction
		})
	    	myLayer.addTo(mymap);

		function myOnEachFeatureFunction(feature, layer){
    		if (feature.properties.name) {
        	layer.bindPopup(feature.properties.name);
    		}
		}

		};

		$.getJSON("http://homestead.app/json", function(data) {


		addDataToMap(data, mymap); 	

		});

	</script>

	<p>Companies, Organizations, etc:</p>

	@foreach ($acin as $acin)
		<div>
			
			
			<h1><a href="{{ URL::to('acin/*/edit', $acin->id) }}">{{ $acin->name }}</a></h1>
			<ul>
		<li>{{$acin->user_id}}</li>	
		<li>{{$acin->about}}</li>
		<li>{{$acin->website}}</li>
		<li>{{$acin->address}}</li>
		<li>{{$acin->contact}}</li>
	</ul>
	<!-- <div class="form-group">
			<button hrfe class="btn btn-primary">Update Company</button>
		</div> -->
			<a href="/acin/{acin}/edit'" class="btn btn-primary">Edit Company</a>

		</div>

	@endforeach

@stop