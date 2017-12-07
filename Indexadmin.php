<!doctype html>
<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}

?>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>El plan b de bici</title>
		<meta name="description" content="La ciclomensajería el plan b lleva más de cinco 
		enviando y haciendo servicio de catering en la ciudad de Madrid sin contaminar.
		Envía con el plan b de bici y respira tranquilo">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="mensajeria,bici,envios, madrid,barato,no contaminar">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
	<!--[if lt IE 9]> <script src="js/html5shiv.js"></script> 
	<script src="js/respond.min.js"></script> <![endif]--> 		
        <!-- Place favicon.ico in the root directory -->
		<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/style.css">

    </head>
<body >
		 <!-- start preloader -->
        <div id="loader-wrapper">
            <div class="logo"></div>
            <div id="loader">
            </div>
        </div>
        <!-- end preloader -->
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
		
<!-- Start Header Section -->
<header class="main_menu_sec navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-12">
				<div class="lft_hd">
					<a href="index.html"><img src="img/logo.png" alt=""/></a>
					<!-- <b>Bienvenido <?php echo $_SESSION["user_id"]; ?> -->
				</div>
			</div>			
			<div class="col-lg-9 col-md-9 col-sm-12">
				<div class="rgt_hd">					
					<div class="main_menu">
						<nav id="nav_menu">
							<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							</button>	
						<div id="navbar">
							<ul>
								<li><a class="page-scroll" href="#slider_sec">Usuarios</a></li> 
								<li><a class="page-scroll" href="#abt_sec">Clientes</a></li>
								<li><a class="page-scroll" href="#skill_sec">Facturas</a></li>
								<li><a class="page-scroll" href="#pr_sec">Envios</a></li>
								<li><a class="page-scroll" href="#pricing_sec">Roles</a></li>
								<li><a class="page-scroll" href="#protfolio_sec">Tarifas</a></li>
								<li><a class="page-scroll" href="#ltd_map_sec">Sucursales</a></li>
								<li><a class="page-scroll" href="#counting_sec">Redes sociales</a></li>
								<li><a class="page-scroll" href="./php/logout.php">Salir</a></li>
								<li><a class="page-scroll"><b>User: <?php echo $_SESSION["user_id"]; ?></b></a></li>
							</ul>
						</div>		
						</nav>			
					</div>					
						
				</div>
			</div>	
		</div>	
	</div>	
</header>
<!-- End Header Section -->

<!-- start slider Section -->
<section id="slider_sec">
	<div class="container">
		<div class="row">
		<p><h2>Usuarios en construcción</h2></p>
		</div>			
	</div>	
</section>
<!-- End slider Section -->

<!-- start about Section -->
<section id="abt_sec">
	<div class="container">
		<div class="row">
			<!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="title_sec">
					<h1>NOSOTROS</h1>
					<h2>MÁS DE CINCO AÑOS DE EXPERIENCIA</h2>
				</div>			
			</div>		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="abt">
					<p>El plan b de bici empieza a dar servicios en 2012, con nuestro primer cliente, la libreria Desnivel y a partir  de ahí
						se han ido sumando más empresas, a las cuales le agradecemos su confianza en nosotros. En estos años hemos crecido en
						flota y en experiencia. Ahora contamos con bicis cargos que tienen motor y que nos hace llevar hasta unos 80 Kg. Estamos 
						encantado de ser parte del cambio y crear una ciudad más sana y silenciosa. 
					</p>
				</div>
			</div>			 -->
			<p><h2>Clientes en construcción</h2></p>
		</div>
	</div>
</section>
<!-- End About Section -->
<!-- start about register -->

<!-- End register section -->



<!-- start Counting section-->
<section id="counting_sec">
<div class="container">
	<div class="row">	

		
	</div>					
</div>
</section>


<!-- start progress bar Section -->
<section id="skill_sec">
	<div class="container">
		<div class="row">
		<p><h2>Facturas en construcción</h2></p>
		</div>
	</div>
</section>
<!-- End progress bar Section -->

<!-- start Service Section -->
<section id="pr_sec">
	<div class="container">
		<div class="row">
		<p><h2>Envios en construcción</h2></p>
		</div>
	</div>
</section>
<!-- End Service Section -->

<!-- start portfolio Section -->
<section id="protfolio_sec">
	<div class="container">
		<div class="row">
		<p><h2>Tarifas en construcción</h2></p>
			</div>			
		</div>
</section>
<!-- End Portfolio Section -->

