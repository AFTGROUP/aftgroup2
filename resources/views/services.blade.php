@extends('layouts.app')

@section('content')


<!-- Hero slider + BG parallax -->
<section class="jarallax dark-mode bg-dark py-xxl-5" data-jarallax data-speed="0.4" id="accueil">
        <span class="position-absolute top-0 start-0 w-100 h-100 bg-gradient-dark-translucent"></span>
        <div class="jarallax-img" style="background-image: url(assets/img/services/femme-travaillant-ordinateur.jpg); filter: brightness(0.4);"></div>
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
    <h2 class="display-2 from-start mb-lg-4 text-start">Besoins de services informatiques ?</h2>
    <div class="scale-up delay-1 text-start" style="padding-top: 10px;">
      <a href="#" class="btn btn-primary shadow-primary btn-lg">Contactez nous</a>
    </div>
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





<section class="jarallax dark-mode bg-dark py-xxl-5" data-jarallax data-speed="0.4" id="accueil">
    <span class="position-absolute top-0 start-0 w-100 h-100 bg-gradient-dark-translucent"></span>
    <div class="jarallax-img" style="background-image: url(assets/img/services-images/service01.jpg);background-position:center;background-size:cover;"></div>
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
    background-color:blue;
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
    .services li{
    color:white;
    padding: 10px;
    font-weight: 900;
    font-size: 20px;
    z-index: 2;
    position: relative;
    }
    .services {
    position: relative;
    height: 300px;
    background-size: cover;
    background-position: center;
    border-radius: 30px!important;
    }
    .services::before {
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
    .vector{
    background-repeat: no-repeat;
    background-position: right;
    background-size: cover;
    background-image: url('assets/img/services-images/rectangle2.png');
    z-index:-1;
    height: 450px;
    }
    .vector2{
    background-repeat: no-repeat;
    background-position: right;
    background-size: cover;
    background-position-x: -90%;
    background-image: url('assets/img/services-images/rectangle2.png');
    z-index:-1;
    height: 450px;
    }
 </style>


 <div class="container">
    <div class="card-services">
       <div class="row">
          <div class="col-lg-4 col-sm-4 services-one">
             <a class="text-light active-link" data-tab="tab1" >Solution web<br> et Digitales</a>
          </div>
          <div class="col-lg-4 col-sm-4 services-two">
             <a class="text-light" data-tab="tab2">Services <br>Informatiques</a>
          </div>
          <div class="col-lg-4 col-sm-4 services-three">
             <a class="text-light" data-tab="tab3">Innovation<br> digitales</a>
          </div>
       </div>
    </div>
 </div>

 
 <div class="container py-4">
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
             <div class="col-lg-6 vector">
                <div class="services" style="background-image: url('assets/img/f3.jpg');">
                   <ul>
                      <li data-toggle="tooltip" data-placement="bottom" title="Logo"> Logo </li>
                      <li data-toggle="tooltip" data-placement="bottom" title="Charte graphique"> Charte graphique </li>
                      <li data-toggle="tooltip" data-placement="bottom" title="Signature email"> Signature email </li>
                      <li data-toggle="tooltip" data-placement="bottom" title="Logo button"> Spport de communiation </li>
                      <li data-toggle="tooltip" data-placement="bottom" title="Logo button"> Mise en page de document </li>
                   </ul>
                </div>
             </div>
       </div>
       <!-- item 2 -->
       <div class="row py-4">
          <div class="col-lg-6 vector2">
             <div class="services" style="background-image: url('assets/img/f2.jpg');">
                <ul>
                   <li data-toggle="tooltip" data-placement="bottom" title="Logo"> Réalisation de maquette web / mobile </li>
                   <li data-toggle="tooltip" data-placement="bottom" title="Charte graphique">Réalisation de mockup pour mobile  </li>
                   <li data-toggle="tooltip" data-placement="bottom" title="Signature email"> Mise à jour ou modification de maquette </li>
                   <li data-toggle="tooltip" data-placement="bottom" title="Logo button"> Prototypage</li>
                </ul>
             </div>
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
          <div class="col-lg-6 vector2">
             <div class="services" style="background-image: url('assets/img/f2.jpg');">
                <ul>
                   <li data-toggle="tooltip" data-placement="bottom" title="Logo"> Stratégie digitale </li>
                   <li data-toggle="tooltip" data-placement="bottom" title="Charte graphique"> Emailing </li>
                   <li data-toggle="tooltip" data-placement="bottom" title="Signature email"> Réseaux sociaux</li>
                   <li data-toggle="tooltip" data-placement="bottom" title="Logo button"> Réfeérence naturel (SEO) et payant (SEA) </li>
                </ul>
             </div>
          </div>
       </div>
       <!-- item 4 -->
       <div class="row py-4">
          <div class="col-lg-6 vector2">
             <div class="services" style="background-image: url('assets/img/f2.jpg');">
                <ul>
                   <li data-toggle="tooltip" data-placement="bottom" title="site vitrine"> Site vitrine </li>
                   <li data-toggle="tooltip" data-placement="bottom" title="site sur mesure"> Site sur mesure </li>
                   <li data-toggle="tooltip" data-placement="bottom" title="Site e-commerce"> Site e-commerce</li>
                   <li data-toggle="tooltip" data-placement="bottom" title="Catalogue en ligne"> Catalogue en ligne </li>
                </ul>
             </div>
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
             <div class="col-lg-6 vector2">
                <div class="services" style="background-image: url('assets/img/f2.jpg');">
                   <ul>
                      <li data-toggle="tooltip" data-placement="bottom" title="site vitrine"> Logiciel de gestion et sur mesure </li>
                      <li data-toggle="tooltip" data-placement="bottom" title="site sur mesure"> Application mobile et iOs </li>
                   </ul>
                </div>
             </div>
          </div>
       </div>
       <!-- Services two -->
       <div class="tab-content active" id="tab2">
        <div class="row" style="margin-bottom: 100px">
        <div class="col-md-6">
      <h2 style="text-align: left;">Services IT Managés</h2>
      <p style="text-align: justify; color: black;">La gestion des services IT est notre expertise. Nous prenons en charge la gestion complète de votre infrastructure informatique, de la surveillance proactive à la maintenance, en passant par la gestion des systèmes. La mission de AFT GROUP est de libérer votre entreprise des tracas informatiques, en vous permettant de vous concentrer sur votre cœur de métier.</p>
  </div>
  <div class="col-md-6">
    <div style="position: relative;">
      <img src="assets/img/services/Rectangle 9541.png" alt="Description de la première image" style="max-width: 95%; height: auto; top: 0;">
      <img src="assets/img/services/contexte-programmation-personne-travaillant-codes-ordinateur_23-2150010125.jpg" alt="Description de la deuxième image" style="width: 85%; height: 85%; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); border-radius: 10px; filter: brightness(0.2);">
      <div class="fas fa-icone-1" style="position: absolute; top: 10%; left: 12%; font-size: 16px; color: white;">
          <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nous vous garantissons une gestion transparente 
          de votre système d’information, ainsi qu’une direction des systèmes d’information externalisée.">111
            <span style="font-size: 15px; color: white; margin-left: 3px;">Infogérance, co-gérance, DSI déportée</span>
          </a>
      </div>
      <div class="fas fa-icone-2" style="position: absolute; top: 20%; left: 12%; font-size: 16px; color: white;">
           <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nous offrons un soutien dédié pour 
           résoudre vos problèmes informatiques, répondre aux questions des utilisateurs et garantir que votre entreprise 
           puisse tirer le meilleur parti de ses technologies.">111
              <span style="font-size: 15px; color: white; margin-left: 3px;">Support utilisateuret support IT</span>
           </a>
      </div>
      <div class="fas fa-icone-2" style="position: absolute; top: 30%; left: 12%; font-size: 16px; color: white;">
           <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nous réalisons des évaluations approfondies de vos 
           systèmes informatiques et de vos processus, et vous fournissons des conseils stratégiques pour 
           optimiser votre infrastructure et vos performances.">111
              <span style="font-size: 15px; color: white; margin-left: 3px;">Audit et conseils</span>
           </a>
      </div>
      <div class="fas fa-icone-2" style="position: absolute; top: 40%; left: 12%; font-size: 16px; color: white;">
           <a style="text-decoration:none" href="#" data-toggle="tooltip" title=": Nous pilotons et supervisons de manière 
             experte vos initiatives, de la planification à la réalisation, garantissant que vos projets sont livrés à 
             temps et dans les limites du budget.">111
              <span style="font-size: 15px; color: white; margin-left: 3px;">Gestion de projets</span>
           </a>
      </div>
      <div class="fas fa-icone-2" style="position: absolute; top: 50%; left: 12%; font-size: 16px; color: white;">
           <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nous vous offrons une solution complète pour optimiser 
           et maintenir votre infrastructure technologique. Nous assurons disponibilité, performance et sécurité de vos systèmes.">111
              <span style="font-size: 15px; color: white; margin-left: 3px;">Management de parc</span>
           </a>
      </div>
      <div class="fas fa-icone-2" style="position: absolute; top: 60%; left: 12%; font-size: 16px; color: white;">
           <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nous intervenons avec efficacité pour installer, 
           configurer et maintenir votre infrastructure directement sur votre site, vous offrant une tranquillité d’esprit totale.">111
               <span style="font-size: 15px; color: white; margin-left: 3px;">Intervention sur site et déploiement</span>
           </a>
      </div>
      <div class="fas fa-icone-2" style="position: absolute; top: 70%; left: 12%; font-size: 16px; color: white;">
           <a style="text-decoration:none" href="#" data-toggle="tooltip" title=" Nous facilitons, à votre entreprise, 
           la transition vers de nouvelles solutions en guidant votre équipe à travers les étapes du changement, favorisant une 
           adoption en douceur des nouvelles technologies et processus.">111
              <span style="font-size: 15px; color: white; margin-left: 3px;">Accompagnement au changement</span>
           </a>
      </div>
      <img src="assets/img/services/Vector 10.png" alt="Description de la troisième image" style="max-width: 70%; height: auto; position: absolute; top: 106.5%; left: 76%; transform: translate(-50%, -50%);">
    </div>
  </div>
</div>

                
                <div class="row" style="margin-bottom: 110px">
                  <div class="col-md-6">
                    <div style="position: relative;">
                    <img src="assets/img/services/Rectangle 9543.png" alt="Description de l'image" style="max-width: 95%; height: auto; top: 0;">
                    <img src="assets/img/services/contexte-programmation-personne-travaillant-codes-ordinateur_23-2150010125.jpg" alt="Description de la deuxième image" style="width: 85%; height: 87%; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); border-radius: 10px; filter: brightness(0.2);" class="img-custom">
                    <div class="fas fa-icone-1" style="position: absolute; top: 10%; left: 10%; font-size: 16px; color: white;">
                        <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nous effectuons des évaluations complètes pour
                         identifier les vulnérabilités et les menaces potentielles puis nous proposons des solutions solides pour renforcer 
                         la sécurité de votre infrastructure.">111
                           <span style="font-size: 15px; color: white; margin-left: 3px;">Diagnostic et audit de sécurité </span>
                        </a>
                     </div>
                    <div class="fas fa-icone-2" style="position: absolute; top: 20%; left: 10%; font-size: 16px; color: white;">
                        <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nos services de sécurité managés sont
                         vos remparts numériques contre les menaces. Nous déployons des solutions de sécurité de pointe pour protéger 
                         vos systèmes 24/7.">111
                           <span style="font-size: 15px; color: white; margin-left: 3px;">Antivirus et services managés de sécurité</span>
                        </a>
                     </div>
                    <div class="fas fa-icone-2" style="position: absolute; top: 30%; left: 10%; font-size: 16px; color: white;">
                        <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nous établissons des défenses robustes pour
                         protéger vos données et vos communications, garantissant un flux ininterrompu d’informations sécurisées.">111
                           <span style="font-size: 15px; color: white; margin-left: 3px;">Sécurité des flux et pare-feux </span>
                        </a>
                     </div>
                    <div class="fas fa-icone-2" style="position: absolute; top: 40%; left: 10%; font-size: 16px; color: white;">
                        <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nos services en Authentification multifacteur (MFA)
                         renforcent votre sécurité en ajoutant des couches supplémentaires de protection.">111
                           <span style="font-size: 15px; color: white; margin-left: 3px;">Authentification multi-facteurs</span>
                        </a>
                     </div>
                    <div class="fas fa-icone-2" style="position: absolute; top: 50%; left: 10%; font-size: 16px; color: white;">
                        <a style="text-decoration:none" href="#" data-toggle="tooltip" title=": Nous mettons en place des solutions sécurisées
                        pour garantir que vos collaborateurs, où qu’ils se trouvent, puissent accéder à vos systèmes en toute sécurité.">111
                           <span style="font-size: 15px; color: white; margin-left: 3px;">Sécurité des accès à distance</span>
                        </a>
                     </div>
                    <div class="fas fa-icone-2" style="position: absolute; top: 60%; left: 10%; font-size: 16px; color: white;">
                        <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nous mettons en place des solutions robustes
                         pour vérifier et sécuriser les l’identité de chaque utilisateur, garantissant que seules les personnes autorisées
                          aient accès à vos systèmes.">111
                           <span style="font-size: 15px; color: white; margin-left: 3px;">Sécurité des identités</span>
                        </a>
                     </div>
                    <div class="fas fa-icone-2" style="position: absolute; top: 70%; left: 10%; font-size: 16px; color: white;">
                        <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nos formations des utilisateurs sont conçues
                         pour transformer les collaborateurs en experts du numérique grâce à des programmes de formation sur mesure">111
                           <span style="font-size: 15px; color: white; margin-left: 3px;">Formation des utilisateurs</span>
                        </a>
                     </div>
                    <img src="assets/img/services/Vector 9.png" alt="Description de la troisième image" style="max-width: 70%; height: auto; position: absolute; top: 111%; right: 3%; transform: translate(-50%, -50%);">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div>
                      <h2 style="text-align: left;">Sécurité</h2>
                      <p style="text-align: justify; color: black;">Au sein de AFT GROUP, la sécurité informatique est notre priorité. Nous offrons une gamme complète de services de sécurité, allant de la mise en place de pare-feux et de systèmes de détection des intrusions à la protection contre les logiciels malveillants et la gestion des sauvegardes. Notre équipe de spécialistes en sécurité travaille sans relâche pour protéger vos données et votre infrastructure informatique.</p>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div>
                      <h2 style="text-align: left;">Equipement IT</h2>
                      <p style="text-align: justify; color: black;">À AFT GROUP, nous fournissons une vaste gamme de solutions en équipement IT pour répondre à vos besoins technologiques. Que vous recherchiez des serveurs, des réseaux, ou des équipements informatiques de pointe, nous avons la solution adaptée. Notre équipe dédiée vous accompagne dans le choix, l'acquisition et la mise en place de l'équipement IT qui répond à vos exigences spécifiques.</p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div style="position: relative;">
                    <img src="assets/img/services/Group 162574.png" alt="Description de la première image" style="max-width: 105%; height: auto; top: 0;">
                    <img src="assets/img/services/contexte-programmation-personne-travaillant-codes-ordinateur_23-2150010125.jpg" alt="Description de la deuxième image" style="width: 80%; height: 50%; position: absolute; top: 8%; left: 5%; border-radius: 10px; filter: brightness(0.2);">
                    <div class="fas fa-icone-1" style="position: absolute; top: 15%; left: 10%; font-size: 16px; color: white;">
                        <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nous vous aidons à vous équiper de postes de travail de pointe, 
                        fiables et performants, parfaitement adaptés à vos besoins pour optimiser la productivité de votre entreprise.">111
                           <span style="font-size: 15px; color: white; margin-left: 3px;">Postes de travail</span>
                        </a>
                    </div>
                    <div class="fas fa-icone-2" style="position: absolute; top: 28%; left: 10%; font-size: 16px; color: white;">
                        <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nos services de fourniture de périphériques IT 
                         vous donnent accès à une gamme complète de solutions matérielles de haute qualité.">111
                            <span style="font-size: 15px; color: white; margin-left: 3px;">Périphériques IT</span>
                        </a>
                     </div>
                    <div class="fas fa-icone-2" style="position: absolute; top: 40%; left: 10%; font-size: 16px; color: white;">
                        <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nous fournissons des PC et des tablettes performants pour
                          répondre à vos besoins professionnels, que ce soit pour les tâches quotidiennes, la mobilité ou la puissance de calcul.">111
                           <span style="font-size: 15px; color: white; margin-left: 3px;">PC et Tablettes</span>
                        </a>
                     </div>
                    </div>
                    
                  </div>
                </div>

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
    
       element.classList.add("active-link");
    
        const tabId = element.getAttribute("data-tab");
    
        document.querySelectorAll(".tab-content").forEach((content) => {
          content.classList.remove("active");
        });
    
      document.getElementById(tabId).classList.add("active");
      });
    });
 </script>

<!-- script pour afficher les bull-messages  -->
<script>
  $ (function (){
    $('a').tooltip({
      placement:'bottom', trigger:'click'
    })
  })
</script>  
 @endsection
