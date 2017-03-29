@extends('main')

@section('title','Galleries')

@section('current_page')
    <?php $current_page = 'gallery'; ?>
@endsection

@section('content')
    
        <!-- .page-content start -->
        <div class="page-content custom-img-background dark page-title page-title-4 mb-100">
            <div class="container">
                <!-- .row start -->
                <div class="row">
                    <!-- .col-md-12 start -->
                    <div class="col-md-12 centered">
                        <div class="custom-heading style-1 triggerAnimation animated" data-animate='fadeInUp'>
                            <h1><span>Galeries</span></h1>
                            <h1>Nos photo</h1>
                        </div><!-- .custom-heading.style-1 end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->

        <!-- .page-content start -->
        <div class="page-content">
            <!-- .container start -->
            <div class="container">
                <!-- .row start -->
                <div class="row gallery-filters">
                    <div class="col-md-12 mb-20 centered triggerAnimation animated" data-animate='fadeIn'>
                        <div class="custom-heading style-1">
                            <h3><span>Moments gourmands en votre compagnie</span></h3>
                            <h3>Plaisir des yeux, saveurs authentiques</h3>

                            <!-- .divider.style-1 start -->
                            <div class="divider style-1 center">
                                <span class="hr-simple left"></span>
                                <i class="fa fa-circle hr-icon"></i>
                                <span class="hr-simple right"></span>
                            </div>
                        </div><!-- .custom-heading.style-1 end -->
                        <!--<ul id="filters">-->
                            <!--<li class="active"><a href="#" data-filter="*">All</a></li>-->
                            <!--<li><a href="#" data-filter=".indoor">Indoor</a></li>-->
                            <!--<li><a href="#" data-filter=".outdoor">Outdoor</a></li>-->
                        <!--</ul>-->
                    </div><!-- .col-md-12 end -->                    
                </div><!-- .row.gallery-filters end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <ul id="galleryitems" class="isotope isotopeitems-full">
                        <li class="col-xs-6 col-md-3 isotope-item outdoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_01.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_01.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item outdoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_02.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_02.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item indoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_03.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_03.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item indoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_04.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_04.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item indoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_05.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_05.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item indoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_06.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_06.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item outdoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_07.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_07.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item outdoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_08.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_08.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item indoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_09.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_09.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item indoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_10.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_10.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item indoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_11.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_11.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item outdoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_12.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_12.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item outdoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_13.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_13.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item outdoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_14.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_14.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item indoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_15.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_15.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item indoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_16.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_16.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item indoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_17.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_17.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item indoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_18.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_18.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item outdoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_19.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_19.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item outdoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_20.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_20.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item indoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_21.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_21.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item indoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_22.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_22.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item indoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_23.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_23.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item indoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_24.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_24.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->
                        <li class="col-xs-6 col-md-3 isotope-item indoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_25.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_25.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item indoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_26.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_26.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item indoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_27.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_27.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item indoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_28.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_28.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item outdoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_29.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_29.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item outdoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_30.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_30.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item indoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_31.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_31.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item indoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_32.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_32.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item indoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_33.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_33.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item outdoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_34.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_34.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item outdoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_35.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_35.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item outdoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_36.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_36.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item indoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_37.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_37.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item indoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_38.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_38.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item indoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_39.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_39.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item indoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_40.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_40.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                        <li class="col-xs-6 col-md-3 isotope-item outdoor">
                            <figure class="gallery-item-container">
                                <div class="gallery-img">
                                    <img src="img/gallery/thumbnails/img_41.jpg" alt="Lauraworld gallery item"/>

                                    <div class="hover-mask-container">
                                        <div class="hover-zoom">
                                            <a href="img/gallery/img_41.jpg" class="triggerZoom fa fa-search"></a>
                                        </div><!-- .hover-zoom end -->
                                    </div><!-- .hover-mask-container end -->
                                </div><!-- .gallery-img end -->
                            </figure><!-- .gallery-item-container end -->
                        </li><!-- .isotope-item end -->

                    </ul><!-- #galleryitems.isotope end -->
                </div><!-- .row end -->
            </div><!-- .container-fluid end -->
        </div><!-- .page-content end -->

@endsection

@section('scripts')

        <script>
            /* <![CDATA[ */
            jQuery(document).ready(function ($) {
                'use strict';

                // BOOKING FORM AJAX SUBMIT START
                $('.otw-widget-form .otw-submit').on('click', function (event) {
                    event.preventDefault();
                    var $form = $(this).closest('form');

                    var name = $form.find('.otw-reservation-name').val();
                    var email = $form.find('.otw-reservation-email').val();
                    var date = $form.find('.otw-reservation-date').val();
                    var time = $form.find('.otw-reservation-time').val();
                    var guests = $form.find('.otw-party-size-select').val();
                    var form_data = new Array({'Name': name, 'Email': email, 'Date': date, 'Time': time, 'Guests': guests});
                    $.ajax({
                        type: 'POST',
                        url: "contact.php",
                        data: ({'action': 'book_table', 'form_data': form_data})
                    }).done(function (data) {
                        alert(data);
                    });
                }); // BOOKING FORM AJAX SUBMIT END


            });
            /* ]]> */
        </script>

@endsection
