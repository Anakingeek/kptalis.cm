<?php ?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="js/jquery.carouFredSel-6.0.4-packed.js" type="text/javascript"></script>
    <script src="js/script.js" type="text/javascript"></script>

    <link rel="stylesheet" href="css/ticker-style.css" />

    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/kptalis.cm/content/frame/head.php';?>


</head>

<body>

<div class="body-inner">

    <!--/ Topbar start -->
    <!--?php include_once $_SERVER['DOCUMENT_ROOT'].'/kptalis.cm/content/frame/top-bar.php';?>
    <!--/ Topbar end -->

    <!-- Header start -->
    <header id="header" class="header-one">
        <div class="container">
            <div class="row">
                <div class="logo-area clearfix">
                    <div class="logo col-xs-12 col-md-3">
                        <a href="<?php echo WEBROOT; ?>">
                            <img src="<?php echo WEBROOT; ?>images/logoKptalis.png" height="44" width="auto" alt="">
                        </a>
                    </div><!-- logo end -->

                    <div class="col-xs-12 col-md-9 header-right">
                    </div><!-- header right end -->
                </div><!-- logo area end -->

            </div><!-- Row end -->
        </div><!-- Container end -->

        <!--/ Navigation start -->
        <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/kptalis.cm/content/frame/main-nav.php';?>
        <!--/ Navigation end -->
    </header>
    <!--/ Header end -->


    <!-- Specific Content -->
    <?php echo $content; ?>
    <!-- End Specific Content -->


    <!-- Footer start -->
    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/kptalis.cm/content/frame/main-footer.php';?>
    <!-- Footer end -->

    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/kptalis.cm/content/frame/foot.php';?>

</div><!-- Body inner end -->
</body>

</html>
