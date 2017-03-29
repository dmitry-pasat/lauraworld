@if($current_page == 'home')

<script src="js/jquery-2.1.4.min.js"></script><!-- jQuery library -->
<script src="js/bootstrap.min.js"></script><!-- .bootstrap script -->
<script src="js/jquery.scripts.min.js"></script><!-- modernizr, retina, stellar for parallax -->
<script src="masterslider/masterslider.min.js"></script><!-- Master slider main js -->
<script src="masterslider/jquery.easing.min.js"></script><!-- Master slider easing js -->
<script src="js/jquery.magnific-popup.min.js"></script><!-- used for image lightbox -->
<script src="owl-carousel/owl.carousel.min.js"></script><!-- Carousels script -->
<script src="js/jquery.dlmenu.min.js"></script><!-- for responsive menu -->
<script src="js/include.js"></script><!-- custom js functions -->
<script src="js/instagram-stream.jquery.js"></script><!-- instagram stream plugin -->

@elseif($current_page == 'about')

<script src="js/jquery-2.1.4.min.js"></script><!-- jQuery library -->
<script src="js/bootstrap.min.js"></script><!-- .bootstrap script -->
<script src="js/jquery.scripts.min.js"></script><!-- modernizr, retina, stellar for parallax -->
<script src="js/jquery.dlmenu.min.js"></script><!-- for responsive menu -->
<script src="js/include.js"></script><!-- custom js functions -->
<script src="owl-carousel/owl.carousel.min.js"></script><!-- Carousels script -->

@elseif($current_page == 'services' || $current_page == 'origin' || $current_page == 'products')

<script src="js/jquery-2.1.4.min.js"></script><!-- jQuery library -->
<script src="js/bootstrap.min.js"></script><!-- .bootstrap script -->
<script src="js/jquery.scripts.min.js"></script><!-- modernizr, retina, stellar for parallax -->
<script src="js/jquery.dlmenu.min.js"></script><!-- for responsive menu -->
<script src="js/include.js"></script><!-- custom js functions -->

@elseif($current_page == 'gallery')

<script src="js/jquery-2.1.4.min.js"></script><!-- jQuery library -->
<script src="js/bootstrap.min.js"></script><!-- .bootstrap script -->
<script src="js/jquery.scripts.min.js"></script><!-- modernizr, retina, stellar for parallax -->
<script src="js/gallery.js"></script><!-- for gallery -->
<script src="js/jquery.dlmenu.min.js"></script><!-- for responsive menu -->
<script src="js/include.js"></script><!-- custom js functions -->
<script src="js/jquery.isotope.min.js"></script><!-- jQuery isotope plugin -->
<script src="js/jquery.magnific-popup.min.js"></script><!-- used for image lightbox -->

@elseif($current_page == 'contact')

<script src="js/jquery-2.1.4.min.js"></script><!-- jQuery library -->
<script src="js/jquery.validate.js"></script><!-- custom js functions -->
<script src="js/bootstrap.min.js"></script><!-- .bootstrap script -->
<script src="js/jquery.scripts.min.js"></script><!-- modernizr, retina, stellar for parallax -->
<script src="js/jquery.dlmenu.min.js"></script><!-- for responsive menu -->
<script src="js/include.js"></script><!-- custom js functions -->

@endif