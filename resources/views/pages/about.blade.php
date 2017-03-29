@extends('main')

@section('title','Lauraworld - About')

@section('current_page')
    <?php $current_page = 'about'; ?>
@endsection

@section('content')

        <!-- .page-content start -->
        <div class="page-content custom-img-background dark page-title page-title-1 mb-100">
            <div class="container">
                <!-- .row start -->
                <div class="row">
                    <!-- .col-md-12 start -->
                    <div class="col-md-12 centered">
                        <div class="custom-heading style-1 triggerAnimation animated" data-animate='fadeInUp'>
                            <h1><span>Biographie</span></h1>
                            <h1>A propos de nous</h1>
                        </div><!-- .custom-heading.style-1 end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->

        <div class="page-content">
                <!-- .container start -->
                <div class="container">
                    <!-- .row start -->
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="team-member">
                                <figure>
                                    <img src="img/pics/team-1.jpg" alt="Lauraworld team"/>

                                    <figcaption>
                                        <h4 class="member-name">Laura Rod-McKillop</h4>
                                        <!--<p class="member-position">Chef de cousine</p>-->

                                        <!-- .divider start -->
                                        <div class="divider">
                                            <span class="hr-simple"></span>
                                        </div>

                                        <p class="member-about">Née à Lausanne de parents britanniques, je fais des études en économie.

                                            Je choisis de poursuivre avec un apprentissage de cuisinier au Beau-Rivage Palace de Lausanne. J'obtiens mon CFC avec mention très bien. Avant de commencer l'école hôtelière de Genève, je travaille comme cheffe de cuisine personnel de la famille Landolt-Sandoz dans leur maison privée à Lausanne. Diplôme d'école hôtelière en poche, je prends la direction des restaurants Canonica à l'aéroport de Genève. Après 3 ans, je deviens cheffe marketing et vente pour la chaîne d'hôtel Minotel International pendant 4 ans, où je voyage énormément. Je me mets ensuite à mon compte et exploite pendant 3 ans un hôtel de 14 chambres dans les hauteurs de Lausanne. Mandatée par la Poste Suisse pour aider à la réorganisation du département du développement du personnel, je gère l'organisation des séminaires Poste pour toute la Suisse et fait les négociations avec les hôtels et partenaires. En parallèle, je crée en 2007 mon entreprise de service traiteur et commence à enseigner la cuisine aux privés mais aussi aux écoles d’agricultures de Granges-Verney et Marcelin.

                                            Epouse d’un agriculteur amoureux de la nature et maman de deux filles, je privilégie les produits régionaux et de saison pour faire une cuisine gourmande, originale et naturelle.

                                            En 2015, je reprends des études pour obtenir mon brevet fédéral de chef de cuisine, si tout va bien, en juillet 2017.</p>
                                    </figcaption>
                                </figure>
                            </div><!-- .team-member end -->

                        </div><!-- .col-md-4 end -->

                        <div class="col-md-6 col-sm-6">
                            <div class="team-member">
                                <figure>
                                    <img src="img/pics/team-2.jpg" alt="Lauraworld team"/>

                                    <figcaption>
                                        <h4 class="member-name">Floriane Goël</h4>
                                        <!--<p class="member-position">Head waiter</p>-->

                                        <!-- .divider start -->
                                        <div class="divider">
                                            <span class="hr-simple"></span>
                                        </div>

                                        <p class="member-about">Née en France en 1969, arrivée en Suisse en 1988. Epouse d'un agriculteur et maman de trois enfants, je fais mes études de service au lycée hôtelier en Alsace. J'ai toujours travaillé au service en étant passionnée de cuisine. Rencontre avec Laura en 2011 grâce à une amie et début d'une collaboration extraordinaire. Ce métier m'apporte énormément tant par sa diversité que par les rencontres humaines.</p>
                                    </figcaption>
                                </figure>
                            </div><!-- .team-member end -->
                        </div><!-- .col-md-4 end -->
                    </div><!-- .row end -->
                </div><!-- .container end -->
            </div><!-- .page-content end -->

@section('scripts')

        <script>
            /* <![CDATA[ */
            jQuery(document).ready(function ($) {
                'use strict';

                // FANCY TESTIMONIAL CAROUSEL START 
                $('#fancy-testimonial-carousel').owlCarousel({
                    items: 1,
                    loop: true,
                    margin: 0,
                    responsiveClass: true,
                    mouseDrag: true,
                    dots: false,
                    responsive: {
                        0: {
                            items: 1,
                            nav: false,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true
                        },
                        600: {
                            items: 1,
                            nav: false,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true
                        },
                        1000: {
                            items: 1,
                            nav: false,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true,
                            mouseDrag: true
                        }
                    }
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

            });
            /* ]]> */
        </script>

@endsection
