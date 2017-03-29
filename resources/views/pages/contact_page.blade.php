@extends('main')

@section('title','Contact')

@section('current_page')
    <?php $current_page = 'contact'; ?>
@endsection

@section('content')

        <!-- .page-content start -->
        <div class="page-content custom-img-background dark page-title page-title-7 mb-100">
            <div class="container">
                <!-- .row start -->
                <div class="row">
                    <!-- .col-md-12 start -->
                    <div class="col-md-12 centered">
                        <div class="custom-heading style-1 triggerAnimation animated" data-animate='fadeInUp'>
                            <h1><span>Contact</span></h1>
                            <h1>Envoyez-nous un message</h1>
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
                <div class="row mb-0">
                    <div class="col-md-12 mb-20 centered triggerAnimation animated" data-animate='fadeIn'>
                        <div class="custom-heading style-1">
                            <h3><span>Avez-vous une questions ?</span></h3>
                            <h3>Contactez-nous</h3>

                            <!-- .divider.style-1 start -->
                            <div class="divider style-1 center">
                                <span class="hr-simple left"></span>
                                <i class="fa fa-circle hr-icon"></i>
                                <span class="hr-simple right"></span>
                            </div>
                        </div><!-- .custom-heading.style-1 end -->
                    </div><!-- .col-md-12 end -->                    
                </div><!-- .row end -->

                <!-- .row start -->
                <div class="row">
                    <div class="col-md-12 centered">
                        <p class="emphasized-text">Téléphone : <span>+41 79 683 81 11</span></p>
                        <!-- form start -->
                        <form id="contactForm" class="wpcf7" name="contactForm" action="{{ route('contact.post') }}" method="POST">
                            {{ csrf_field() }}
                            <fieldset>
                                <span class="wpcf7-form-control-wrap your-name">
                                    <input type="text" class="wpcf7-text" name="name" placeholder="Votre nom...">
                                </span>
                                <span class="wpcf7-form-control-wrap your-email">
                                    <input id="email" type="email" name="email" class="wpcf7-text" placeholder="Courriel...">
                                </span>
                            </fieldset>

                            <fieldset>
                                <span class="wpcf7-form-control-wrap your-message">
                                   {{-- <p class="message-error-placed"></p>--}}
                                    <textarea id="message" name="message" rows="8" class="wpcf7-textarea" placeholder="Message..."></textarea>
                                </span>
                            </fieldset>
                            <input type="submit" class="wpcf7-submit btn btn-big black btn-centered" value="Envoyer">
                        </form><!-- .wpcf7 end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->

@endsection

@section('scripts')

        <script>

            jQuery(document).ready(function () {

                $("#contactForm").validate({

                    rules: {
                        name: {
                            required: true,
                            minlength: 2
                        },

                        email: {
                            required: true,
                            email: true
                        },
                        message: "required"
                    },
                    messages: {
                        name: {
                            minlength: "Your name must consist at least 2 characters"
                        },

                        email: {
                            email: "Please provide a valid email address"
                        }
                    },

                    submitHandler: function (form) {
                         form.submit();
                    }

                })

            })

        </script>

@endsection