<!-- start our team Section -->
<!-- <section id="tm_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="title_sec">
					<h1>Nuestro equipo</h1>
					<h2>WE’RE BRANDING & DIGITAL STUDIO FROM VIET NAM</h2>
				</div>			
			</div>		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12">
				<div class="all_team">
					<div class="sngl_team">						
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-1.png" alt=""/>	
						<h3> Jamie Catllahan <span>Designer</span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>						
					</div>					
					<div class="sngl_team">						
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-2.png" alt=""/>	
						<h3>Lisa Kudrow <span> Manager </span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>						
					</div>				
					<div class="sngl_team">						
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-3.png" alt=""/>	
						<h3> John Clarance <span>   Senior Manager   </span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>						
					</div>				
					<div class="sngl_team">						
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-4.png" alt=""/>	
						<h3>Sheena Maya<span> Developer </span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>						
					</div>					
					<div class="sngl_team">						
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-1.png" alt=""/>	
						<h3> Jamie Catllahan <span>Designer</span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>						
					</div>					
					<div class="sngl_team">						
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-2.png" alt=""/>	
						<h3>Lisa Kudrow <span> Manager </span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>						
					</div>				
					<div class="sngl_team">						
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-3.png" alt=""/>	
						<h3> John Clarance <span>   Senior Manager   </span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>						
					</div>				
					<div class="sngl_team">						
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-4.png" alt=""/>	
						<h3>Sheena Maya<span> Developer </span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>						
					</div>				
					<div class="sngl_team">						
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-1.png" alt=""/>	
						<h3> Jamie Catllahan <span>Designer</span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>						
					</div>					
					<div class="sngl_team">						
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-2.png" alt=""/>	
						<h3>Lisa Kudrow <span> Manager </span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>						
					</div>				
					<div class="sngl_team">						
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-3.png" alt=""/>	
						<h3> John Clarance <span>   Senior Manager   </span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>						
					</div>				
					<div class="sngl_team">						
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-4.png" alt=""/>	
						<h3>Sheena Maya<span> Developer </span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>						
					</div>													
				</div>			
			</div>
		</div>
	</div>
</section> -->
<!-- End our team Section -->

<!-- start our teastimonial Section -->
<!-- <section id="tstm_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="all_tstm">
					
				<div class="clnt_tstm">
					<div class="sngl_tstm">
						<i class="fa fa-quote-right"></i>
						<h3>what people say?</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur sequi accusamus voluptatum rem itaque alias deleniti nostrum aperiam fugiat voluptates debitis praesentium incidunt accusantium distinctio,</p>
						<h6>- jhon deo</h6>					
					</div>
				</div>						
				
				<div class="clnt_tstm">
					<div class="sngl_tstm">
						<i class="fa fa-quote-right"></i>
						<h3>Clien Design</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur sequi accusamus voluptatum rem itaque alias deleniti nostrum aperiam fugiat voluptates debitis praesentium incidunt accusantium distinctio,</p>
						<h6>- shura deo</h6>					
					</div>
				</div>				
				<div class="clnt_tstm">
					<div class="sngl_tstm">
						<i class="fa fa-quote-right"></i>
						<h3>Awesome Support SIMA</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur sequi accusamus voluptatum rem itaque alias deleniti nostrum aperiam fugiat voluptates debitis praesentium incidunt accusantium distinctio,</p>
						<h6>- kumara deo</h6>					
					</div>
				</div>				
				<div class="clnt_tstm">
					<div class="sngl_tstm">
						<i class="fa fa-quote-right"></i>
						<h3>Theme Feature great</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur sequi accusamus voluptatum rem itaque alias deleniti nostrum aperiam fugiat voluptates debitis praesentium incidunt accusantium distinctio,</p>
						<h6>- dhera deo</h6>					
					</div>
				</div>				
				<div class="clnt_tstm">
					<div class="sngl_tstm">
						<i class="fa fa-quote-right"></i>
						<h3>Non conflict</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur sequi accusamus voluptatum rem itaque alias deleniti nostrum aperiam fugiat voluptates debitis praesentium incidunt accusantium distinctio,</p>
						<h6>- jhon deo</h6>					
					</div>
				</div>	
					
				</div>
			</div>	
		</div>
	</div>
</section> -->
<!-- End our teastimonial Section -->


<!-- start Latest post Section -->
<!--section id="lts_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="title_sec">
					<h1>Our Latest Blog</h1>
					<h2>WE’RE BRANDING & DIGITAL STUDIO FROM VIET NAM</h2>
				</div>			
			</div>		
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="lts_pst">						
					<img src="http://cdn.shopify.com/s/files/1/1039/5466/files/blog-img2.jpg?10828543012475550494" alt=""/>
					<h2>How to fix your bug</h2>
					<p>Nullam metus arcu, pharetra eu tempor vel, consectetur nec metus. Praesent malesuada, purus et euismod rutrum, augue nisi facilisis diam, vitae auctor nisl libero nec eros. Vivamus vitae pulvinar augue. Nulla facilisi. Quisque rutrum ante interdum</p>
					<a href="single.html">Read more <i class="fa fa-long-arrow-right"></i></a>					
				</div>
			</div>			
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="lts_pst">						
					<img src="http://cdn.shopify.com/s/files/1/1039/5466/files/blog-img3.jpg?16122351990094232768" alt=""/>
					<h2>Pellentesque nibh libero</h2>
					<p>Nullam metus arcu, pharetra eu tempor vel, consectetur nec metus. Praesent malesuada, purus et euismod rutrum, augue nisi facilisis diam, vitae auctor nisl libero nec eros. Vivamus vitae pulvinar augue. Nulla facilisi. Quisque rutrum ante interdum</p>
					<a href="">Read more <i class="fa fa-long-arrow-right"></i></a>					
				</div>
			</div>		
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="lts_pst">						
					<img src="http://cdn.shopify.com/s/files/1/1039/5466/files/blog-img1.jpg?1960436319992241823" alt=""/>
					<h2>pharetra eu tempor vel</h2>
					<p>Nullam metus arcu, pharetra eu tempor vel, consectetur nec metus. Praesent malesuada, purus et euismod rutrum, augue nisi facilisis diam, vitae auctor nisl libero nec eros. Vivamus vitae pulvinar augue. Nulla facilisi. Quisque rutrum ante interdum</p>
					<a href="">Read more <i class="fa fa-long-arrow-right"></i></a>					
				</div>
			</div>
			<div class="post_btn">
				<div class="hover_effect_btn" id="hover_effect_btn">
					<a href="#hover_effect_btn" data-hover="view more post"><span>view more post</span></a>
				</div>
			</div>			
		</div>
	</div>
