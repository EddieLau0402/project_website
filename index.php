<?php 
/**
 * Index page.
 *
 * @author Eddie
 */

define('ROOT_PATH', dirname(__FILE__));
// define('CSS_PATH', ROOT_PATH . "/asset/css");
// define('JS_PATH', ROOT_PATH . "/asset/js");
define('CSS_PATH', "asset/css");
define('JS_PATH', "asset/js");
define('PAGE_PATH', ROOT_PATH . "/pages");

$display = array();
$page = strtolower(trim($_GET['main']));
switch ($page) {
	case 'about_maldives':
		$display = array(
			'cssFiles' => array('index.css'), 
			'jsFiles' => array(), 
			'page' => "about_maldives.php", 
		);
		break;
	
	default: // home page.
		$display = array(
			'cssFiles' => array("index.css"), 
			// 'jsFiles' => array("index_home.js"), 
			'jsFiles' => array(), 
			'page' => "home.php", 
		);
		break;
}

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


<?php 
if (isset($display['cssFiles']) && !empty($display['cssFiles'])) 
	foreach ($display['cssFiles'] as $cssFile) 
		echo "<link rel=\"stylesheet\" href=\"" . CSS_PATH . "/{$cssFile}\">\n"; 
?>

</head>

<body>
  <script src="./asset/js/jquery-1.11.1.min.js"></script>

  <!-- Header -->
  <?php include(dirname(__FILE__) . "/header.php"); ?>

  <!-- Container -->
  <div id="container">
  <?php 
  if (isset($display['page']) && !empty($display['page'])) 
  	include(PAGE_PATH . "/{$display['page']}");
  ?>
  </div>

  <!-- Footer -->
  <?php include(dirname(__FILE__) . "/footer.php"); ?>


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

  <?php 
  if (isset($display['jsFiles']) && !empty($display['jsFiles'])) 
	foreach ($display['jsFiles'] as $jsFile) 
		echo "<script src=\"" . JS_PATH . "/{$jsFile}\"></script>\n"; 
  ?>

</body>
</html>
