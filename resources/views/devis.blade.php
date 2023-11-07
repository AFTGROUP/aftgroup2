@extends('layouts.app')

@section('devis')
    <style>
        #cadre1 {
            position: relative;
            width: 50px;
            height: 49px;
            left: 0px;
            top: 0px;
            background-color: #3461AB;
            /* Couleur de fond */
        }


        #cadre2 {
            position: absolute;
            width: 50px;
            height: 50px;
            left: 359px;
            top: 2173px;

            background: #3461AB;
        }

        #cadre3 {}

        @media screen and (min-width: 768px) {
            #get_devis {
                margin-left: 20%;
            }

        }

        @media screen and (max-width: 767px) {
            #get_devis {
                margin-left: 10%;
            }
        }

        .input_cadre {
            /* Group 53 */

            position: absolute;
            width: 400px;
            height: 50px;
            left: 519px;
            top: 1083px;



            /* Group 48 */

            position: absolute;
            width: 36px;
            height: 23px;
            left: calc(50% - 36px/2 - 143px);
            top: 1097px;



            /* Nom */

            position: absolute;
            width: 36px;
            height: 23px;
            left: 559px;
            top: 1097px;

            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            font-size: 15px;
            line-height: 22px;
            /* identical to box height */
            display: flex;
            align-items: center;
            text-align: center;

            color: #6C757D;



            /* Rectangle 38 */

            box-sizing: border-box;

            position: absolute;
            width: 400px;
            height: 50px;
            left: calc(50% - 400px/2 - 1px);
            top: 1083px;

            border: 2px solid #3461AB;
            border-radius: 5px;

        }
    </style>
@endsection

@section('content')
    <section class="jarallax dark-mode bg-dark py-xxl-5" data-jarallax data-speed="0.4" id="accueil">
        <span class="position-absolute top-0 start-0 w-100 h-100 bg-gradient-dark-translucent"></span>
        <div class="jarallax-img" style="background-image: url({{ asset('assets/img/devis_header.jpg') }});"></div>
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
                                        <h2 class="display-2 from-start text-start">Voulez-vous <br> un devis ?</h2>
                                    </span>
                                    <span>
                                        <img style="float: rigth;" src="{{ asset('assets/img/cercle.png') }}"
                                            alt="">

                                    </span>
                                    <div class="scale-up delay-1">
                                        <a href="#" class="btn btn-primary shadow-primary btn-lg">Contactez nous</a>
                                    </div>

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

    <section class="container" id="devis">
        <div class=" rounded-3 py-5 px-3 px-sm-4 px-lg-0">
            <div class="row justify-content-center align-items-center pt-1 pb-2 py-lg-4">
                <div class="col-xl-7 col-lg-8 col-md-6 offset-lg-1 mb-4 pb-3 mb-md-0 pb-md-0 ">
                    <div class="row justify-content-center align-items-center mb-5 ">
                        <div class="d-flex ">
                            <span>
                                <div id="cadre1" class="mr-3"></div>
                            </span>
                            <span class="" id="get_devis">
                                <h2 class="h1 text-center">Demandez un devis</h2>
                            </span>
                        </div>
                    </div>


                    <p class="pb-2 pb-md-4 pb-lg-5 text-justify text-center">Parlez-nous davantage de votre projet et de vos
                        besoins en répondant en
                        quelques secondes à un petit questionnaire en fonction de ce que vous
                        désirez.</p>


                    <div class="row justify-content-center align-items-center mb-4 ">
                        <div class="d-flex ">
                            <span>
                                <h3 class="mb-lg-4">Madame </h3> <span>
                                    <div id="cadre3"> </div>
                                </span>
                            </span>
                            <span>
                                <h3 class="mb-lg-4">Monsieur </h3> <span>
                                    <div id="cadre3"> </div>
                                </span>
                            </span>
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-center mb-4 ">
                        <div class="input_cadre">
                            Nom
                        </div>



                    </div>
                    




                    <div class="mb-5">

                    </div>

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>

                </div>

            </div>


        </div>
    </section>
@endsection
