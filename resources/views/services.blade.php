@extends('layouts.app')

@section('content')

<!-- Hero slider + BG parallax -->
<section class="jarallax dark-mode bg-dark py-xxl-5" data-jarallax data-speed="0.4" id="accueil">
    <span class="position-absolute top-0 start-0 w-100 h-100 bg-gradient-dark-translucent"></span>
    <div class="jarallax-img" style="background-image: url(assets/img/landing/software-company/f3.jpg);"></div>
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
              <h4 class="" style="font-size: 55px;text-align: left;">Besoin d'innovation digitale ?</h4>
              <div class="from-end">
              </div>
              <div class="scale-up py-4">
                <a href="#" class="btn btn-primary shadow-primary btn-lg">Contactez nous</a>
              </div>
            </div>
            <!-- Item -->
          </div>
          <!-- Pagination (bullets) -->
        </div>
      </div>
    </div>
  </div>
  </div>
  </section>
  
  <style>
    .card-services {
      background-color:#6610f2;
      position: absolute;
      z-index: 1;
      bottom: 0px;
      width: 70%;
      text-align: center;
      left: 50%;
      padding: 1%;
      transform: translateX(-50%);
    }
    .card-services a{
      font-size: 25px;
      font-weight: 900;
      text-decoration: none;
    }
    .services{
        opacity: 0.9;

    }
    .services-text{
      padding: 60px;
      text-align: justify;
    }
    .col-lg-6.services li{
        color:white;
        padding: 20px;
        font-weight: 900;
        font-size: 20px;
        z-index: 2;
        position: relative;


    }
    .col-lg-6.services {
  position: relative;
  height: 400px;
  background-size: cover;
  background-position: center;
  border-radius: 30px!important;
}

