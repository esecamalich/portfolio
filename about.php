<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<link href="https://fonts.googleapis.com/css?family=Droid+Sans:700" rel="stylesheet">
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Sergio Camalich</title>
		<link rel="apple-touch-startup-image" href="images/favicon-500.png">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="#121212" />
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link href="favicon-32.png" rel="shortcut icon">
		<link rel="stylesheet" href="css/main.css" />
		<!--[if lte IE 7]>
		<link rel="stylesheet" type="text/css" href="css/ie.css" />
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body class="about-me single-page">
		<div class="se-pre-con"></div>
		<section class="menu-container big-menu green-container">
			<nav class="menu">
				<ul>
					<li>
						<a href="#">Home</a>
					</li>
					<li>
						<a href="#">Projects</a>
					</li>
					<li>
						<a href="#">About Me</a>
					</li>
					<li>
						<a href="#">Contact</a>
					</li>
				</ul>
			</nav>
		</section>

		<header class="full-width intro-header clone">
			<a href="index.php" class="left logo-container">
				<img class="logo intro-logo svg" src="images/logo-SergioCamalich.svg" alt="">
			</a>
			<a type="button" class="menu-icon right">
				<span></span>
			</a>
		</header>

		<div class="big-parent">
			<!-- INTRO -->
			<section class="main-section full-block center-block intro">
				<!-- INTRO -->
				<div class="intro-txt left">
					<hgroup>
						<h4>You gotta know...</h4>
						<h1>I’m addicted to adventures.</h1>
						<h2>Whether it means climbing frozen mountains, exploring ancient temples or tackling down the complexities of a brand new project.
						<br /><br />
						<em>I am ready to jump right at it!</em></h2>
					</hgroup>
				</div>
				<!-- //INTRO -->
			</section>
			<!-- //INTRO -->
			<!-- ABOUT ME -->
			<section class="main-section full-width about-info polygon-left padtop-100 clear">
				<div class="center-block two-col clear">
					<p>Thanks to a positive and ready-to-go attitude, I have been able to live as a digital nomad for several years while working all over the world for clients thousands of kilometers away.</p>
					<p>It does not matter where I am at the moment, I am always willing to give my best to ensure that the trust my clients lay on me is never broken, delivering top quality results.</p>
				</div>
				<div class="txt-center padbot-100 center-block">
					<ul class="work-icons">
						<li><img src="images/icon-plan.svg" alt="Planning projects by Sergio Camalich"></li>
						<li><img src="images/icon-design.svg" alt="Designing the best results by Sergio Camalich"></li>
						<li><img src="images/icon-code.svg" alt="Coding with standards by Sergio Camalich"></li>
					</ul>
					<h4>I plan, design and hand code my own projects</h4>
				</div>
			</section>
			<!-- //ABOUT ME -->
			<!-- LETS WORK -->
			<section class="main-section map-container full-block">
				<div id="googlemaps" class="full-block location-map"></div>
				<div class="map-info">
						<p>I am currently based in:</p>
						<h2><a href="#">Hanoi, Vietnam</a></h2>
						<p><a href="mailto:sergio@esecamalich.com">Write me an e-mail</a> or <a href="#">send me a postcard</a> and let's work together!</p>
				</div>
			</section>
			<!-- //LETS WORK -->
			<!-- FOOTER -->
			<section class="main-section full-block main-footer">
				<a href="index.php" class="footer-logo"><img src="images/logo-SergioCamalich.svg" alt=""></a>
				<footer class="main-footer-bottom">
					<div class="center-block">
						<p class="left">2017 (c) Sergio Camalich</p>
						<p class="right">If you're reading this, your soul now belongs to me. And your house. And what you're wearing.</p>
					</div>
				</footer>
			</section>
			<!-- //FOOTER -->
		</div>
		<!-- SCRIPTS -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script>
		if (!window.jQuery) {
		    document.write('<script src="js/jquery.js"><\/script>');
		}
		</script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script type="text/javascript" src="https://raw.githubusercontent.com/tuupola/jquery_lazyload/master/jquery.lazyload.js"></script>
		<script type="text/javascript" src="js/jquery.sticky.js"></script>
		<!-- Include the Google Maps API library - required for embedding maps -->
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBhhc-9K4K3xPoyNNBjrvdSFtDhrDJttX4&callback=initMap"></script>

<script type="text/javascript">

// The latitude and longitude of your business / place
var position = [21.0227396, 105.8369637];

function showGoogleMaps() {

    var latLng = new google.maps.LatLng(position[0], position[1]);

    var mapOptions = {
        zoom: 12, // initialize zoom level - the max value is 21
        streetViewControl: false, // hide the yellow Street View pegman
        scaleControl: true, // allow users to zoom the Google Map
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        center: latLng,
				disableDefaultUI: true,
				styles: [
				  {
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "color": "#f5f5f5"
				      }
				    ]
				  },
				  {
				    "elementType": "labels.icon",
				    "stylers": [
				      {
				        "visibility": "off"
				      }
				    ]
				  },
				  {
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#616161"
				      }
				    ]
				  },
				  {
				    "elementType": "labels.text.stroke",
				    "stylers": [
				      {
				        "color": "#f5f5f5"
				      }
				    ]
				  },
				  {
				    "featureType": "administrative.land_parcel",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#bdbdbd"
				      }
				    ]
				  },
				  {
				    "featureType": "poi",
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "color": "#eeeeee"
				      }
				    ]
				  },
				  {
				    "featureType": "poi",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#757575"
				      }
				    ]
				  },
				  {
				    "featureType": "poi.park",
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "color": "#e5e5e5"
				      }
				    ]
				  },
				  {
				    "featureType": "poi.park",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#9e9e9e"
				      }
				    ]
				  },
				  {
				    "featureType": "road",
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "color": "#ffffff"
				      }
				    ]
				  },
				  {
				    "featureType": "road.arterial",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#757575"
				      }
				    ]
				  },
				  {
				    "featureType": "road.highway",
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "color": "#dadada"
				      }
				    ]
				  },
				  {
				    "featureType": "road.highway",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#616161"
				      }
				    ]
				  },
				  {
				    "featureType": "road.local",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#9e9e9e"
				      }
				    ]
				  },
				  {
				    "featureType": "transit.line",
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "color": "#e5e5e5"
				      }
				    ]
				  },
				  {
				    "featureType": "transit.station",
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "color": "#eeeeee"
				      }
				    ]
				  },
				  {
				    "featureType": "water",
				    "elementType": "geometry",
				    "stylers": [
				      {
				        "color": "#c9c9c9"
				      }
				    ]
				  },
				  {
				    "featureType": "water",
				    "elementType": "labels.text.fill",
				    "stylers": [
				      {
				        "color": "#9e9e9e"
				      }
				    ]
				  }
				]
    };

		var image = {
				 url: 'http://www.esecamalich.com/images/marker2.svg',
				 // This marker is 20 pixels wide by 32 pixels high.
				 size: new google.maps.Size(42, 64),
				 origin: new google.maps.Point(10,0),
				 anchor: new google.maps.Point(30,60)
			 };

    map = new google.maps.Map(document.getElementById('googlemaps'),
        mapOptions);

    // Show the default red marker at the location
    marker = new google.maps.Marker({
        position: latLng,
        map: map,
        draggable: false,
				icon: image
    });

		//marker.setMap(null);
}

google.maps.event.addDomListener(window, 'load', showGoogleMaps);
</script>
		<!-- /SCRIPTS -->
	</body>
