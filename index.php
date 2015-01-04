<?php 
/**
 * Index page.
 *
 * @author Eddie
 */
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Website</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="imagetoolbar" content="no" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="author" content="Eddie" />
<meta name="generator" content="Eddie" />

<!-- stylesheet -->
<link rel="stylesheet" href="./asset/css/bootstrap.min.css">
<link rel="stylesheet" href="./asset/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="./asset/css/font-awesome.min.css">
<link rel="stylesheet" href="./asset/css/font-awesome-ie7.min.css">
<link rel="stylesheet" href="./asset/css/init.css">

<link rel="stylesheet" href="./asset/css/index.css">
</head>

<body>
  <script src="./asset/js/jquery-1.11.1.min.js"></script>

  <!-- Header -->
  <header>
    <div class="container">
      <!-- Logo -->
  	  <div id="logo" class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
  	    <a href="#"></a>
  	  </div>

  	  <!-- Nav-bar -->
  	  <nav id="nav" class="navbar navbar-default col-lg-10 col-md-10 col-sm-10 col-xs-12" role="navigation">
  	    <div class="container-fluid">
  	      <!-- Small icon -->
  	      <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-menu">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <!-- Nav items -->
          <div class="collapse navbar-collapse" id="main-nav-menu">
            <ul class="nav navbar-nav">
              <li><a href="#">About Maldives</a></li>
              <li><a href="#">About Resorts</a></li>
              <li><a href="#">Dive The Maldives</a></li>
              <li><a href="#">Reservation &amp; Booking</a></li>
              <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="100">Contact Us</a>
                <ul class="dropdown-menu" role="menu">
                  <li><span class="contact-tel glyphicon glyphicon-phone-alt"></span>+ 960 332 5994</li>
                  <li><a class="contact-email" href="mailto:dive@maldivesafari.com"><span class="glyphicon glyphicon-envelope"></span> dive@maldivesafari.com</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  	</div>
  </header>

  <!-- Container -->
  <div id="container">
    <!-- Slide banner -->
    <div id="top-banner" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#top-banner" data-slide-to="0" class="active"><span></span></li>
        <li data-target="#top-banner" data-slide-to="1" class=""><span></span></li>
      </ol>
      <!-- Banner-images -->
      <div class="carousel-inner" role="listbox">
        <div class="item active"><img src="./asset/img/DSC_5719.jpg" /></div>
        <div class="item"><img src="./asset/img/DSC_5755.jpg" /></div>
      </div>
      <!-- Controls -->
      <a class="left carousel-control glyphicon glyphicon-chevron-left" href="#top-banner" role="button" data-slide="prev">
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control glyphicon glyphicon-chevron-right" href="#top-banner" role="button" data-slide="next">
        <span class="sr-only">Next</span>
      </a>
    </div>

    <!-- Content -->
    <div class="content">
      <div class="container">
        <section class="welcome ">
      	  <h3>Homepage</h3>
      	  <p>Maldives Princess is a 147-feet liveaboard traversing the crystalline waters of the Maldives. The boat accommodates 9 State Cabins and 2 Ocean View Suite.</p>
          <p>All rooms have their own A/C, flat screen TV, small refridgerators, ensuite bathrooms and nice and roomy. Besides the suite with it’s king sized bed, the other rooms either have 2 twins or 1 queen bed. The spacious sundeck has a fresh water Jacuzzi for guests to relax and chill out…</p>
          <p>Maldives – A diver’s paradise. The crystal clear water surrounding Maldives offers very good visibility, making Maldives one of the top diving destinations in the world. The presence of rare species as well as commonly found marine life are another major reason for the popularity of Maldives as a diving destination. <a class="cabin-view" href="http://maldivesprincess.com/gallery/cabin-view/" title="Cabin View">Click here to view our Gallery</a></p>
        </section>
      </div>
    </div>

  </div>

  <!-- Footer -->
  <footer>
  	<div class="footer-content">
  	  <div class="container">
  	    <div class="row">
  	      <div class="col-sm-3">
  	        <h4>MALDIVES PRINCESS</h4>
  	      	<ul>
  	      	  <li><a href="#">HOME</a></li>
  	      	  <li><a href="#">About the Boat</a></li>
  	      	  <li><a href="#">Accomodation Photos</a></li>
  	      	  <li><a href="#">Dive the Maldives</a></li>
  	      	  <li><a href="#">Reservations & Bookings</a></li>
  	      	</ul>
  	      </div>
  	      <div class="col-sm-3">
  	        <h4>INFO</h4>
  	      	<ul>
  	      	  <li><a href="#">FAQs</a></li>
  	      	  <li><a href="#">Contact</a></li>
  	      	  <li><a href="#">Liability Form</a></li>
  	      	  <li><a href="#">Guest Registration Card</a></li>
  	      	</ul>
  	      </div>
  	      <div class="col-sm-3">
  	      	<h4>Lets Get Connected</h4>
  	      	<div class="social-profiles">
  	      	  <a class="icon-facebook" data-toggle="tooltip" data-placement="top" title="Facebook"></a>
  	      	  <a class="icon-twitter" data-toggle="tooltip" data-placement="top" title="Twitter"></a>
  	      	  <a class="icon-google-plus" data-toggle="tooltip" data-placement="top" title="Google Plus"></a>
  	      	  <a class="icon-pinterest" data-toggle="tooltip" data-placement="top" title="Pinterest"></a>
  	      	  <a class="icon-linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin"></a>
  	      	</div>
  	      </div>
  	    </div>
  	  </div>
  	</div>
  	<!-- Copyright -->
    <div class="copyright">
  	  <div class="container">
  	    <p>Copyright &copy; 2015 MALDIVES PRINCESS</p>
  	    <span><small>design by <em>Eddie Lau</em></small></span>
  	  </div>
    </div>
  </footer>

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="./asset/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="./asset/js/ie-emulation-modes-warning.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="./asset/js/ie10-viewport-bug-workaround.js"></script>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="./asset/js/bootstrap.min.js"></script>
  <script src="./asset/js/bootstrap-hover-dropdown.min.js"></script>

  <script type="text/javascript">
  $(function() {
  	$(".footer-content .social-profiles a").mouseover(function() { // Register.
  		$(this).tooltip("show");});
    });
  </script>

</body>
</html>
