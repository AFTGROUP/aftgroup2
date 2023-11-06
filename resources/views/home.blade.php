@extends('layouts.app')

@section('content')

<!-- Hero slider + BG parallax -->
<section class="jarallax dark-mode bg-dark py-xxl-5" data-jarallax data-speed="0.4" id="accueil">
        <span class="position-absolute top-0 start-0 w-100 h-100 bg-gradient-dark-translucent"></span>
        <div class="jarallax-img" style="background-image: url(assets/img/landing/software-company/hero-bg.jpg);"></div>
        <div class="position-relative text-center zindex-5 overflow-hidden pt-4 py-md-5">

          <!-- Slider controls (Prev / next) -->
          

          <!-- Slider -->
          <div class="container text-center py-xl-5">
            <div class="row justify-content-center pt-lg-5">
              <div class="col-xl-8 col-lg-9 col-md-10 col-11">
                <div class="swiper pt-5 pb-4 py-md-5" data-swiper-options='{
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
                    <div class="swiper-slide">
                      <h2 class="display-2 from-start mb-lg-4">L'innovation commence ici</h2>
                      <div class="from-end">
                        <p class="fs-xl text-light opacity-70 pb-2 mb-lg-5">Transformez votre entreprise avec nos solutions TIC de pointe.</p>
                      </div>
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
        <div class="bg-secondary rounded-3 py-5 px-3 px-sm-4 px-lg-0">
          <div class="row align-items-center pt-1 pb-2 py-lg-4">
            <div class="col-xl-4 col-lg-5 col-md-6 offset-lg-1 mb-4 pb-3 mb-md-0 pb-md-0">
              <h2 class="h1 mb-lg-4">Obtenez un devis</h2>
              <p class="pb-2 pb-md-4 pb-lg-5">Parlez-nous davantage de votre projet et de vos besoins en répondant en
                quelques secondes à un petit questionnaire en fonction de ce que vous désirez.</p>
              <h3 class="mb-lg-4">Contact Info</h3>
              <ul class="list-unstyled pb-3 pb-md-4 pb-lg-5 mb-2">
                <li class="mb-2">
                  <a href="tel:4065550120" class="nav-link d-flex align-items-center p-0">
                    <i class="bx bx-phone-call fs-xl text-primary me-2"></i>
                    +229 66842683
                  </a>
                </li>
                <li class="mb-2">
                  <a href="mailto:example@email.com" class="nav-link d-flex align-items-center p-0">
                    <i class="bx bx-envelope fs-xl text-primary me-2"></i>
                    aftgroupsarl@gmail.com
                  </a>
                </li>
                
              </ul>
              
            </div>
            <div class="col-lg-5 col-md-6 offset-xl-1">
              <div class="card border-0 shadow-sm p-sm-2">
                <form class="card-body needs-validation" novalidate>
                  <div class="mb-4">
                    <label for="service" class="form-label fs-base">Service</label>
                    <select id="service" class="form-select form-select-lg" required>
                      <option value="" selected disabled>Choisisez un type de service</option>
                      <option value="Custom Software Development">Identité visuelle</option>
                      <option value="Software Integration">Conception Web: UI / UX Design</option>
                      <option value="Mobile App Development">Marketing Digital</option>
                      <option value="Business Analytics">Développement Web et Mobile</option>
                      <option value="Software Testing">Développement de logiciels et d’applications</option>
                      
                    </select>
                    <div class="invalid-feedback">Choisissez un service s'il vous plaît !</div>
                  </div>
                  <div class="mb-4">
                    <label for="name" class="form-label fs-base">Votre nom</label>
                    <input type="text" id="name" class="form-control form-control-lg" required>
                    <div class="invalid-feedback">Entrez votre nom !</div>
                  </div>
                  <div class="mb-4">
                    <label for="email" class="form-label fs-base">Email</label>
                    <input type="email" id="email" class="form-control form-control-lg" required>
                    <div class="invalid-feedback">Entrez votre adresse email !</div>
                  </div>
                  <div class="mb-4 pb-2">
                    <label for="message" class="form-label fs-base">Decrivez votre besoin</label>
                    <textarea id="message" class="form-control form-control-lg" rows="3" placeholder="Tell us about your project" required></textarea>
                    <div class="invalid-feedback">Entrez une description !</div>
                  </div>
                  <button type="submit" class="btn btn-primary shadow-primary btn-lg">Obtenez un devis</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

@endsection
