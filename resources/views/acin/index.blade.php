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

<!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">MiamiTech</h1>
                        <p class="intro-text">An online directory of technology companies, higher education institutions and organizations in Miami-Dade County.</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>MiamiTech Map</h2>
                <p>Browse the map below to see where the company, higher education institution or organization is located. Click on marker for more information.</p>
                <div id="mapid" style="width: 950px; height: 400px; margin: -60px;"></div>
                <p>List of Markers on the Map:</p>

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
                <p>Grayscale includes full HTML, CSS, and custom JavaScript files along with LESS files for easy customization.</p>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Add a Company</h2>
                    <p>Add your company, organization, institution to the map!</p><a href="http://homestead.app/acin/create" class="btn btn-default btn-lg">Add another company</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact</h2>
                <p>This project was built using Laravel 5.2. MiamiTech is part of a larger Miami-Dade county interactive project that can be used as a tool for residents and county officials to better understand county dynamics, economy, transportation infrastructure, traffic congestion and think innovatively about the future.</p>
                <p>j.hernandez35@miami.edu</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/Jenhlab" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/JenHLab/MiamiTech" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

	
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

	

@stop

@yield('footer')