</section>
<!-- End Latest post Section !-->

<!-- start pricing Section -->
<section id="pricing_sec">
	<div class="container">
		<div class="row">
		<p><h2>Roles en construcción</h2></p>
		</div>
	</div>
</section>

<!-- End Happy Client  Section -->

<!-- start contact us Section -->
<section id="ctn_sec">
	<div class="container">
		<div class="row">
			<p><h2>Redes Sociales en construcción</h2></p>
		</div>
	</div>
</section>
<!-- End contact us  Section -->

<!--End section Sing up-->

<!-- start located map Section -->
<section id="ltd_map_sec">
<div class="container">
	<div class="row">
	<p><h2>Sucursales en construcción</h2></p>
	</div>
</div>
</section>

<!-- End located map  Section -->

<!-- start footer Section -->
<footer id="ft_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="ft">						
					<ul>
						<li><a href="http://www.facebook.com/elplanbdebici/"><i class="fa fa-facebook"></i></a></li>
						<li><a href="http://www.twitter.com/elplanbdebici/"><i class="fa fa-twitter"></i></a></li>
						<li><a href="http://www.instagram.com/elplanbdebici/"><i class="fa fa-instagram"></i></a></li>
						<li><a href=""><i class="fa fa-rss"></i></a></li>
						<li><a href=""><i class="fa fa-flickr"></i></a></li>
						<li><a href=""><i class="fa fa-pinterest"></i></a></li>
						<li><a href=""><i class="fa fa-linkedin"></i></a></li>
						<li><a href=""><i class="fa fa-skype"></i></a></li>
						<li><a href=""><i class="fa fa-google"></i></a></li>
					</ul>					
				</div>
				<ul class="copy_right">
					<li>&copy;ELPLANBDEBICI</li>
					<li>REEDITADA POR MONSIEUR B</li>
				</ul>					
			</div>	
		</div>
	</div>
</footer>
<!-- End footer Section -->


<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="js/vendor/jquery-1.11.2.min.js"></script>

<script src="js/isotope.pkgd.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/appear.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/showHide.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/scrolling-nav.js"></script>
<script src="js/plugins.js"></script>
<!-- Google Map js -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>
		<script>
			function initialize() {
			  var mapOptions = {
				zoom: 11,
				scrollwheel: false,
				center: new google.maps.LatLng(41.092586000000000000, -3.6863510)
			  };
			  var map = new google.maps.Map(document.getElementById('googleMap'),
				  mapOptions);
			  var marker = new google.maps.Marker({
				position: map.getCenter(),
				animation:google.maps.Animation.BOUNCE,
				icon: 'img/map-marker.png',
				map: map
			  });
			}
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
<script src="js/main.js"></script>

<script src="showHide.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function(){
   $('.show_hide').showHide({			 
		speed: 1000,  // speed you want the toggle to happen	
		easing: '',  // the animation effect you want. Remove this line if you dont want an effect and if you haven't included jQuery UI
		changeText: 1, // if you dont want the button text to change, set this to 0
		showText: 'View',// the button text to show when a div is closed
		hideText: 'Close' // the button text to show when a div is open
					 
	}); 
});
</script>
<script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });
</script>

<script>
  //Hide Overflow of Body on DOM Ready //
$(document).ready(function(){
    $("body").css("overflow", "hidden");
});
// Show Overflow of Body when Everything has Loaded 
$(window).load(function(){
    $("body").css("overflow", "visible");        
    var nice=$('html').niceScroll({
	cursorborder:"5",
	cursorcolor:"#00AFF0",
	cursorwidth:"3px",
	boxzoom:true, 
	autohidemode:true
	});
});
</script>



    </body>
</html>
© 2017 GitHub, Inc.
Terms
Privacy
Security
Status
Help
Contact GitHub
API
Training
Shop
Blog
