@extends('layouts.app')

@section('content')
    <section class="jarallax dark-mode bg-dark  quiz-header" data-jarallax data-speed="0.4" id="accueil">
        <span class="position-absolute top-0 start-0 w-100 h-100 bg-gradient-dark-translucent"></span>
        <div class="jarallax-img quiz-header" style="background-image: url({{ asset('assets/img/f3.jpg') }});"></div>
        <div class="position-relative text-center zindex-5 overflow-hidden pt-4 py-md-5">

            <!-- Slider controls (Prev / next) -->


            <!-- Slider -->
            <div class="container text-center py-xl-5">
                <div class="row justify-content-center pt-lg-5">
                    <div class="col-xl-8 col-lg-9 col-md-10 col-11">
                        <div class="swiper pt-5 pb-4 py-md-5"
                            data-swiper-options='{
                                    "effect": "fade",
                                    "speed": 500,
                                    "autoplay": {
                                        "delay": 5500,
                                        "disableOnInteraction": false
                                    },
                                    "pagination": {
                                        "el": ".swiper-pagination",
                                        "clickable": true
                                    },
                                    "navigation": {
                                        "prevEl": "#hero-prev",
                                        "nextEl": "#hero-next"
                                    }
                                    }'>
                            <div class="swiper-wrapper">

                                <!-- Item -->
                                <div class="swiper-slide ">
                                    <span>
                                        <h2 class=" from-start text-start">Quel prix pour un site E-commerce ?</h2>
                                    </span>

                                </div>

                                <!-- Item -->


                                <!-- Item -->

                            </div>

                            <!-- Pagination (bullets) -->

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <div>
        <div class="logiciel_polygones"> </div>
        <div id="logiciel_polygone1"></div>
        <div id="logiciel_polygone2"></div>
    </div>


    <section class="container" id="devis">
        <div class=" rounded-3 py-5 px-3 px-sm-4 px-lg-0">
            <div class="row justify-content-center align-items-center pt-1 pb-2 py-lg-4">
                <div class="col-xl-7 col-lg-8 col-md-6 offset-lg-1 mb-4 pb-3 mb-md-0 pb-md-0 ">



                    <div class="row justify-content-center align-items-center pt-1 pb-2 py-lg-4 mt-5">

                        <div class="quiz_case mt-5">

                            <h4>
                                QUESTION 1 SUR 5
                            </h4>
                            <div class="separate"></div>
                            <h4>
                                Quel type de site e-commerce souhaitez-vous ?
                            </h4>
                            <p>
                                Pour la création de votre site e-commerce, deux choix s&apos;offrent à vous :
                            </p>

                            <div class="choice-quiz-case">
                                Prestashop
                            </div>

                        </div>

                    </div> <br>
                    <br>
                    <br>
                    <br>
                    <br>

                </div>
    </section>
@endsection
