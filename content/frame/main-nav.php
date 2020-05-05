<nav class="site-navigation navigation navdown">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="site-nav-inner">
                    <button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="logo col-xs-11 col-md-3 pull-left showOnScroll" style="display: none;">
                        <a href="<?php echo WEBROOT; ?>">
                            <img src="<?php echo WEBROOT; ?>images/logoKptalis.png" height="65" width="auto" style="padding: 16px 0 15px 0 ;"  alt="logo Kapitalis">
                        </a>
                    </div><!-- logo end -->

                    <div class="collapse navbar-collapse navbar-responsive-collapse pull-right">
                        <ul class="nav navbar-nav">
                            <li class="<?php if(isset($page) && ($page == "homepage")){ echo "active";} ?>"><a class="cool-link" href="<?php echo WEBROOT; ?>">Accueil</a></li>

                            <li class="dropdown <?php if(isset($page) && ($page == "intro")){ echo "active";} ?>">
                                <a href="<?php echo WEBROOT; ?>brands" class="dropdown-toggle" data-toggle="dropdown">KAPITALIS Sarl</a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="<?php echo WEBROOT; ?>intro">Qui Nous Sommes</a></li>
                                    <li><a href="<?php echo WEBROOT; ?>intro/welcome">Bienvenue chez KAPITALIS: Mot du CEO</a></li>
                                    <li><a href="<?php echo WEBROOT; ?>intro/about#commit">Nos Valeurs & Engagements</a></li>
                                </ul>
                            </li>

                            <li class="dropdown <?php if(isset($page) && ($page == "brands")){ echo "active";} ?>">
                                <a href="<?php echo WEBROOT; ?>brands" class="dropdown-toggle" data-toggle="dropdown">Holdings</a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="<?php echo WEBROOT; ?>brands/kapitalis">Kapitalis Consulting</a></li>
                                    <li><a href="<?php echo WEBROOT; ?>brands/bebeman">BEBEMAN BTP</a></li>
                                    <li><a href="<?php echo WEBROOT; ?>brands/cooperativ">CoopCA-PAC</a></li>
                                    <li><a href="<?php echo WEBROOT; ?>brands/kapimmo">KAPIMMO, The Real Estate</a></li>
                                </ul>
                            </li>

                            <li class="dropdown <?php if(isset($page) && ($page == "projects")){ echo "active";} ?>">
                                <a href="<?php echo WEBROOT; ?>projects" class="dropdown-toggle" data-toggle="dropdown">Nos Prestations</a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="<?php echo WEBROOT; ?>projects/news">Actualités</a></li>
                                    <li><a href="<?php echo WEBROOT; ?>projects/all">Nos Dossiers</a></li>
                                </ul>
                            </li>

                            <li class=" <?php if(isset($page) && ($page == "contact")){ echo "active";} ?>"><a href="<?php echo WEBROOT; ?>contact">Contact</a></li>

                        </ul>
                        <!--/ Nav ul end -->
                    </div>
                    <!--/ Collapse end -->

                </div><!-- Site Navbar inner end -->

            </div>
            <!--/ Col end -->
        </div>
        <!--/ Row end -->

        <div class="nav-search">
            <span id="search"><i class="fa fa-search"></i></span>
        </div><!-- Search end -->

        <div class="search-block" style="display: none;">
            <input type="text" class="form-control" placeholder="Type what you want and enter">
            <span class="search-close">&times;</span>
        </div><!-- Site search end -->
    </div>
    <!--/ Container end -->

</nav>
