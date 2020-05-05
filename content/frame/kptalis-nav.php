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
                        <a href="<?php echo WEBROOT; ?>">KAPITALIS CONSULTING </a>
                    </div><!-- logo end -->

                    <div class="collapse navbar-collapse navbar-responsive-collapse pull-right">
                        <ul class="nav navbar-nav">
                            <li class="dropdown <?php if(isset($page) & $page = "accueil"){ echo "active";} ?>">
                                <a href="<?php echo WEBROOT; ?>" class="dropdown-toggle" data-toggle="dropdown">ACCUEIL<!--i class="fa fa-angle-down"></i--></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li class=""><a href="<?php echo WEBROOT; ?>index#aboutUs">Qui Nous Sommes</a></li>
                                    <li class=""><a href="<?php echo WEBROOT; ?>index#atouts">Nos atouts</a></li>
                                    <li class=""><a href="<?php echo WEBROOT; ?>index#vision">Une Ambition</a></li>
                                    <li class=""><a href="<?php echo WEBROOT; ?>index#brands">Nos filières</a></li>
                                    <li class=""><a href="<?php echo WEBROOT; ?>index#ourTeam">Notre Équipe</a></li>
                                    <li class=""><a href="<?php echo WEBROOT; ?>index#partners">Nos Partenaires</a></li>
                                    <li class=""><a href="<?php echo WEBROOT; ?>index#findUs">Où Nous Trouver</a></li>
                                </ul>
                            </li>

                            <li class="dropdown <?php if(isset($page) & $page = "brands"){ echo "active";} ?>">
                                <a href="<?php echo WEBROOT; ?>brands" class="dropdown-toggle" data-toggle="dropdown">Nos Filères<!--i class="fa fa-angle-down"></i--></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="<?php echo WEBROOT; ?>brands/kapitalis">Kapitalis Consulting</a></li>
                                    <li><a href="<?php echo WEBROOT; ?>brands/bebeman">BEBEMAN</a></li>
                                    <li class="dropdown-submenu">
                                        <a href="<?php echo WEBROOT; ?>brands/cooperativ">CoopCA-PAC</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?php echo WEBROOT; ?>brands/cooperativ#farm">Ferme</a></li>
                                            <li><a href="<?php echo WEBROOT; ?>brands/cooperativ#hatcher">Couvoir</a></li>
                                            <li><a href="<?php echo WEBROOT; ?>brands/cooperativ#feedmill">Provenderie</a></li>
                                            <li><a href="<?php echo WEBROOT; ?>brands/cooperativ#agri">Agriculture</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="<?php echo WEBROOT; ?>brands/kapimmo">KAPIMMO The Real Estate</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?php echo WEBROOT; ?>brands/kapimmo#foncier">Foncier</a></li>
                                            <li><a href="<?php echo WEBROOT; ?>brands/kapimmo#constra">Construction</a></li>
                                            <li><a href="<?php echo WEBROOT; ?>brands/kapimmo#actifs">Gestion des Actifs</a></li>
                                            <li><a href="<?php echo WEBROOT; ?>brands/kapimmo#finances">Gestion des finances</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class=" <?php if(isset($page) & $page = "projects"){ echo "active";} ?>"><a href="<?php echo WEBROOT; ?>projects">Projets</a></li>

                            <li class=" <?php if(isset($page) & $page = "contact"){ echo "active";} ?>"><a href="<?php echo WEBROOT; ?>contact">Contact</a></li>

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
