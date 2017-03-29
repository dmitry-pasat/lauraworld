<!-- .header-wrapper start -->
<div id="header-wrapper">
    <!-- #header start -->
    <header id="header">
        <!-- Main navigation and logo container -->
        <div class="header-inner">
            <!-- .container start -->
            <div class="container">
                <!-- .main-nav start -->
                <div class="main-nav">
                    <!-- .row start -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- .navbar start -->
                            <nav class="navbar navbar-default nav-left">
                                <!-- .navbar-header start -->
                                <div class="navbar-header">
                                    <!-- .logo start -->
                                    <div class="logo">
                                        <a href="{{ route('home') }}">
                                            <img src="/img/logo.svg" alt="Lauraworld logo">
                                        </a>
                                    </div><!-- logo end -->
                                </div><!-- .navbar-header end -->
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse">
                                    <ul class="nav navbar-nav pi-nav">
                                        <li class="{{ ($current_page == 'home') ? 'current-menu-item': '' }}"><a href="{{ route('home') }}">Accueil</a></li>
                                        <li class="{{ ($current_page == 'about') ? 'current-menu-item': '' }}"><a href="{{ route('about') }}">Biographie</a></li>
                                        <li class="{{ ($current_page == 'services') ? 'current-menu-item': '' }}"><a href="{{ route('services') }}">Services</a></li>
                                        <li class="{{ ($current_page == 'gallery') ? 'current-menu-item': '' }}"><a href="{{ route('gallery') }}">Galeries</a></li>
                                        <li class="{{ ($current_page == 'origin') ? 'current-menu-item': '' }}"><a href="{{ route('origin') }}">Origine</a></li>
                                        <li class="{{ ($current_page == 'products')? 'current-menu-item': '' }}"><a href="{{ route('products') }}">Produits</a></li>
                                        <li class="{{ ($current_page == 'contact')? 'current-menu-item': '' }}"><a href="{{ route('contact') }}">Contact</a></li>
                                    </ul><!-- .nav.navbar-nav.pi-nav end -->

                                    <!-- Responsive menu start -->
                                    <div id="dl-menu" class="dl-menuwrapper">
                                        <button class="dl-trigger">Open Menu</button>
                                        <ul class="dl-menu">
                                            <li><a href="{{ route('home') }}">Accueil</a></li>
                                            <li><a href="{{ route('about') }}">Biographie</a></li>
                                            <li><a href="{{ route('services') }}">Services</a></li>
                                            <li><a href="{{ route('gallery') }}">Galeries</a></li>
                                            <li><a href="{{ route('origin') }}">Origine</a></li>
                                            <li><a href="{{ route('products') }}">Produits</a></li>
                                            <li><a href="{{ route('contact') }}">Contact</a></li>
                                        </ul><!-- .dl-menu end -->
                                    </div><!-- (Responsive menu) #dl-menu end -->
                                </div><!-- .navbar.navbar-collapse end -->
                            </nav><!-- .navbar end -->
</div><!-- .col-md-12 end -->
</div><!-- .row end -->
</div><!-- .main-nav end -->
</div><!-- .container end -->
</div><!-- .header-inner end -->
</header><!-- #header end -->
</div><!-- #header-wrapper end -->