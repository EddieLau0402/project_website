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
</head>

<body>
  <script src="./asset/js/jquery-1.11.1.min.js"></script>

  <!-- Header -->
  <header>
  	<div class="container">
         <!-- Logo -->
  	  <div id="logo" class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
  	    <a href="#"></a>
  	  </div>
         <!-- Nav-bar -->
         <nav id="nav" class="navbar navbar-default col-lg-10 col-md-10 col-sm-10 col-xs-12" role="navigation">
           <div class="container-fluid">
             <!-- Small icon -->
             <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-menu">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
               </button>
             </div>
             <!-- Nav items -->
             <div class="collapse navbar-collapse" id="main-nav-menu">
               <ul class="nav navbar-nav">
                 <li>
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="100">Categories <span class="caret"></span></a>
                   <ul class="dropdown-menu" role="menu">
                     <li><a href="#">cate-1</a></li>
                     <li><a href="#">cate-2</a></li>
                     <li><a href="#">cate-3</a></li>
                   </ul>
                 </li>
                 <li><a>About Us</a></li>
                 <li><a>Contact Us</a></li>
               </ul>
             </div>
           </div>
         </nav>
  	</div>
  </header>

  <!-- Container -->
  <div>
    <!-- Slide banner -->
    <div id="top-banner" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#top-banner" data-slide-to="1" class="active"><span></span></li>
        <li data-target="#top-banner" data-slide-to="2" class="active"><span></span></li>
        <li data-target="#top-banner" data-slide-to="3" class="active"><span></span></li>
      </ol>
      <!-- Banner-images -->
      <div class="carousel-inner" role="listbox">
        <div class="item active"><img src="" /></div>
        <div class="item"><img src="" /></div>
        <div class="item"><img src="" /></div>
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
    <div></div>

  </div>

  <!-- Footer -->
  <footer></footer>

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

</body>
</html>
