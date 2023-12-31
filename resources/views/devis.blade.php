@extends('layouts.devis')

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
                                        <h2 class=" from-start text-start" id="vouloir_devis">Voulez-vous <br> un devis ?
                                        </h2>
                                    </span>
                                    <span>
                                        <img class="cercle" src="{{ asset('assets/img/cercle.png') }}" alt="">

                                    </span>
                                    <div class="scale-up">
                                        <a href="#"
                                            class="btn btn-primary shadow-primary btn-lg contact-header">Contactez nous</a>
                                    </div>

                                </div>

                            </div>

                            <!-- Pagination (bullets) -->

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    {{--  <div >
        <div class="polygones">
            <div id="polygone2"></div>
            <div id="polygone1"></div>
        </div>

    </div>  --}}


    <section class="container" id="devis">
        <div class=" rounded-3 py-5 px-3 px-sm-4 px-lg-0">
            <div class="row justify-content-center align-items-center pt-1 pb-2 py-lg-4">
                <div class="col-xl-7 col-lg-8 col-md-6 offset-lg-1 mb-4 pb-3 mb-md-0 pb-md-0 ">
                    <div class="row justify-content-center align-items-center  ">
                        <div class="d-flex ">
                            <span>
                                <div class="cadres">
                                    <div id="cadre1" class="mr-3"></div>
                                    <div id="cadre2"></div>
                                </div>
                            </span>
                            <span class="" id="get_devis">
                                <p class="h1 text-center ">Demandez un devis</p>
                            </span>
                        </div>
                        <div class=" col-12">
                            <p class="text-justify text-center mt-3">Parlez-nous davantage de votre projet
                                et de vos
                                besoins en répondant en
                                quelques secondes à un petit questionnaire en fonction de ce que vous
                                désirez.</p>
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-center  ">
                        <div class="col-lg-8 col-md-12 col-sm-12">
                            <form action="{{ route('type_site') }}" method="post" class="">
                                @csrf
                                <div class="row d-flex justify-content-center align-items-center ">
                                    <div class="col-12">
                                        <div class="form-check form-check-inline m-auto">
                                            <label class="form-check-label " id="madame"
                                                for="inlineCheckbox2">Madame</label>
                                            <input class="form-check-input checkbox1" name="genre" type="checkbox"
                                                id="inlineCheckbox2" value="madame">
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label " id="monsieur"
                                                for="inlineCheckbox1">Monsieur</label>
                                            <input class="form-check-input checkbox2" name="genre" type="checkbox"
                                                id="inlineCheckbox1" value="monsieur">
                                        </div>

                                    </div>
                                </div>

                                <div class="row justify-content-center align-items-center mb-3  mt-4">


                                        <input type="text" class="form-control input_form input_nom" name="nom"
                                            id="" placeholder="Nom" aria-describedby="emailHelp">

                                </div>

                                <div class="row justify-content-center align-items-center mb-3 ">


                                        <input type="text" class="form-control input_form  input_prenom" name="prenom"
                                            id="" placeholder="Prénom" aria-describedby="emailHelp">

                                </div>

                                <div class="row justify-content-center align-items-center mb-3 ">

                                        <input type="email" class="form-control input_form " name="email" id=""
                                            placeholder="Email" aria-describedby="emailHelp">

                                </div>

                                <div class="row d-flex justify-content-center align-items-center mb-3 ">

                                       <div class="col-lg-8 col-12">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Politique d&apos;utilisation et
                                            de
                                            confidentialité</label>
                                       </div>

                                </div>

                                <div class="row justify-content-center align-items-center mb-3 ">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary w-50 submit_demande">Demande de
                                                devis</button>
                                        </div>
                                    </div>

                            </form>
                        </div>
                    </div>

                    <br><br>


                </div>
    </section>
@endsection
