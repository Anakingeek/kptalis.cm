<header id="header" class="header-one">
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

                        <div class="logo col-xs-11 col-md-3 pull-left">
                            <a href="">
                                <img src="utils/images/logos/logo_labelled_fr.png" height="67" width="auto" style="padding: 12px 0 19px 0 ;"  alt="logo Kapitalis">
                            </a>
                        </div><!-- logo end -->

                        <div class="collapse navbar-collapse navbar-responsive-collapse pull-right">
                            <ul class="nav navbar-nav">
                                <li class="<?php if(isset($page) && ($page == "homepage")){ echo "active";} ?>"><a class="cool-link" href="">Accueil</a></li>

                                <li class="dropdown <?php if(isset($page) && ($page == "about-us")){ echo "active";} ?>">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown">À Propos <i
													class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="about-us#address-from-ceo">Mot du Promoteur</a></li>
                                        <li><a href="about-us#commitment">Valeurs et Engagements</a></li>
                                        <li><a href="about-us#organization">Organigramme</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown <?php if(isset($page) && ($page == "services")){ echo "active";} ?>">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown">Nos Filières <i
													class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="services/assets">Prestations</a></li>
                                        <li><a href="services/projects">Projets (Nos dossiers)</a></li>
                                        <li><a href="services/partnership">Partenariat</a></li>
                                    </ul>
                                </li>

                                <li class=" <?php if(isset($page) && ($page == "contact")){ echo "active";} ?>"><a href="contact">Contact</a></li>

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
                <input type="text" class="form-control" placeholder="Saisissez votre recherche">
                <span class="search-close">&times;</span>
            </div><!-- Site search end -->
        </div>
        <!--/ Container end -->

    </nav>
</header>

