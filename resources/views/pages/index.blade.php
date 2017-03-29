@extends('main')

@section('title','Lauraworld')

@section('current_page')
    <?php $current_page = 'home'; ?>
@endsection

@section('content')
        <!-- .master-slider start -->
        <div id="masterslider" class="master-slider ms-skin-default">
            <!-- slide start -->
            <div class="ms-slide">
                <img src="./masterslider/style/blank.gif" data-src="/img/slider/slide01.jpg" alt="Lauraworld image"/>

                <!-- slide heading layer -->
                <h3 class="ms-layer pi-caption02"
                    style="top: 350px; left: 680px;"
                    data-type="text"
                    data-effect="bottom(40)"
                    data-duration="2000"
                    data-ease="easeOutExpo"
                    data-delay="1000"
                    >
                    Bienvenue sur le site de
                </h3>
                <!-- slide heading layer -->
                <h2 class="ms-layer pi-caption01"
                    style="top: 410px; left: 715px;"
                    data-type="text"
                    data-effect="bottom(40)"
                    data-duration="2000"
                    data-ease="easeOutExpo"
                    data-delay="800"
                    >
                    Lauraworld
                </h2>

                <!-- slide divider layer -->
                <div class="ms-layer divider"
                     style="top: 505px; left: 737px;"
                     data-type="text"
                     data-effect="top(40)"
                     data-duration="2000"
                     data-ease="easeOutExpo"
                     data-delay="1000">
                    <span class="hr-double left"></span>
                    <span class="divider-svg">
                        <img src="img/svg/heading-icon.svg" alt="Lauraworld image">
                    </span>
                    <span class="hr-double right"></span>
                </div>

                <!-- slide text layer -->
                <p class="ms-layer pi-text01"
                   style="top: 590px; left: 750px;"
                   data-type="text"
                   data-effect="top(40)"
                   data-duration="2000"
                   data-ease="easeOutExpo"
                   data-delay="1000"
                   >
                    Anniversaires – mariage – fête de famille <br> – repas d'entreprise – soirée à thème
                </p>

                <img class="ms-layer" src="./masterslider/style/blank.gif" data-src="img/slider/slide01-01.png" alt="Lauraworld image"
                     style="left: 0; top: 100px;"
                     data-type="image"
                     data-effect="left(40)"
                     data-duration="2500"
                     data-ease="easeOutExpo"
                     data-delay="0"
                     />
                <img class="ms-layer" src="./masterslider/style/blank.gif" data-src="img/slider/slide01-02.png" alt="Lauraworld image"
                     style="left: 300px; top: 250px;"
                     data-type="image"
                     data-delay="20"
                     data-parallax="5"
                     />
                <img class="ms-layer" src="./masterslider/style/blank.gif" data-src="img/slider/slide01-03.png" alt="Lauraworld image"
                     style="left: 275px; top: 635px;"
                     data-type="image"
                     data-delay="100"
                     data-parallax="5"
                     />
                <img class="ms-layer" src="./masterslider/style/blank.gif" data-src="img/slider/slide01-04.png" alt="Lauraworld image"
                     style="left: 295px; top: 816px;"
                     data-type="image"
                     data-delay="50"
                     data-parallax="2"
                     />
                <img class="ms-layer" src="./masterslider/style/blank.gif" data-src="img/slider/slide01-05.png" alt="Lauraworld image"
                     style="left: 240px; top: 961px;"
                     data-type="image"
                     data-delay="150"
                     data-parallax="15"
                     />

                <img class="ms-layer" src="./masterslider/style/blank.gif" data-src="img/slider/slide01-06.png" alt="Lauraworld image"
                     style="right: 10px; top: 100px;"
                     data-type="image"
                     data-effect="right(40)"
                     data-duration="2500"
                     data-ease="easeOutExpo"
                     data-delay="0"
                     />
                <img class="ms-layer" src="./masterslider/style/blank.gif" data-src="img/slider/slide01-07.png" alt="Lauraworld image"
                     style="right: 287px; top: 174px;"
                     data-type="image"
                     data-delay="80"
                     data-parallax="5"
                     />

                <img class="ms-layer" src="./masterslider/style/blank.gif" data-src="img/slider/slide01-08.png" alt="Lauraworld image"
                     style="right: 280px; top: 573px;"
                     data-type="image"
                     data-delay="10"
                     data-parallax="1"
                     />
                <img class="ms-layer" src="./masterslider/style/blank.gif" data-src="img/slider/slide01-09.png" alt="Lauraworld image"
                     style="right: 288px; top: 143px;"
                     data-type="image"
                     data-delay="30"
                     data-parallax="8"
                     />
                <img class="ms-layer" src="./masterslider/style/blank.gif" data-src="img/slider/slide01-10.png" alt="Lauraworld image"
                     style="right: 295px; top: 490px;"
                     data-type="image"
                     data-delay="150"
                     data-parallax="15"
                     />
                <img class="ms-layer" src="./masterslider/style/blank.gif" data-src="img/slider/slide01-11.png" alt="Lauraworld image"
                     style="right: 0; bottom: 55px; left: 0; margin: 0 auto;"
                     data-type="image"
                     data-effect="bottom(40)"
                     data-duration="2500"
                     data-ease="easeOutExpo"
                     data-delay="500"
                     />
            </div><!-- slide end -->
        </div><!-- .master-slider end -->

        <!-- .page-content start -->
        <div class="page-content custom-img-background bkg-img1">
            <div class="container">
                <!-- .row start -->
                <div class="row">
                    <!-- .col-md-3 start -->
                    <div class="col-md-3 col-sm-3 hidden-xs pt-80">
                        <img src="img/pics/spices-left.png" alt="Lauraworld image" />
                    </div><!-- .col-md-3 end -->

                    <!-- .col-md-6 start -->
                    <div class="col-md-6 col-sm-6 centered">
                        <div class="frame-box custom-img-background bkg-img2">
                            <div class="custom-heading style-1">
                                <img src="img/10years.svg" alt="">
                                <h3><span>Notre histoire</span></h3>
                                <h3>A votre service depuis 2007</h3>

                                <!-- .divider.style-1 start -->
                                <div class="divider style-1 center">
                                    <span class="hr-simple left"></span>
                                    <i class="fa fa-circle hr-icon"></i>
                                    <span class="hr-simple right"></span>
                                </div>
                            </div><!-- .custom-heading.style-1 end -->
                            <p>Toujours à la recherche de produits BEST (Bio, Ethique, Saison, Terroir), nous vous proposons une gamme de menus qui vous ressemble.</p>
                            <p>A l'écoute de vos besoins gourmands avec des menus et buffet sur mesure pour agrémenter vos envies et budget. Que ce soit dans une salle, un refuge, en extérieur ou à votre domicile, nous vous proposons des mets de saison, originaux, cuisinés avec amour et soins. Notre équipe professionnelle et souriante fera de votre événement un succès.</p>
                        </div>
                    </div><!-- .col-md-6 end -->

                    <!-- .col-md-3 start -->
                    <div class="col-md-3 col-sm-3 hidden-xs pt-80">
                        <img src="img/pics/spices-right.png" alt="Lauraworld image" />
                    </div><!-- .col-md-3 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->
