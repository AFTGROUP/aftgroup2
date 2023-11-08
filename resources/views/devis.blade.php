@extends('layouts.app')

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

    <div >
        <div class="polygones">

        </div>
        <div id="polygone2"></div>
        <div id="polygone1"></div>
    </div>


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
                                <h2 class="h1 text-center ">Demandez un devis</h2>
                            </span>
                        </div>
                    </div>


                <p class="pb-2 pb-md-4 pb-lg-5 text-justify text-center">Parlez-nous davantage de votre projet et de vos
                    besoins en répondant en
                    quelques secondes à un petit questionnaire en fonction de ce que vous
                    désirez.</p>


                <div class="row justify-content-center align-items-center mb-4 ">
                    <div class="d-flex ">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label" for="inlineCheckbox2">Madame</label>
                            <input class="form-check-input " type="checkbox" id="inlineCheckbox2" value="option2">
                          </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label" for="inlineCheckbox1">Monsieur</label>
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                          </div>

                    </div>
                </div>

                <div class="row justify-content-center align-items-center mb-4 ">

                    <div class="mb-3">
                    <input type="email" class="form-control" id="" placeholder="Nom" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <input type="email" class="form-control" id="" placeholder="Prénom" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <input type="email" class="form-control" id="" placeholder="Email" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3 form-check px-4">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Politique d&apos;utilisation et de confidentialité</label>
                      </div>
                      <div class="mb-3">

                      <button type="submit" class="btn btn-primary w-50">Demande de devis</button>
                      </div>




                </div>
                <br>
                <br>
                <br>
                <br>

                <br>
                <br>
                <br>
                <br>









        </div>
    </section>
@endsection
