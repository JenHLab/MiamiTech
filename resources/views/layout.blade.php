<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        
        <title>MiamiTech</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/grayscale.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">


        @yield('link')

        <style>
            body {
    width: 100%;
    height: 100%;
    font-family: Lora,"Helvetica Neue",Helvetica,Arial,sans-serif;
    color: #000;
    background-color: #fff;
}

html {
    width: 100%;
    height: 100%;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    margin: 0 0 35px;
    text-transform: uppercase;
    font-family: Montserrat,"Helvetica Neue",Helvetica,Arial,sans-serif;
    font-weight: 700;
    letter-spacing: 1px;
}

p {
    margin: 0 0 25px;
    font-size: 18px;
    line-height: 1.5;
}

@media(min-width:768px) {
    p {
        margin: 0 0 35px;
        font-size: 20px;
        line-height: 1.6;
    }
}

a {
    color: #42dca3;
    -webkit-transition: all .2s ease-in-out;
    -moz-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
}

a:hover,
a:focus {
    text-decoration: none;
    color: #1d9b6c;
}

.light {
    font-weight: 400;
}

.navbar-custom {
    margin-bottom: 0;
    border-bottom: 1px solid rgba(255,255,255,.3);
    text-transform: uppercase;
    font-family: Montserrat,"Helvetica Neue",Helvetica,Arial,sans-serif;
    background-color: #000;
}

.navbar-custom .navbar-brand {
    font-weight: 700;
}

.navbar-custom .navbar-brand:focus {
    outline: 0;
}

.navbar-custom .navbar-brand .navbar-toggle {
    padding: 4px 6px;
    font-size: 16px;
    color: #fff;
}

.navbar-custom .navbar-brand .navbar-toggle:focus,
.navbar-custom .navbar-brand .navbar-toggle:active {
    outline: 0;
}

.navbar-custom a {
    color: #fff;
}

.navbar-custom .nav li a {
    -webkit-transition: background .3s ease-in-out;
    -moz-transition: background .3s ease-in-out;
    transition: background .3s ease-in-out;
}

.navbar-custom .nav li a:hover {
    outline: 0;
    color: rgba(255,255,255,.8);
    background-color: transparent;
}

.navbar-custom .nav li a:focus,
.navbar-custom .nav li a:active {
    outline: 0;
    background-color: transparent;
}

.navbar-custom .nav li.active {
    outline: 0;
}

.navbar-custom .nav li.active a {
    background-color: rgba(255,255,255,.3);
}

.navbar-custom .nav li.active a:hover {
    color: #fff;
}

@media(min-width:768px) {
    .navbar-custom {
        padding: 20px 0;
        border-bottom: 0;
        letter-spacing: 1px;
        background: 0 0;
        -webkit-transition: background .5s ease-in-out,padding .5s ease-in-out;
        -moz-transition: background .5s ease-in-out,padding .5s ease-in-out;
        transition: background .5s ease-in-out,padding .5s ease-in-out;
    }

    .navbar-custom.top-nav-collapse {
        padding: 0;
        border-bottom: 1px solid rgba(255,255,255,.3);
        background: #000;
    }
}

.intro {
    display: table;
    width: 100%;
    height: auto;
    padding: 100px 0;
    text-align: center;
    color: #fff;
    background: url(../img/intro-bg.jpg) no-repeat bottom center scroll;
    background-color: #000;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
}

.intro .intro-body {
    display: table-cell;
    vertical-align: middle;
}

.intro .intro-body .brand-heading {
    font-size: 30px;
}

.intro .intro-body .intro-text {
    font-size: 15px;
}

@media(min-width:768px) {
    .intro {
        height: 100%;
        padding: 0;
    }

    .intro .intro-body .brand-heading {
        font-size: 80px;
    }

    .intro .intro-body .intro-text {
        font-size: 18px;
    }
}

.btn-circle {
    width: 70px;
    height: 40px;
    margin-top: 15px;
    padding: 5px 10px;
    border: 2px solid #fff;
    border-radius: 100%!important;
    font-size: 20px;
    color: #fff;
    background: 0 0;
    -webkit-transition: background .3s ease-in-out;
    -moz-transition: background .3s ease-in-out;
    transition: background .3s ease-in-out;
}

.btn-circle:hover,
.btn-circle:focus {
    outline: 0;
    color: #fff;
    background: rgba(255,255,255,.1);
}

