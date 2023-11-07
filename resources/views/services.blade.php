@extends('layouts.app')

@section('content')

<!-- Hero slider + BG parallax -->
<section class="jarallax dark-mode bg-dark py-xxl-5" data-jarallax data-speed="0.4" id="services">
        <span class="position-absolute top-0 start-0 w-100 h-100 bg-gradient-dark-translucent"></span>
        <div class="jarallax-img" style=" filter: brightness(0.4); background-image: url(assets/img/services/femme-travaillant-ordinateur.jpg);"></div>
        <div class="position-relative text-center zindex-5 overflow-hidden pt-4 py-md-5">

          <!-- Slider controls (Prev / next) -->
          

          <!-- Slider -->
          <div class="container text-center py-xl-5">
            <div class="row justify-content-center pt-lg-5">
              <div class="col-xl-8 col-lg-9 col-md-10 col-11">
                <div class="swiper pt-5 pb-4 py-md-5" data-swiper-options='{
                  "navigation": {
                    "prevEl": "#hero-prev",
                    "nextEl": "#hero-next"
                  }
                }'>


                <div class="swiper-wrapper">
                    <!-- Item -->
                    <div class="swiper-slide">
                      <h2 class="display-2 from-start mb-lg-4 text-start">Besoins de services informatiques ?</h2>
                    <div class="scale-up delay-1 text-start">
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

      <section class="jarallax bg-light py-xxl-5" id="services">
        <span class="position-absolute top-0 start-0 w-100 h-100 "></span>
        <div class="position-relative text-center zindex-5 overflow-hidden pt-4 py-md-5">

          <!-- Slider controls (Prev / next) -->
          

          <!-- Slider -->
          <div class="container text-center py-xl-5">
            <div class="row justify-content-center pt-lg-5">
              <div class="col-xl-8 col-lg-9 col-md-10 col-11">
                <div class="swiper pt-5 pb-4 py-md-5" data-swiper-options='{
                  "navigation": {
                    "prevEl": "#hero-prev",
                    "nextEl": "#hero-next"
                  }
                }'>


                <div class="row" style="margin-bottom: 100px">
  <div class="col-md-6 mr-3">
      <h2 style="text-align: left;">Services IT Managés</h2>
      <p style="text-align: justify; color: black;">La gestion des services IT est notre expertise. Nous prenons en charge la gestion complète de votre infrastructure informatique, de la surveillance proactive à la maintenance, en passant par la gestion des systèmes. La mission de AFT GROUP est de libérer votre entreprise des tracas informatiques, en vous permettant de vous concentrer sur votre cœur de métier.</p>
  </div>
  <div class="col-md-6">
    <div style="position: relative;">
      <img src="assets/img/services/Rectangle 9541.png" alt="Description de la première image" style="max-width: 95%; height: auto; top: 0;">
      <img src="assets/img/services/contexte-programmation-personne-travaillant-codes-ordinateur_23-2150010125.jpg" alt="Description de la deuxième image" style="width: 85%; height: 85%; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); border-radius: 10px; filter: brightness(0.2);">
      <div class="fas fa-icone-1" style="position: absolute; top: 10%; left: 12%; font-size: 16px; color: white;"><a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nous vous garantissons une gestion transparente de votre système d’information, ainsi qu’une direction des systèmes d’information externalisée.">111
      <span style="font-size: 15px; color: white; margin-left: 3px;">Infogérance, co-gérance, DSI déportée</span></a></div>
      <div class="fas fa-icone-2" style="position: absolute; top: 20%; left: 12%; font-size: 16px; color: white;"><a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nous offrons un soutien dédié pour résoudre vos problèmes informatiques, répondre aux questions des utilisateurs et garantir que votre entreprise puisse tirer le meilleur parti de ses technologies.">111
      <span style="font-size: 15px; color: white; margin-left: 3px;">Support utilisateuret support IT</span></a></div>
      <div class="fas fa-icone-2" style="position: absolute; top: 30%; left: 12%; font-size: 16px; color: white;"><a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nous réalisons des évaluations approfondies de vos systèmes informatiques et de vos processus, et vous fournissons des conseils stratégiques pour optimiser votre infrastructure et vos performances.">111
      <span style="font-size: 15px; color: white; margin-left: 3px;">Audit et conseils</span></a></div>
      <div class="fas fa-icone-2" style="position: absolute; top: 40%; left: 12%; font-size: 16px; color: white;"><a style="text-decoration:none" href="#" data-toggle="tooltip" title=": Nous pilotons et supervisons de manière experte vos initiatives, de la planification à la réalisation, garantissant que vos projets sont livrés à temps et dans les limites du budget.">111
      <span style="font-size: 15px; color: white; margin-left: 3px;">Gestion de projets</span></a></div>
      <div class="fas fa-icone-2" style="position: absolute; top: 50%; left: 12%; font-size: 16px; color: white;"><a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nous vous offrons une solution complète pour optimiser et maintenir votre infrastructure technologique. Nous assurons disponibilité, performance et sécurité de vos systèmes.">111
      <span style="font-size: 15px; color: white; margin-left: 3px;">Management de parc</span></a></div>
      <div class="fas fa-icone-2" style="position: absolute; top: 60%; left: 12%; font-size: 16px; color: white;"><a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nous intervenons avec efficacité pour installer, configurer et maintenir votre infrastructure directement sur votre site, vous offrant une tranquillité d’esprit totale.">111
      <span style="font-size: 15px; color: white; margin-left: 3px;">Intervention sur site et déploiement</span></a></div>
      <div class="fas fa-icone-2" style="position: absolute; top: 70%; left: 12%; font-size: 16px; color: white;"><a style="text-decoration:none" href="#" data-toggle="tooltip" title=" Nous facilitons, à votre entreprise, la transition vers de nouvelles solutions en guidant votre équipe à travers les étapes du changement, favorisant une adoption en douceur des nouvelles technologies et processus.">111
      <span style="font-size: 15px; color: white; margin-left: 3px;">Accompagnement au changement</span></a></div>
      <img src="assets/img/services/Vector 10.png" alt="Description de la troisième image" style="max-width: 70%; height: auto; position: absolute; top: 106.5%; left: 76%; transform: translate(-50%, -50%);">
    </div>
  </div>
