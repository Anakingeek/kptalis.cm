<!DOCTYPE html>
<html lang="fr" class="h-100">
    
<head>

<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">

<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="google-site-verification" content="4jd6jo4jqAVV8YqxB0H3N-0VQTfCHn2CCXYByRdmp0I" />

<meta name="description" content="<?= $description ?? ''; ?>">
<meta name="<?= $robotName ?? ''; ?>" content="<?= $robotContent ?? ''; ?>" />

<base href="/kptalis.cm/" >
<link rel="icon" type="image/png" href="utils/images/logos/kapilogo.png" />

<title>KAPITALIS | <?= $pageTitle ?? ''; ?></title>

	<!-- CSS
	================================================== -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="utils/css/bootstrap.min.css">
	<!-- Template styles-->
	<link rel="stylesheet" href="utils/css/style.css">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="utils/css/responsive.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="utils/css/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="utils/css/animate.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="utils/css/owl.carousel.min.css">
	<link rel="stylesheet" href="utils/css/owl.theme.default.min.css">
	<!-- Colorbox -->
	<link rel="stylesheet" href="utils/css/colorbox.css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	<!--[if lt IE 9]>
      <script src="utils/js/html5shiv.js"></script>
      <script src="utils/js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	<div class="body-inner">

		<!-- Topbar start -->
        <?php include_once 'frame/top-bar.php';?>
		<!--/ Topbar end -->

        <!-- Header start -->

        <!--/ Navigation start -->
        <?php include_once 'frame/main-nav.php';?>
        <!--/ Navigation end -->

        <!--/ Header end -->

        <!-- Specific Content -->
        <?= $pageView ?? '  Bien essayé!!'; ?>
        <!-- End Specific Content -->
	

        <!-- Footer start -->
        <?php require_once 'frame/main-footer.php';?>
        <!-- Footer end -->


  <!-- Javascript Files
================================================== -->

  <!-- initialize jQuery Library -->
  <script type="text/javascript" src="utils/js/jquery.js"></script>
  <!-- Bootstrap jQuery -->
  <script type="text/javascript" src="utils/js/bootstrap.min.js"></script>
  <!-- Owl Carousel -->
  <script type="text/javascript" src="utils/js/owl.carousel.min.js"></script>
  <!-- Color box -->
  <script type="text/javascript" src="utils/js/jquery.colorbox.js"></script>
  <!-- Isotope -->
  <script type="text/javascript" src="utils/js/isotope.js"></script>
  <script type="text/javascript" src="utils/js/ini.isotope.js"></script>


  <!-- Google Map API Key-->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
  <!-- Google Map Plugin-->
  <script type="text/javascript" src="utils/js/gmap3.js"></script>

 <!-- Template custom -->
 <script type="text/javascript" src="utils/js/custom.js"></script>

</div><!-- Body inner end -->
</body>

<!-- Page scripts
================================================== -->

<?= $pageJavascripts ?? ''; ?>



</html>