.col-lg-6.services::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color:black; /* Couleur noire avec une opacité de 0.5 (50%) */
  z-index: 1;
  opacity: 0.5;
  border-radius: 30px!important;
}


    .service-one{
        margin: 30px;
    }
    .col-lg-4, .col-sm-4 {
      cursor: pointer;
    }

    .tab-content {
      display: none;
    }

    .tab-content.active {
      display: block;

    }
    .active-link {
      background-color: white !important;
      color: black !important;
      display: block;
    }

  </style>


 <div class="container">
    <div class="card-services">
      <div class="row">
        <div class="col-lg-4 col-sm-4 services-one">
          <a class="text-light active-link" data-tab="tab1" >Solution web et Digitales</a>
        </div>
        <div class="col-lg-4 col-sm-4 services-two">
          <a class="text-light" data-tab="tab2">Services Informatiques</a>
        </div>
        <div class="col-lg-4 col-sm-4 services-three">
          <a class="text-light" data-tab="tab3">Innovation<br> digitales</a>
        </div>
      </div>
    </div>
  </div>





  <div class="container py-4 service-one">
    <div class="row py-4">
      <!-- Service one -->
      <div class="tab-content active" id="tab1">
       <!-- item 1 -->
                   <div class="row py-4">
                      <div class="col-lg-6 services-text">
                         <h2>Conception graphique: Identité visuelle</h2>
                         <p> Créez une impression mémorable avec notre expertise en conception
                            graphique, de la création de logos à la mise en page de documents, en
                            passant par la définition de votre identité visuelle complète, AFT GROUP
                            vous propose une gamme complète de services de pointe pour renforcer
                            votre présence en ligne.
                         </p>
                      </div>
                      <div class="col-lg-6 services rounded" style="background-image: url('assets/img/f3.jpg');height:400px;background-size: cover; background-position: center;opacity:0.7px;">
                         <ul>
                            <li data-toggle="tooltip" data-placement="bottom" title="Logo"> Logo </li>
                            <li data-toggle="tooltip" data-placement="bottom" title="Charte graphique"> Charte graphique </li>
                            <li data-toggle="tooltip" data-placement="bottom" title="Signature email"> Signature email </li>
                            <li data-toggle="tooltip" data-placement="bottom" title="Logo button"> Spport de communiation </li>
                            <li data-toggle="tooltip" data-placement="bottom" title="Logo button"> Mise en page de document </li>
                         </ul>
                      </div>
                   </div>
                   <!-- item 2 -->
                   <div class="row py-4">
                      <div class="col-lg-6 services rounded" style="background-image: url('assets/img/f2.jpg');height:400px;background-size: cover; background-position: center;opacity:0.7px;">
                         <ul>
                            <li data-toggle="tooltip" data-placement="bottom" title="Logo"> Réalisation de maquette web / mobile </li>
                            <li data-toggle="tooltip" data-placement="bottom" title="Charte graphique">Réalisation de mockup pour mobile  </li>
                            <li data-toggle="tooltip" data-placement="bottom" title="Signature email"> Mise à jour ou modification de maquette </li>
                            <li data-toggle="tooltip" data-placement="bottom" title="Logo button"> Prototypage</li>
                         </ul>
                      </div>
                      <div class="col-lg-6 services-text">
                         <h2>Conception web: UI/UX</h2>
                         <p> Nous sommes passionnés par la création d'expériences utilisateur
                            exceptionnelles. Notre expertise en UI/UX design repose sur la fusion de la
                            forme et de la fonction pour offrir des interfaces numériques intuitives,
                            esthétiques et hautement performantes. Que vous ayez besoin de
                            concevoir une application mobile conviviale, d'améliorer la navigation sur
                            votre site web ou de créer des prototypes interactifs, notre équipe de
                            concepteurs dédiés est prête à transformer votre vision en réalité.
                         </p>
                      </div>
                   </div>
                   <!-- item 3 -->
                   <div class="row py-4">
                      <div class="col-lg-6 services-text">
                         <h2>Marketing Digital</h2>
                         <p> Nous comptons dans nos rangs des experts en marketing digital, prêts à
                            propulser votre présence en ligne. Nous concevons des stratégies de
                            marketing sur mesure pour maximiser votre visibilité et votre engagement.
                            Que ce soit à travers une gestion efficace des médias sociaux, des
                            campagnes d'e-mailing ciblées, un référencement naturel (SEO) ou des
                            campagnes publicitaires payantes (SEA), l'équipe de AFT GROUP sait
                            comment atteindre votre public cible et générer des résultats tangibles.
                         </p>
                      </div>
                      <div class="col-lg-6 services rounded" style="background-image: url('assets/img/f1.jpg');height:400px;background-size: cover; background-position: center;opacity:0.7px;">
                         <ul>
                            <li data-toggle="tooltip" data-placement="bottom" title="Logo"> Stratégie digitale </li>
                            <li data-toggle="tooltip" data-placement="bottom" title="Charte graphique"> Emailing </li>
                            <li data-toggle="tooltip" data-placement="bottom" title="Signature email"> Réseaux sociaux</li>
                            <li data-toggle="tooltip" data-placement="bottom" title="Logo button"> Réfeérence naturel (SEO) et payant (SEA) </li>
                         </ul>
                      </div>
                   </div>
                   <!-- item 4 -->
                   <div class="row py-4">
                      <div class="col-lg-6 services rounded" style="background-image: url('assets/img/f2.jpg');height:400px;background-size: cover; background-position: center;opacity:0.7px;">
                         <ul>
                            <li data-toggle="tooltip" data-placement="bottom" title="site vitrine"> Site vitrine </li>
                            <li data-toggle="tooltip" data-placement="bottom" title="site sur mesure"> Site sur mesure </li>
                            <li data-toggle="tooltip" data-placement="bottom" title="Site e-commerce"> Site e-commerce</li>
                            <li data-toggle="tooltip" data-placement="bottom" title="Catalogue en ligne"> Catalogue en ligne </li>
                         </ul>
                      </div>
                      <div class="col-lg-6 services-text">
                         <h2>Développement Web et Mobile</h2>
                         <p> Notre équipe de développeurs talentueux excelle dans la création
                            d'applications mobiles innovantes et d'expériences web exceptionnelles.
                            Que vous cherchiez à automatiser vos opérations métier, à offrir une expérience mobile de qualité, ou à concevoir un site web sur mesure, nous
                            sommes prêts à transformer vos idées en solutions numériques robustes.
                         </p>
                      </div>
                     
                   <!-- item 6 -->
                   <div class="row py-4">
                      
                      <div class="col-lg-6 services-text">
                         <h2>Développement de logiciels et d’applications</h2>
                         <p>Nous sommes des créateurs de solutions numériques sur mesure. Notre
                            équipe de développeurs expérimentés excelle dans la conception de
                            logiciels de gestion personnalisés et d'applications novatrices. Que vous
                            ayez besoin d'automatiser des processus métier, de renforcer l'efficacité
                            opérationnelle ou de développer des logiciels de qualité, nous sommes
                            prêts à transformer vos besoins en solutions logicielles puissantes.
                         </p>
                      </div>
                      <div class="col-lg-6 services rounded" style="background-image: url('assets/img/f2.jpg');height:400px;background-size: cover; background-position: center;filter: contrast(-120%);">
                        <ul>
                          <li data-toggle="tooltip" data-placement="bottom" title="site vitrine"> Logiciel de gestion et sur mesure </li>
                          <li data-toggle="tooltip" data-placement="bottom" title="site sur mesure"> Application mobile et iOs </li>
\                       </ul>
                      </div>
           
          </div>
         

      </div>










      <!-- Services two -->
      <div class="tab-content" id="tab2">

     
      </div>

      <!-- Service three -->
      <div class="tab-content" id="tab3">
        
        Content for Innovation digitales
      </div>
    </div>
  </div>
  <script>
    const linkElements = document.querySelectorAll("[data-tab]");

    linkElements.forEach((element) => {
      element.addEventListener("click", (e) => {
        e.preventDefault(); 

        linkElements.forEach((link) => {
          link.classList.remove("active-link");
        });

\        element.classList.add("active-link");

        const tabId = element.getAttribute("data-tab");

        document.querySelectorAll(".tab-content").forEach((content) => {
          content.classList.remove("active");
        });

\        document.getElementById(tabId).classList.add("active");
      });
    });
  </script>
  @endsection
