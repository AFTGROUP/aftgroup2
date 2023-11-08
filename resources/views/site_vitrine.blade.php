@extends('layouts.app')

@section('content')
    <div class="banner">
        <div class="content">
            <h3 class="text-light text-center">Quel est le prix pour un site professionnel</h3>
        </div>
    </div>



    <style>
        /* Increase the font size and add padding to the label */
        .form-group label {
            font-size: 20px;
            padding: 12px;
        }

        /* Style the form-check containers (background, border, padding, and border-radius) */
        .form-group .custom-control {
            border: 0.5px solid rgba(255, 255, 255, 0.837);
            /* Adjust border width as needed */
            padding: 10px;
            background-color: white;
            border-radius: 30px;
            margin-bottom: 10px;
            /* Add spacing between options */
        }

        /* Style the radio input (padding and margin) */
        .form-group input[type='radio'] {
            margin-left: 10px;
            padding: 10px;
            height: 10px;
        }

        /* Style des boutons radio */
        .custom-control-input[type="radio"] {
            appearance: none;
            /* Supprime le style par défaut du navigateur */
            -webkit-appearance: none;
            /* Pour les navigateurs WebKit */
            -moz-appearance: none;
            /* Pour les navigateurs basés sur Gecko */
            width: 15px;
            /* Largeur du bouton radio */
            height: 5px;
            /* Hauteur du bouton radio */
            border: 1px solid blue;
            /* Couleur de la bordure */
            border-radius: 50%;
            /* Rend le bouton radio circulaire */
            background-color: #fff;
            /* Couleur de fond du bouton radio */
            margin-right: 2px;
            /* Marge à droite pour séparer les boutons */
            cursor: pointer;
            /* Curseur de type pointeur pour indiquer que le bouton est cliquable */
        }

        /* Style des boutons radio lorsqu'ils sont cochés */
        .custom-control-input[type="radio"]:checked {
            background-color: blue;
            /* Couleur de fond lorsque le bouton est coché */
        }

        /* Style des labels associés aux boutons radio */
        .custom-control-label {
            cursor: pointer;
            /* Curseur de type pointeur pour indiquer que le label est cliquable */
            margin-bottom: 5px;
            /* Marge en bas pour espacer les labels */
        }

        .box-question {
            box-shadow: 10px 10px 10px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 100%;
            border-radius: 10px;
        }

        .banner {
            background-image: url('assets/img/services/femme-travaillant-ordinateur.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            text-align: center;
            color: white;
            position: relative;
            /* Ajout de position relative */
        }

        .banner::before {
            content: '';
            position: absolute;
            /* Utilisation de position absolute pour le pseudo-élément */
            top: 0;
            width: 100%;
            left: 0;
            height: 100%;
            background-color: blue;
            opacity: 0.5;
            z-index: 1;
            /* Utilisation de z-index pour placer l'arrière-plan sous le contenu */
        }

        .banner .content {
            position: relative;
            /* Pour empiler le contenu sur l'arrière-plan */
            z-index: 1;
            /* Assurez-vous que le contenu est au premier plan */
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            text-align: center;
            /* Centrer le texte à l'intérieur de la div */
        }
    </style>

   
        <section class="container box-question p-5 " id="section1">
            <h3>QUESTION 1 sur 5</h3>

            <div class="form-group">
                <label><b>Quel type de site vitrine souhaitez-vous ?</b></label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="type_site" id="mesureA" value="mesure">
                    <label class="custom-control-label" for="mesureA">Entièrement sur mesure</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="type_site" id="optionB" value="template">
                    <label class="custom-control-label" for="templateB">Template</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="type_site" id="PersonnalisationC" value="Personnalisation">
                    <label class="custom-control-label" for="PersonnalisationB">Personnalisation du template</label>
                </div>

            </div>
            <br><br>
            <div class="mb-5 d-flex justify-content-end">
                <button class="btn btn-primary ml-auto p-2 w-25" onclick="nextSection(2)">Suivant </button>

            </div>

        </section>
        <section class="container box-question p-5 " id="section2" style="display: none;">
            <h3>QUESTION 2 sur 5</h3>

            <div class="form-group">
                <label><b>Souhaitez vous avoir une maquette ?</b></label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="maquette" id="maquetteA" value="oui">
                    <label class="custom-control-label" for="optionA">Oui</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="maquette" id="maquetteB" value="non">
                    <label class="custom-control-label" for="maquetteB">Non</label>
                </div>

            </div>
            <br><br>
            <div class="mb-5 d-flex">

                <button class="btn btn-primary ml-auto p-2 w-25" onclick="previousSection(1)">Retour </button>

            </div>
            <div class="mb-5 d-flex justify-content-end">

                <button class="btn btn-primary ml-auto p-2 w-25" onclick="nextSection(3)">Suivant </button>

            </div>

        </section>
        <section class="container box-question p-5 " id="section3" style="display: none;">
            <h3>QUESTION 3 sur 5</h3>

            <div class="form-group">
                <label><b>No,bre de pages ?</b></label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="redaction_contenue" id="optionA"
                        value="oui">
                    <label class="custom-control-label" for="optionA">Oui</label>
                </div>
            
            </div>
            <br><br>
            <div class="mb-5 d-flex">

                <button class="btn btn-primary ml-auto p-2 w-25" onclick="previousSection(2)">Retour </button>

            </div>
            <div class="mb-5 d-flex justify-content-end">

                <button class="btn btn-primary ml-auto p-2 w-25" onclick="nextSection(4)">Suivant </button>

            </div>

        </section>
        <section class="container box-question p-5 " id="section4" style="display: none;">
            <h3>QUESTION 4 sur 5</h3>

            <div class="form-group">
                <label><b>Souhaitez vous une page actualité ?</b></label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="actualite" id="actualiteA" value="oui">
                    <label class="custom-control-label" for="actualiteA">Oui</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="actualite" id="actualiteB"
                        value="non">
                    <label class="custom-control-label" for="actualiteB">Non</label>
                </div>

            </div>
            <br><br>
            <div class="mb-5 d-flex">

                <button class="btn btn-primary ml-auto p-2 w-25" onclick="previousSection(3)">Retour </button>

            </div>
            <div class="mb-5 d-flex justify-content-end">

                <button class="btn btn-primary ml-auto p-2 w-25" onclick="nextSection(5)">Suivant </button>

            </div>

        </section>
        <section class="container box-question p-5 " id="section5" style="display: none;">
            <h3>QUESTION 5 sur 5</h3>

            <div class="form-group">
                <label><b>Optimisation multi-éécrans : Responsive Design ?</b></label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="responsive_design" id="responsive_designA"
                        value="oui">
                    <label class="custom-control-label" for="responsive_designA">Oui
                     .</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="responsive_design" id="responsive_designB"
                        value="non">
                    <label class="custom-control-label" for="responsive_designB">Non</label>
                </div>

            </div>
            <br><br>
            <div class="mb-5 d-flex">

                <button class="btn btn-primary ml-auto p-2 w-25" onclick="previousSection(4)">Retour </button>

            </div>
            <div class="mb-5 d-flex justify-content-end">

                <button class="btn btn-primary ml-auto p-2 w-25" onclick="nextSection(6)"> Terminer </button>

            </div>

        </section>

        <section class="container box-question p-5 " id="section6" style="display: none;">
            <h3>QUESTION 6 sur 10</h3>

            <div class="form-group">
                <label><b>Optimisation au référencement naturel ?</b></label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="refrence_naturel" id="responsive_designA"
                        value="oui">
                    <label class="custom-control-label" for="refrence_naturelA">Oui
                     .</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="refrence_naturel" id="responsive_designB"
                        value="non">
                    <label class="custom-control-label" for="refrence_naturelB">Non</label>
                </div>

            </div>
            <br><br>
            <div class="mb-5 d-flex">

                <button class="btn btn-primary ml-auto p-2 w-25" onclick="previousSection(5)">Retour </button>

            </div>
            <div class="mb-5 d-flex justify-content-end">

                <button class="btn btn-primary ml-auto p-2 w-25" onclick="nextSection(7)">Retour </button>

            </div>

        </section>

        <section class="container box-question p-5 " id="section7" style="display: none;">
            <h3>QUESTION 7 sur 10</h3>

            <div class="form-group">
                <label><b>Faut-il prévoir de la rédaction de contenue ?</b></label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="redaction_contenue" id="responsive_designA"
                        value="oui">
                    <label class="custom-control-label" for="refrence_naturelA">Oui
                     .</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="refrence_naturel" id="responsive_designB"
                        value="non">
                    <label class="custom-control-label" for="refrence_naturelB">Non</label>
                </div>

                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="refrence_naturel" id="responsive_designB"
                        value="non">
                    <label class="custom-control-label" for="refrence_naturelB">Tout sera fourni</label>
                </div>

            </div>
            <br><br>
            <div class="mb-5 d-flex">

                <button class="btn btn-primary ml-auto p-2 w-25" onclick="previousSection(6)">Retour </button>

            </div>
            <div class="mb-5 d-flex justify-content-end">

                <button class="btn btn-primary ml-auto p-2 w-25" onclick="nextSection(8)">Retour </button>

            </div>

        </section>

        <section class="container box-question p-5 " id="section8" style="display: none;">
            <h3>QUESTION 8 sur 10</h3>

            <div class="form-group">
                <label><b>Possedez vous déjà un logo ?</b></label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="redaction_contenue" id="responsive_designA"
                        value="oui">
                    <label class="custom-control-label" for="refrence_naturelA">Oui
                     .</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="refrence_naturel" id="responsive_designB"
                        value="non">
                    <label class="custom-control-label" for="refrence_naturelB">Non</label>
                </div>

            </div>
            <br><br>
            <div class="mb-5 d-flex">

                <button class="btn btn-primary ml-auto p-2 w-25" onclick="previousSection(7)">Retour </button>

            </div>
            <div class="mb-5 d-flex justify-content-end">

                <button class="btn btn-primary ml-auto p-2 w-25" onclick="nextSection(9)">Retour </button>

            </div>

        </section>

        <section class="container box-question p-5 " id="section9" style="display: none;">
            <h3>QUESTION 9 sur 10</h3>

            <div class="form-group">
                <label><b>Souhaitez-vous intégrer un ou des modules multimédias ?</b></label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="redaction_contenue" id="responsive_designA"
                        value="oui">
                    <label class="custom-control-label" for="refrence_naturelA">Oui
                     .</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="refrence_naturel" id="responsive_designB"
                        value="non">
                    <label class="custom-control-label" for="refrence_naturelB">Non</label>
                </div>

            </div>
            <br><br>
            <div class="mb-5 d-flex">

                <button class="btn btn-primary ml-auto p-2 w-25" onclick="previousSection(8)">Retour </button>

            </div>
            <div class="mb-5 d-flex justify-content-end">

                <button class="btn btn-primary ml-auto p-2 w-25" onclick="nextSection(10)">Suivant</button>

            </div>

        </section>

        <section class="container box-question p-5 " id="section10" style="display: none;">
            <h3>QUESTION 10 sur 11</h3>

            <div class="form-group">
                <label><b> Possédez-vous déjà un nom de domaine pour votre site ?</b></label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="redaction_contenue" id="responsive_designA"
                        value="oui">
                    <label class="custom-control-label" for="refrence_naturelA">Oui
                     .</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="refrence_naturel" id="responsive_designB"
                        value="non">
                    <label class="custom-control-label" for="refrence_naturelB">Non</label>
                </div>

            </div>
            <br><br>
            <div class="mb-5 d-flex">

                <button class="btn btn-primary ml-auto p-2 w-25" onclick="previousSection(9)">Retour </button>

            </div>
            <div class="mb-5 d-flex justify-content-end">

                <button class="btn btn-primary ml-auto p-2 w-25" onclick="nextSection(11)">Suivant</button>

            </div>

        </section>
   
        <section class="container box-question p-5 " id="section11" style="display: none;">
            <h3>QUESTION 10 sur 11</h3>

            <div class="form-group">
                <label><b>Possédez-vous déjà un hébergement pour votre site ?</b></label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="redaction_contenue" id="responsive_designA"
                        value="oui">
                    <label class="custom-control-label" for="refrence_naturelA">Oui
                     .</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="refrence_naturel" id="responsive_designB"
                        value="non">
                    <label class="custom-control-label" for="refrence_naturelB">Non</label>
                </div>

            </div>
            <br><br>

            <div class="mb-5 d-flex">

                <button class="btn btn-primary ml-auto p-2 w-25" onclick="previousSection(10)">Retour </button>

            </div>
       
            <div class="mb-5 d-flex justify-content-end">

                <button class="btn btn-primary ml-auto p-2 w-25" onclick="showSummary()"> Terminer </button>

            </div>

        </section>

   
    <pre>

  </pre>


    </section>

    <script>
        let formData = {};
        let currentSection = 1;

        function nextSection(sectionNumber) {
            // Enregistrez les données de la section actuelle ici (formData) avant de passer à la suivante.
            currentSection = sectionNumber;
            // Affichez la section suivante et masquez la précédente.
            document.getElementById('section' + sectionNumber).style.display = 'block';
            document.getElementById('section' + (sectionNumber - 1)).style.display = 'none';
        }

        function previousSection(sectionNumber) {
            // Affichez la section précédente et masquez la section actuelle.
            document.getElementById('section' + sectionNumber).style.display = 'block';
            document.getElementById('section' + currentSection).style.display = 'none';
            currentSection = sectionNumber;
        }

        function showSummary() {
            // Enregistrez les données finales dans formData.
            // Affichez le résumé des données.
            document.getElementById('summaryData').textContent = JSON.stringify(formData);
            document.getElementById('summary').style.display = 'block';
        }
    </script>
@endsection