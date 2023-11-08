@extends('layouts.app')
@section('content')
<!-- Hero slider + BG parallax -->
<section class="jarallax dark-mode bg-dark py-xxl-5" data-jarallax data-speed="0.4" id="accueil">
    <span class="position-absolute top-0 start-0 w-100 h-100 bg-gradient-dark-translucent"></span>
    <div class="jarallax-img" style="background-image: url(assets/img/services/femme-travaillant-ordinateur.jpg); filter: brightness(0.4);"></div>
    <div class="position-relative text-center zindex-5 overflow-hidden pt-4 py-md-5">
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
</section>
<style>
    .card-services {
    background-color:blue;
    position: relative;
    z-index: 1;
    bottom: 1%;
    width: 70%;
    text-align: center;
    left: 50%;
    padding: 1%;
    margin-top:-5%;
    transform: translateX(-50%);
    }
    .card-services a{
    font-size: 25px;
    font-weight: 900;
    text-decoration: none;
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
<!-- SERVICE SOLUTION WE DIGITAL -->
<!-- Service one -->
<div class="container tab-content active" id="tab1">
<!-- item 1 -->
<div class="row py-4" style="margin-top: 5%; margin-bottom: 10%;">
    <div class="col-lg-6 services-text">
        <h2>Conception graphique: Identité visuelle</h2>
        <p style="color: black;"> Créez une impression mémorable avec notre expertise en conception
            graphique, de la création de logos à la mise en page de documents, en
            passant par la définition de votre identité visuelle complète, AFT GROUP
            vous propose une gamme complète de services de pointe pour renforcer
            votre présence en ligne.
        </p>
    </div>
    <div class="col-md-6">
        <div style="position: relative;">
            <img src="assets/img/services/Rectangle 9541.png" alt="Description de la première image" style="max-width: 60%; height: auto; top: 0;">
            <img src="assets/img/services-images/photographe-afro-americain-editant-photographie-numerique_482257-26776.jpg" alt="Description de la deuxième image" style="width: 53%; height: 80%; position: absolute; top: 50%; left: 30%; transform: translate(-50%, -50%); border-radius: 10px; filter: brightness(0.2);">
            <div class="fas fa-icone-1" style="position: absolute; top: 15%; left: 6%; font-size: 16px; color: white;">
                <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nos services de conception de logo sont conçus pour donner vie à
                votre identité visuelle, en créant des logos mémorables et uniques"><img src="assets/img/codesandbox.png">
                <span style="font-size: 15px; color: white; margin-left: 3px;">Logo </span>
                </a>
            </div>
            <div class="fas fa-icone-2" style="position: absolute; top: 25%; left: 6%; font-size: 16px; color: white;">
                <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nous créons des directives graphiques personnalisées
                qui vous aident à maintenir une image professionnelle et reconnaissable
                dans tous vos supports de communication, du web aux imprimés."><img src="assets/img/codesandbox.png">
                <span style="font-size: 15px; color: white; margin-left: 3px;">Charte graphique </span>
                </a>
            </div>
            <div class="fas fa-icone-2" style="position: absolute; top: 35%; left: 6%; font-size: 16px; color: white;">
              <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nous personnalisons chaque détail pour refléter votre
              identité visuelle, offrant ainsi une touche élégante à vos communications
              électroniques. Avec la signature mail, permettez à votre destinataire
              d’identifier et d’authentifier votre entreprise."><img src="assets/img/codesandbox.png">
              <span style="font-size: 15px; color: white; margin-left: 3px;"> Signature mail </span>
              </a>
          </div>
          <div class="fas fa-icone-2" style="position: absolute; top: 45%; left: 6%; font-size: 16px; color: white;">
            <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Que ce soit à travers des papiers entête, des
            dépliants, des affiches ou d'autres supports imprimés, nous créons des
            outils de communication visuelle qui captivent l'attention, renforcent votre
            message et laissent une impression durable."><img src="assets/img/codesandbox.png">
            <span style="font-size: 15px; color: white; margin-left: 3px;">Support de communication </span>
            </a>
        </div>
        <div class="fas fa-icone-2" style="position: absolute; top: 55%; left: 6%; font-size: 16px; color: white;">
          <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nos services de mise en page de documents
          vous aident à présenter vos informations de manière professionnelle, que
          ce soit pour des rapports, des présentations, des brochures, des manuels,ou d'autres supports écrits, garantissant ainsi que votre contenu soit à la
          fois engageant et facile à comprendre."><img src="assets/img/codesandbox.png">
          <span style="font-size: 15px; color: white; margin-left: 3px;">Mise en page documents </span>
          </a>
      </div>
        </div>
        <img src="assets/img/services/Vector 10.png" alt="Description de la troisième image" style="max-width: 40%; height: auto; position: absolute; top: 187.5%; left: 80%; transform: translate(-50%, -50%);">
    </div>
</div>
<!-- item 2 -->
<div class="row py-4" style="margin-bottom: 10%;">
    <div class="col-md-6">
        <div style="position: relative;">
        <img src="assets/img/services/Rectangle 9543.png" alt="Description de l'image" style="max-width: 80%; height: auto; top: 0; padding: 10%">
         <img src="assets/img/services-images/photographe-afro-americain-editant-photographie-numerique_482257-26776.jpg" alt="Description de la deuxième image" style="width: 55%; height: 65%; position: absolute; top: 50%; left: 40%; transform: translate(-50%, -50%); border-radius: 10px; filter: brightness(0.2);">
            <div class="fas fa-icone-1" style="position: absolute; top: 20%; left: 14%; font-size: 16px; color: white;">
                <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nos concepteurs créent des
                rendus visuels détaillés qui capturent l'essence de votre projet, vous
                permettant de visualiser et de perfectionner l'expérience utilisateur avant
                le développement."><img src="assets/img/codesandbox.png">
                <span style="font-size: 15px; color: white; margin-left: 3px;">Réalisation de maquette web/mobile</span>
                </a>
            </div>
            <div class="fas fa-icone-2" style="position: absolute; top: 30%; left: 14%; font-size: 16px; color: white;">
                <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nos concepteurs créent des
                représentations détaillées de l'interface de votre application, vous
                permettant de visualiser son aspect, sa convivialité et son flux avant le
                développement."><img src="assets/img/codesandbox.png">
                <span style="font-size: 15px; color: white; margin-left: 3px;">Réalisation de mockup pour application </span>
                </a>
            </div>
            <div class="fas fa-icone-2" style="position: absolute; top: 40%; left: 14%; font-size: 16px; color: white;">
              <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Notre service de mise à jour et
              de modification de maquette vous permet d'ajuster et de perfectionner
              vos conceptions existantes pour répondre aux besoins changeants de votre
              projet."><img src="assets/img/codesandbox.png">
              <span style="font-size: 15px; color: white; margin-left: 3px;"> Mise à jour ou modification de maquette</span>
              </a>
          </div>
          <div class="fas fa-icone-2" style="position: absolute; top: 50%; left: 14%; font-size: 16px; color: white;">
            <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Notre service de prototypage vous permet d'explorer le
            fonctionnement de votre application ou site web, de tester, itérer et
            perfectionner votre concept, garantissant ainsi que la réalisation finale soit
            alignée sur vos objectifs et les attentes de vos utilisateurs."><img src="assets/img/codesandbox.png">
            <span style="font-size: 15px; color: white; margin-left: 3px;">Prototypage </span>
            </a>
        </div>
        </div>
        <img src="assets/img/services/Vector 9.png" alt="Description de la troisième image" style="max-width: 50%; height: auto; position: absolute; top: 287%; right: 90%; transform: translate(50%, -50%);">
    </div>
    <div class="col-lg-6 services-text">
        <h2>Conception web: UI/UX</h2>
        <p style="color: black;"> Nous sommes passionnés par la création d'expériences utilisateur
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


<div class="row py-4" style="margin-bottom: 10%;">
  <div class="col-lg-6 services-text">
      <h2>Marketing Digital</h2>
      <p style="color: black;"> Nous comptons dans nos rangs des experts en marketing digital, prêts à
          propulser votre présence en ligne. Nous concevons des stratégies de
          marketing sur mesure pour maximiser votre visibilité et votre engagement.
          Que ce soit à travers une gestion efficace des médias sociaux, des
          campagnes d'e-mailing ciblées, un référencement naturel (SEO) ou des
          campagnes publicitaires payantes (SEA), l'équipe de AFT GROUP sait
          comment atteindre votre public cible et générer des résultats tangibles.
      </p>
  </div>
  <div class="col-md-6">
      <div style="position: relative;">
      <img src="assets/img/services/Rectangle 9541.png" alt="Description de la première image" style="max-width: 70%; height: auto; top: 0;">
            <img src="assets/img/services-images/photographe-afro-americain-editant-photographie-numerique_482257-26776.jpg" alt="Description de la deuxième image" style="width: 60%; height: 85%; position: absolute; top: 50%; left: 35%; transform: translate(-50%, -50%); border-radius: 10px; filter: brightness(0.2);">
          <div class="fas fa-icone-1" style="position: absolute; top: 10%; left: 6%; font-size: 16px; color: white;">
              <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nos services de stratégie digitale sont conçus pour
              renforcer votre présence en ligne, améliorer votre visibilité et maximiser
              votre impact sur le marché."><img src="assets/img/codesandbox.png">
              <span style="font-size: 15px; color: white; margin-left: 3px;">Stratégie digitale </span>
              </a>
          </div>
          <div class="fas fa-icone-2" style="position: absolute; top: 20%; left: 6%; font-size: 16px; color: white;">
              <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nos services en e-mailing vous aident à créer, diffuser et suivre
              des campagnes ciblées, engageantes et efficaces, que ce soit pour la
              promotion de vos produits ou la fidélisation de vos clients."><img src="assets/img/codesandbox.png">
              <span style="font-size: 15px; color: white; margin-left: 3px;"> E-mailling</span>
              </a>
          </div>
          <div class="fas fa-icone-2" style="position: absolute; top: 30%; left: 6%; font-size: 16px; color: white;">
            <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nos services en réseaux sociaux sont conçus pour
            renforcer votre image de marque sur les plateformes sociales, élargir votre
            audience et favoriser l'engagement de vos followers."><img src="assets/img/codesandbox.png">
            <span style="font-size: 15px; color: white; margin-left: 3px;">Réseaux sociaux </span>
            </a>
        </div>
        <div class="fas fa-icone-2" style="position: absolute; top: 40%; left: 6%; font-size: 16px; color: white;">
          <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nos services de référencement SEO et SEA optimisent
          votre présence sur les moteurs de recherche, augmentant ainsi la visibilité
          de votre entreprise et attirant un trafic de qualité."><img src="assets/img/codesandbox.png">
          <span style="font-size: 15px; color: white; margin-left: 3px;">Référencements naturel (SEO) et payant (SEA)  </span>
          </a>
      </div>

      </div>
      <img src="assets/img/services/Vector 10.png" alt="Description de la troisième image" style="max-width: 50%; height: auto; position: absolute; top: 383%; left: 81%; transform: translate(-50%, -50%);">
  </div>
</div>
<!-- item 4 -->
<div class="row py-4" style="margin-bottom: 10%;">
  <div class="col-md-6">
      <div style="position: relative;">
      <img src="assets/img/services/Rectangle 9543.png" alt="Description de l'image" style="max-width: 80%; height: auto; top: 0; padding: 10%">
         <img src="assets/img/services-images/photographe-afro-americain-editant-photographie-numerique_482257-26776.jpg" alt="Description de la deuxième image" style="width: 55%; height: 65%; position: absolute; top: 50%; left: 40%; transform: translate(-50%, -50%); border-radius: 10px; filter: brightness(0.2);">
          <div class="fas fa-icone-1" style="position: absolute; top: 20%; left: 14%; font-size: 16px; color: white;">
              <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nous transformons votre entreprise en une vitrine numérique
              élégante et convaincante, lui donnant une présence en ligne captivante,
              tout en mettant en avant votre identité, vos produits et vos services de
              manière attrayante."><img src="assets/img/codesandbox.png">
              <span style="font-size: 15px; color: white; margin-left: 3px;">Site vitrine </span>
              </a>
          </div>
          <div class="fas fa-icone-2" style="position: absolute; top: 30%; left: 14%; font-size: 16px; color: white;">
              <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nos services de conception de site sur mesure vous
              offrent une solution numérique avec une expérience utilisateur
              exceptionnelle entièrement adaptée à vos objectifs spécifiques et à votre
              identité."><img src="assets/img/codesandbox.png">
              <span style="font-size: 15px; color: white; margin-left: 3px;"> Site sur mesure</span>
              </a>
          </div>
          <div class="fas fa-icone-1" style="position: absolute; top: 40%; left: 14%; font-size: 16px; color: white;">
            <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nous créons des plateformes de vente en ligne
            performantes, offrant une expérience d'achat convaincante, une gestion
            intuitive et des fonctionnalités avancées."><img src="assets/img/codesandbox.png">
            <span style="font-size: 15px; color: white; margin-left: 3px;">Site e-commerce </span>
            </a>
        </div>
        <div class="fas fa-icone-1" style="position: absolute; top: 50%; left: 14%; font-size: 16px; color: white;">
          <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nos services de conception de catalogue en ligne
          transforment vos produits en une expérience d'achat visuelle, permettant
          à vos clients de les découvrir de manière captivante."><img src="assets/img/codesandbox.png">
          <span style="font-size: 15px; color: white; margin-left: 3px;">Catalogue en ligne </span>
          </a>
      </div>
      </div>
      <img src="assets/img/services/Vector 9.png" alt="Description de la troisième image" style="max-width: 50%; height: auto; position: absolute; top: 481.5%; right: 92%; transform: translate(50%, -50%);">
  </div>
  <div class="col-lg-6 services-text">
      <h2>Développement Web et Mobile</h2>
      <p style="color: black;"> Notre équipe de développeurs talentueux excelle dans la création
          d'applications mobiles innovantes et d'expériences web exceptionnelles.
          Que vous cherchiez à automatiser vos opérations métier, à offrir une expérience mobile de qualité, ou à concevoir un site web sur mesure, nous
          sommes prêts à transformer vos idées en solutions numériques robustes.
      </p>
  </div>
  <!-- item 5 -->
  <div class="row py-4" style="margin-bottom: 10%;">
      <div class="col-lg-6 services-text">
          <h2>Développement de logiciels et d’applications</h2>
          <p style="color: black;">Nous sommes des créateurs de solutions numériques sur mesure. Notre
              équipe de développeurs expérimentés excelle dans la conception de
              logiciels de gestion personnalisés et d'applications novatrices. Que vous
              ayez besoin d'automatiser des processus métier, de renforcer l'efficacité
              opérationnelle ou de développer des logiciels de qualité, nous sommes
              prêts à transformer vos besoins en solutions logicielles puissantes.
          </p>
      </div>
      <div class="col-md-6">
          <div style="position: relative;">
          <img src="assets/img/services/Rectangle 9541.png" alt="Description de la première image" style="max-width: 70%; height: auto; top: 0;">
            <img src="assets/img/services-images/photographe-afro-americain-editant-photographie-numerique_482257-26776.jpg" alt="Description de la deuxième image" style="width: 60%; height: 85%; position: absolute; top: 50%; left: 35%; transform: translate(-50%, -50%); border-radius: 10px; filter: brightness(0.2);">
              <div class="fas fa-icone-1" style="position: absolute; top: 10%; left: 8%; font-size: 16px; color: white;">
                  <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Avec l’expertise de notre équipe de
                  développement, vous avez l'assurance de disposer d'un logiciel de gestion
                  qui renforce votre efficacité et stimule votre croissance, évoluant en
                  parfaite harmonie avec votre entreprise."><img src="assets/img/codesandbox.png">
                  <span style="font-size: 15px; color: white; margin-left: 3px;">Logiciel de gestion et sur mesure</span>
                  </a>
              </div>
              <div class="fas fa-icone-2" style="position: absolute; top: 20%; left: 8%; font-size: 16px; color: white;">
                  <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nous transformons vos idées en applications
                  mobiles exceptionnelles, offrant une expérience utilisateur fluide et
                  attrayante, que ce soit pour iOS, Android ou d'autres plateformes."><img src="assets/img/codesandbox.png">
                  <span style="font-size: 15px; color: white; margin-left: 3px;"> Application mobile et iOS</span>
                  </a>
              </div>
          </div>
          <img src="assets/img/services/Vector 10.png" alt="Description de la troisième image" style="max-width: 50%; height: auto; position: absolute; top: 555%; left: 78%; transform: translate(-50%, -50%);">
      </div>
  </div>
</div>
</div>
<!-- SERVICE INFORMATIQUES -->
<div class="container tab-content" id="tab2">
  <!-- item 1 -->
<div class="row" style="margin-bottom: 10%; margin-top: 5%">
   <div class="col-md-6" style="padding: 4%" >
      <h2 style="text-align: left;">Services IT Managés</h2>
      <p style="text-align: justify; color: black;">La gestion des services IT est notre expertise.
       Nous prenons en charge la gestion complète de votre infrastructure informatique, de la surveillance 
       proactive à la maintenance, en passant par la gestion des systèmes. La mission de AFT GROUP est de libérer 
       votre entreprise des tracas informatiques, en vous permettant de vous concentrer sur votre cœur de métier.
      </p>
   </div>
   <div class="col-md-6">
      <div style="position: relative;">
         <img src="assets/img/services/Rectangle 9541.png" alt="Description de la première image" style="max-width: 60%; height: auto; top: 0;">
         <img src="assets/img/services/contexte-programmation-personne-travaillant-codes-ordinateur_23-2150010125.jpg" alt="Description de la deuxième image" style="width: 55%; height: 80%; position: absolute; top: 50%; left: 30%; transform: translate(-50%, -50%); border-radius: 10px; filter: brightness(0.2);">
            <div class="fas fa-icone-1" style="position: absolute; top: 15%; left: 5%; font-size: 16px; color: white;">
               <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nous vous garantissons une gestion transparente de votre système d’information, ainsi qu’une direction des systèmes d’information externalisée."><img src="assets/img/codesandbox.png">
                  <span style="font-size: 15px; color: white; margin-left: 3px;">Infogérance, co-gérance, DSI déportée</span>
               </a>
            </div>
            <div class="fas fa-icone-2" style="position: absolute; top: 25%; left: 5%; font-size: 16px; color: white;">
               <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nous offrons un soutien dédié pour résoudre vos problèmes informatiques, répondre aux questions des utilisateurs et garantir que votre entreprise puisse tirer le meilleur parti de ses technologies."><img src="assets/img/codesandbox.png">
                  <span style="font-size: 15px; color: white; margin-left: 3px;">Support utilisateuret support IT</span>
               </a>
            </div>
            <div class="fas fa-icone-2" style="position: absolute; top: 35%; left: 5%; font-size: 16px; color: white;">
               <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nous réalisons des évaluations approfondies de vos systèmes informatiques et de vos processus, et vous fournissons des conseils stratégiques pour optimiser votre infrastructure et vos performances."><img src="assets/img/codesandbox.png">
                  <span style="font-size: 15px; color: white; margin-left: 3px;">Audit et conseils</span>
               </a>
            </div>
            <div class="fas fa-icone-2" style="position: absolute; top: 45%; left: 5%; font-size: 16px; color: white;">
               <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nous pilotons et supervisons de manière experte vos initiatives, de la planification à la réalisation, garantissant que vos projets sont livrés à temps et dans les limites du budget."><img src="assets/img/codesandbox.png">
                  <span style="font-size: 15px; color: white; margin-left: 3px;">Gestion de projets</span>
               </a>
            </div>
            <div class="fas fa-icone-2" style="position: absolute; top: 55%; left: 5%; font-size: 16px; color: white;">
               <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nous vous offrons une solution complète pour optimiser et maintenir votre infrastructure technologique. Nous assurons disponibilité, performance et sécurité de vos systèmes."><img src="assets/img/codesandbox.png">
                  <span style="font-size: 15px; color: white; margin-left: 3px;">Management de parc</span>
               </a>
            </div>
            <div class="fas fa-icone-2" style="position: absolute; top: 65%; left: 5%; font-size: 16px; color: white;">
               <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nous intervenons avec efficacité pour installer, configurer et maintenir votre infrastructure directement sur votre site, vous offrant une tranquillité d’esprit totale."><img src="assets/img/codesandbox.png">
                  <span style="font-size: 15px; color: white; margin-left: 3px;">Intervention sur site et déploiement</span>
               </a>
            </div>
            <div class="fas fa-icone-2" style="position: absolute; top: 75%; left: 5%; font-size: 16px; color: white;">
               <a style="text-decoration:none" href="#" data-toggle="tooltip" title=" Nous facilitons, à votre entreprise, la transition vers de nouvelles solutions en guidant votre équipe à travers les étapes du changement, favorisant une adoption en douceur des nouvelles technologies et processus."><img src="assets/img/codesandbox.png">
                  <span style="font-size: 15px; color: white; margin-left: 3px;">Accompagnement au changement</span>
               </a>
            </div>
         <img src="assets/img/services/Vector 10.png" alt="Description de la troisième image" style="max-width: 60%; height: auto; position: absolute; top: 110%; left: 55%; transform: translate(-50%, -50%);">
      </div>
   </div>  
</div>

<!-- item 2 -->
<div class="row" style="margin-bottom: 10%;">
   <div class="col-md-6">
      <div style="position: relative;">
         <img src="assets/img/services/Rectangle 9543.png" alt="Description de l'image" style="max-width: 80%; height: auto; top: 0; padding: 10%">
         <img src="assets/img/services/contexte-programmation-personne-travaillant-codes-ordinateur_23-2150010125.jpg" alt="Description de la deuxième image" style="width: 55%; height: 60%; position: absolute; top: 50%; left: 40%; transform: translate(-50%, -50%); border-radius: 10px; filter: brightness(0.2);">
            <div class="fas fa-icone-1" style="position: absolute; top: 23%; left: 14%; font-size: 16px; color: white;">
               <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nous effectuons des évaluations complètes pour identifier les vulnérabilités et les menaces potentielles puis nous proposons des solutions solides pour renforcer la sécurité de votre infrastructure."><img src="assets/img/codesandbox.png">
                  <span style="font-size: 15px; color: white; margin-left: 3px;">Diagnostic et audit de sécurité </span>
               </a>
            </div>
            <div class="fas fa-icone-2" style="position: absolute; top: 30%; left: 14%; font-size: 16px; color: white;">
                  <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nos services de sécurité managés sont vos remparts numériques contre les menaces. Nous déployons des solutions de sécurité de pointe pour protéger vos systèmes 24/7."><img src="assets/img/codesandbox.png">
                  <span style="font-size: 15px; color: white; margin-left: 3px;">Antivirus et services managés de sécurité</span>
               </a>
            </div>
            <div class="fas fa-icone-2" style="position: absolute; top: 37%; left: 14%; font-size: 16px; color: white;">
               <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nous établissons des défenses robustes pour protéger vos données et vos communications, garantissant un flux ininterrompu d’informations sécurisées."><img src="assets/img/codesandbox.png">
                  <span style="font-size: 15px; color: white; margin-left: 3px;">Sécurité des flux et pare-feux </span>
               </a>
            </div>
            <div class="fas fa-icone-2" style="position: absolute; top: 44%; left: 14%; font-size: 16px; color: white;">
               <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nos services en Authentification multifacteur (MFA) renforcent votre sécurité en ajoutant des couches supplémentaires de protection."><img src="assets/img/codesandbox.png">
                  <span style="font-size: 15px; color: white; margin-left: 3px;">Authentification multi-facteurs</span>
               </a>
            </div>
            <div class="fas fa-icone-2" style="position: absolute; top: 51%; left: 14%; font-size: 16px; color: white;">
               <a style="text-decoration:none" href="#" data-toggle="tooltip" title=": Nous mettons en place des solutions sécurisées pour garantir que vos collaborateurs, où qu’ils se trouvent, puissent accéder à vos systèmes en toute sécurité."><img src="assets/img/codesandbox.png">
                  <span style="font-size: 15px; color: white; margin-left: 3px;">Sécurité des accès à distance</span>
               </a>
            </div>
            <div class="fas fa-icone-2" style="position: absolute; top: 58%; left: 14%; font-size: 16px; color: white;">
               <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nous mettons en place des solutions robustes pour vérifier et sécuriser les l’identité de chaque utilisateur, garantissant que seules les personnes autorisées aient accès à vos systèmes."><img src="assets/img/codesandbox.png">
                  <span style="font-size: 15px; color: white; margin-left: 3px;">Sécurité des identités</span>
               </a>
            </div>
            <div class="fas fa-icone-2" style="position: absolute; top: 65%; left: 14%; font-size: 16px; color: white;">
               <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nos formations des utilisateurs sont conçues pour transformer les collaborateurs en experts du numérique grâce à des programmes de formation sur mesure"><img src="assets/img/codesandbox.png">
                  <span style="font-size: 15px; color: white; margin-left: 3px;">Formation des utilisateurs</span>
               </a>
            </div>
         <img src="assets/img/services/Vector 9.png" alt="Description de la troisième image" style="max-width: 50%; height: auto; position: absolute; top: 96%; right: 85%; transform: translate(50%, -50%);">
      </div>
   </div>
   <div class="col-md-6" style="padding: 4%">
      <h2 style="text-align: left;">Sécurité</h2>
      <p style="text-align: justify; color: black;">Au sein de AFT GROUP, la sécurité informatique est notre priorité. 
      Nous offrons une gamme complète de services de sécurité, allant de la mise en place de pare-feux et de systèmes de 
      détection des intrusions à la protection contre les logiciels malveillants et la gestion des sauvegardes. Notre équipe de 
      spécialistes en sécurité travaille sans relâche pour protéger vos données et votre infrastructure informatique.
      </p>
   </div>
</div>

<!-- item 3 -->
<div class="row" style="margin-bottom: 10%;">
   <div class="col-md-6" style="padding: 4%">
      <h2 style="text-align: left;">Equipement IT</h2>
      <p style="text-align: justify; color: black;">À AFT GROUP, nous fournissons une vaste gamme de solutions en équipement IT pour répondre à vos besoins technologiques. Que vous recherchiez des serveurs, des réseaux, ou des équipements informatiques de pointe, nous avons la solution adaptée. Notre équipe dédiée vous accompagne dans le choix, l'acquisition et la mise en place de l'équipement IT qui répond à vos exigences spécifiques.</p>
   </div>
   <div class="col-md-6">
      <div style="position: relative;">
         <img src="assets/img/services/Group 162574.png" alt="Description de la première image" style="max-width: 70%; height: auto; top: 0;">
         <img src="assets/img/services/contexte-programmation-personne-travaillant-codes-ordinateur_23-2150010125.jpg" alt="Description de la deuxième image" style="width: 53%; height: 50%; position: absolute; top: 8%; left: 3%; border-radius: 10px; filter: brightness(0.2);">
            <div class="fas fa-icone-1" style="position: absolute; top: 15%; left: 5%; font-size: 16px; color: white;">
               <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nous vous aidons à vous équiper de postes de travail de pointe, fiables et performants, parfaitement adaptés à vos besoins pour optimiser la productivité de votre entreprise."><img src="assets/img/codesandbox.png">
                  <span style="font-size: 15px; color: white; margin-left: 3px;">Postes de travail</span>
               </a>
            </div>
            <div class="fas fa-icone-2" style="position: absolute; top: 30%; left: 5%; font-size: 16px; color: white;">
               <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nos services de fourniture de périphériques IT vous donnent accès à une gamme complète de solutions matérielles de haute qualité."><img src="assets/img/codesandbox.png">
                  <span style="font-size: 15px; color: white; margin-left: 3px;">Périphériques IT</span>
               </a>
            </div>
            <div class="fas fa-icone-2" style="position: absolute; top: 45%; left: 5%; font-size: 16px; color: white;">
               <a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nous fournissons des PC et des tablettes performants pour répondre à vos besoins professionnels, que ce soit pour les tâches quotidiennes, la mobilité ou la puissance de calcul."><img src="assets/img/codesandbox.png">
                  <span style="font-size: 15px; color: white; margin-left: 3px;">PC et Tablettes</span>
               </a>
            </div>
      </div>              
   </div>
</div>
</div>
<!-- SERVICE INNOVATION DIGITALE -->

<div class="tab-content" id="tab3">
<!-- item 1 -->

<div class="row" style="margin-bottom: 10%; margin-top: 5%">
  <div class="col-md-6" style="padding: 4%" >
     <h2 style="text-align: left;">Réalité Virtuelle(VR) et Augmentée(AR)</h2>
     <p style="text-align: justify; color: black;">Chez AFT GROUP, nous sommes les créateurs d'univers virtuels et
     augmentés. Notre équipe est spécialisée dans la conception et le
     développement de projets de réalité virtuelle et augmentée, offrant des
     expériences immersives uniques. Que vous cherchiez à révolutionner une
     formation, à offrir des visites virtuelles captivantes ou à créer des
     applications innovantes, nous sommes là pour transformer vos idées en
     expériences digitales éblouissantes. Explorez un nouveau monde de
     possibilités avec nos services en réalité virtuelle et augmentée
     </p>
  </div>
  <div class="col-md-6">
     <div style="position: relative;">
        <img src="assets/img/services/Rectangle 9541.png" alt="Description de la première image" style="max-width: 50%; height: auto; top: 0;">
        <img src="assets/img/services/personne-travaillant-html-ordinateur_23-2150038846.jpg" alt="Description de la deuxième image" style="width: 43%; height: 80%; position: absolute; top: 50%; left: 25%; transform: translate(-50%, -50%); border-radius: 10px; filter: brightness(0.2);">
        <img src="assets/img/services/Vector 10.png" alt="Description de la troisième image" style="max-width: 50%; height: auto; position: absolute; top: 110%; left: 45%; transform: translate(-50%, -50%);">
     </div>
  </div>  
</div>

<!-- item 2 -->
<div class="row" style="margin-bottom: 15%;">
  <div class="col-md-6">
     <div style="position: relative;">
        <img src="assets/img/services/Rectangle 9543.png" alt="Description de l'image" style="max-width: 70%; height: auto; top: 0; padding: 10%">
        <img src="assets/img/services/personne-travaillant-html-ordinateur_23-2150038846.jpg" alt="Description de la deuxième image" style="width: 45%; height: 59%; position: absolute; top: 50%; left: 35%; transform: translate(-50%, -50%); border-radius: 10px; filter: brightness(0.2);">
        <img src="assets/img/services/Vector 9.png" alt="Description de la troisième image" style="max-width: 50%; height: auto; position: absolute; top: 97.5%; right: 85%; transform: translate(50%, -50%);">
     </div>
  </div>
  <div class="col-md-6" style="padding: 4%">
     <h2 style="text-align: left;">Donné vie à ses idées</h2>
     <p style="text-align: justify; color: black;">À AFT GROUP, nous sommes les artisans de votre vision.Notre mission est
     de donner vie à vos concepts, de les façonner en solutions numériques
     innovantes. Nous sommes là pour concrétiser votre vision et propulser
     votre entreprise vers un avenir numérique florissant. Faites équipe avec
     nous pour faire de vos idées une réalité.
     </p>
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
