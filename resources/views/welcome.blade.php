@extends('layout')

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
                
                <p>List of Markers on the Map:</p>
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
                <p><a href="mailto:feedback@startbootstrap.com">j.hernandez35@miami.edu</a>
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
<!-- <br><br>
<p><a href="http://homestead.app/acin">View Map!</a> </p>
<p><a href="http://homestead.app/acin/create">Add your company, organization, institution to the map!</a> </p> -->

@stop

@yield('footer')