.btn-circle i.animated {
    -webkit-transition-property: -webkit-transform;
    -webkit-transition-duration: 1s;
    -moz-transition-property: -moz-transform;
    -moz-transition-duration: 1s;
}

.btn-circle:hover i.animated {
    -webkit-animation-name: pulse;
    -moz-animation-name: pulse;
    -webkit-animation-duration: 1.5s;
    -moz-animation-duration: 1.5s;
    -webkit-animation-iteration-count: infinite;
    -moz-animation-iteration-count: infinite;
    -webkit-animation-timing-function: linear;
    -moz-animation-timing-function: linear;
}

@-webkit-keyframes pulse {    
    0% {
        -webkit-transform: scale(1);
        transform: scale(1);
    }

    50% {
        -webkit-transform: scale(1.2);
        transform: scale(1.2);
    }

    100% {
        -webkit-transform: scale(1);
        transform: scale(1);
    }
}

@-moz-keyframes pulse {    
    0% {
        -moz-transform: scale(1);
        transform: scale(1);
    }

    50% {
        -moz-transform: scale(1.2);
        transform: scale(1.2);
    }

    100% {
        -moz-transform: scale(1);
        transform: scale(1);
    }
}

.content-section {
    padding-top: 100px;
}

.download-section {
    width: 100%;
    padding: 50px 0;
    color: #000;
    background: url(../img/downloads-bg.jpg) no-repeat center center scroll;
    background-color: #fff;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
}

#map {
    width: 100%;
    height: 200px;
}

@media(min-width:767px) {
    .content-section {
        padding-top: 100px;
    }

    .download-section {
        padding: 100px ;
    }
}

.btn {
    border-radius: 0;
    text-transform: uppercase;
    font-family: Montserrat,"Helvetica Neue",Helvetica,Arial,sans-serif;
    font-weight: 400;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
}

.btn-default {
    border: 1px solid #42dca3;
    color: #42dca3;
    background-color: transparent;
}

.btn-default:hover,
.btn-default:focus {
    border: 1px solid #42dca3;
    outline: 0;
    color: #000;
    background-color: #42dca3;
}

ul.banner-social-buttons {
    margin-top: 0;
}

@media(max-width:1199px) {
    ul.banner-social-buttons {
        margin-top: 15px;
    }
}

@media(max-width:767px) {
    ul.banner-social-buttons li {
        display: block;
        margin-bottom: 20px;
        padding: 0;
    }

    ul.banner-social-buttons li:last-child {
        margin-bottom: 0;
    }
}

footer {
    padding: 50px 0;
    size: 10px;
}

footer p {
    margin: 0;
}

::-moz-selection {
    text-shadow: none;
    background: #fcfcfc;
    background: rgba(255,255,255,.2);
}

::selection {
    text-shadow: none;
    background: #fcfcfc;
    background: rgba(255,255,255,.2);
}

img::selection {
    background: 0 0;
}

img::-moz-selection {
    background: 0 0;
}

body {
    webkit-tap-highlight-color: rgba(255,255,255,.2);
}
        </style>
    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
        <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">MiamiTech
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">View Map</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download">Add Company</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">About/Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <script type="text/javascript">
        function collapseNavbar() {
            if ($(".navbar").offset().top > 50) {
                $(".navbar-fixed-top").addClass("top-nav-collapse");
            } else {
                $(".navbar-fixed-top").removeClass("top-nav-collapse");
            }
        }

        $(window).scroll(collapseNavbar);
        $(document).ready(collapseNavbar);

        // jQuery for page scrolling feature - requires jQuery Easing plugin
        $(function() {
            $('a.page-scroll').bind('click', function(event) {
                var $anchor = $(this);
                $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top
                }, 1500, 'easeInOutExpo');
                event.preventDefault();
            });
        });

        // Closes the Responsive Menu on Menu Item Click
        $('.navbar-collapse ul li a').click(function() {
          if ($(this).attr('class') != 'dropdown-toggle active' && $(this).attr('class') != 'dropdown-toggle') {
            $('.navbar-toggle:visible').click();
          }
        });
    </script>

    @yield('content')
    <!-- Footer -->
    <footer>
    @yield('footer')
        <div class="container text-center">
            <p>Copyright &copy; wwww.jlab.miami</p>
        </div>
    </footer>
       

    </body>
</html>