@endsection

@section('scripts')

        <script>
            /* <![CDATA[ */
            jQuery(document).ready(function ($) {
                'use strict';
                // MASTER SLIDER START
                var slider = new MasterSlider();
                slider.setup('masterslider', {
                    width: 1920, // slider standard width
                    height: 1080, // slider standard height
                    space: 0,
                    layout: "fullwidth",
                    speed: 50,
                    centerControls: false,
                    loop: false,
                    autoplay: false,
                    parallaxMode: "mouse"
                            // more slider options goes here...
                            // check slider options section in documentation for more options.
                });
                // adds Arrows navigation control to the slider.
                MSScrollParallax.setup(slider, 50, 80, true);

                //GALLERY LIGHTBOX
                $('.triggerZoom').magnificPopup({
                    type: 'image',
                    gallery: {
                        enabled: true
                    }
                });

                // EVENTS CAROUSEL START
                var owl = $("#events-carousel");

                owl.owlCarousel({
                    singleItem: true,
                    pagination: true,
                    autoPlay: true
                });

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
                        url: "contact.blade.php",
                        data: ({'action': 'book_table', 'form_data': form_data})
                    }).done(function (data) {
                        alert(data);
                    });
                }); // BOOKING FORM AJAX SUBMIT END

                // INSTAGRAM STREAM START
                $('.instagram-stream').instagramstream({
                    limit: 22, // number of images to fetch
                    username: 'myrestaurants', // your username
                    overlay: true, // add overlay layer of hover effect
                    textContainer: '.is-text', // default: '.is-text', pass jQuery object or selector
                    textPosition: '10', // place that at this position
                    textSize: '2' // size of text e.g. 1 - has size like one image; 2 - has size of two images etc.
                });

            });
            /* ]]> */
        </script>

@endsection