</div>

                
                <div class="row" style="margin-bottom: 110px">
                  <div class="col-md-6">
                    <div style="position: relative;">
                    <img src="assets/img/services/Rectangle 9543.png" alt="Description de l'image" style="max-width: 95%; height: auto; top: 0;">
                    <img src="assets/img/services/contexte-programmation-personne-travaillant-codes-ordinateur_23-2150010125.jpg" alt="Description de la deuxième image" style="width: 85%; height: 87%; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); border-radius: 10px; filter: brightness(0.2);" class="img-custom">
                    <div class="fas fa-icone-1" style="position: absolute; top: 10%; left: 10%; font-size: 16px; color: white;"><a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nous effectuons des évaluations complètes pour identifier les vulnérabilités et les menaces potentielles puis nous proposons des solutions solides pour renforcer la sécurité de votre infrastructure.">111
                    <span style="font-size: 15px; color: white; margin-left: 3px;">Diagnostic et audit de sécurité </span></a></div>
                    <div class="fas fa-icone-2" style="position: absolute; top: 20%; left: 10%; font-size: 16px; color: white;"><a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nos services de sécurité managés sont vos remparts numériques contre les menaces. Nous déployons des solutions de sécurité de pointe pour protéger vos systèmes 24/7.">111
                    <span style="font-size: 15px; color: white; margin-left: 3px;">Antivirus et services managés de sécurité</span></a></div>
                    <div class="fas fa-icone-2" style="position: absolute; top: 30%; left: 10%; font-size: 16px; color: white;"><a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nous établissons des défenses robustes pour protéger vos données et vos communications, garantissant un flux ininterrompu d’informations sécurisées.">111
                    <span style="font-size: 15px; color: white; margin-left: 3px;">Sécurité des flux et pare-feux </span></a></div>
                    <div class="fas fa-icone-2" style="position: absolute; top: 40%; left: 10%; font-size: 16px; color: white;"><a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nos services en Authentification multifacteur (MFA) renforcent votre sécurité en ajoutant des couches supplémentaires de protection.">111
                    <span style="font-size: 15px; color: white; margin-left: 3px;">Authentification multi-facteurs</span></a></div>
                    <div class="fas fa-icone-2" style="position: absolute; top: 50%; left: 10%; font-size: 16px; color: white;"><a style="text-decoration:none" href="#" data-toggle="tooltip" title=": Nous mettons en place des solutions sécurisées pour garantir que vos collaborateurs, où qu’ils se trouvent, puissent accéder à vos systèmes en toute sécurité.">111
                    <span style="font-size: 15px; color: white; margin-left: 3px;">Sécurité des accès à distance</span></a></div>
                    <div class="fas fa-icone-2" style="position: absolute; top: 60%; left: 10%; font-size: 16px; color: white;"><a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nous mettons en place des solutions robustes pour vérifier et sécuriser les l’identité de chaque utilisateur, garantissant que seules les personnes autorisées aient accès à vos systèmes.">111
                    <span style="font-size: 15px; color: white; margin-left: 3px;">Sécurité des identités</span></a></div>
                    <div class="fas fa-icone-2" style="position: absolute; top: 70%; left: 10%; font-size: 16px; color: white;"><a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nos formations des utilisateurs sont conçues pour transformer les collaborateurs en experts du numérique grâce à des programmes de formation sur mesure">111
                    <span style="font-size: 15px; color: white; margin-left: 3px;">Formation des utilisateurs</span></a></div>
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
                    <div class="fas fa-icone-1" style="position: absolute; top: 15%; left: 10%; font-size: 16px; color: white;"><a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nous vous aidons à vous équiper de postes de travail de pointe, fiables et performants, parfaitement adaptés à vos besoins pour optimiser la productivité de votre entreprise.">111
                    <span style="font-size: 15px; color: white; margin-left: 3px;">Postes de travail</span></a></div>
                    <div class="fas fa-icone-2" style="position: absolute; top: 28%; left: 10%; font-size: 16px; color: white;"><a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nos services de fourniture de périphériques IT vous donnent accès à une gamme complète de solutions matérielles de haute qualité.">111
                    <span style="font-size: 15px; color: white; margin-left: 3px;">Périphériques IT</span></a></div>
                    <div class="fas fa-icone-2" style="position: absolute; top: 40%; left: 10%; font-size: 16px; color: white;"><a style="text-decoration:none" href="#" data-toggle="tooltip" title="Nous fournissons des PC et des tablettes performants pour répondre à vos besoins professionnels, que ce soit pour les tâches quotidiennes, la mobilité ou la puissance de calcul.">111
                    <span style="font-size: 15px; color: white; margin-left: 3px;">PC et Tablettes</span></a></div>
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
<script>
  $ (function (){
    $('a').tooltip({
      placement:'bottom', trigger:'click'
    })
  })
</script>  
      

      
@endsection
