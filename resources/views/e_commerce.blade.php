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


    <form id="myForm" method="POST" action="{{ route('siteEcommerce_choice') }}">
        @csrf


        <section class="container box-question p-5 suivant" id="section1">
            <h3>QUESTION 1 sur 5</h3>

            <div class="form-group">
                <label><b>Quel type de site e-commerce souhaitez-vous ?</b></label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="type_site" id="type_site" value="Prestashop">
                    <label class="custom-control-label" for="type_site">Prestashop</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="type_site" id="Personnalise"
                        value="Personnalisé">
                    <label class="custom-control-label" for="Personnalise">Personnalisé</label>
                </div>

            </div>
            <br><br>
            <div class="mb-5 d-flex justify-content-end">
                <button type="button" class="btn btn-primary ml-auto p-2 w-25" onclick="nextSection(2)">Suivant </button>

            </div>

        </section>
        <section class="container box-question p-5 suivant" id="section2" style="display: none;">
            <h3>QUESTION 2 sur 5</h3>

            <div class="form-group">
                <label><b>Posséder vous déjà un logo ?</b></label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="logo" id="logoA" value="oui">
                    <label class="custom-control-label" for="logoA">Oui</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="logo" id="logoB" value="non">
                    <label class="custom-control-label" for="logoB">Non</label>
                </div>

            </div>
            <br><br>
            <div class="mb-5 d-flex">

                <button type="button" class="btn btn-primary ml-auto p-2 w-25" onclick="previousSection(1)">Retour
                </button>

            </div>
            <div class="mb-5 d-flex justify-content-end">

                <button type="button" class="btn btn-primary ml-auto p-2 w-25" onclick="nextSection(3)">Suivant </button>

            </div>

        </section>
        <section class="container box-question p-5 suivant" id="section3" style="display: none;">
            <h3>QUESTION 3 sur 5</h3>

            <div class="form-group">
                <label><b>Faut-il prévoir de la rédaction de contenue ?</b></label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="redaction_contenue" id="redaction_contenueA"
                        value="oui">
                    <label class="custom-control-label" for="redaction_contenueA">Oui</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="redaction_contenue" id="redaction_contenueB"
                        value="non">
                    <label class="custom-control-label" for="redaction_contenueB">Non</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="redaction_contenue" id="redaction_contenueC"
                        value="tout_sera_fournie">
                    <label class="custom-control-label" for="redaction_contenueC">Tout sera fournit</label>
                </div>
            </div>
            <br><br>
            <div class="mb-5 d-flex">

                <button type="button" class="btn btn-primary ml-auto p-2 w-25" onclick="previousSection(2)">Retour
                </button>

            </div>
            <div class="mb-5 d-flex justify-content-end">

                <button type="button" class="btn btn-primary ml-auto p-2 w-25" onclick="nextSection(4)">Suivant </button>

            </div>

        </section>
        <section class="container box-question p-5 suivant" id="section4" style="display: none;">
            <h3>QUESTION 4 sur 5</h3>

            <div class="form-group">
                <label><b>Optimisation au référencement ?</b></label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="referencement" id="referencementA"
                        value="oui">
                    <label class="custom-control-label" for="referencementA">Oui</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="referencement" id="referencementB"
                        value="non">
                    <label class="custom-control-label" for="referencementB">Non</label>
                </div>

            </div>
            <br><br>
            <div class="mb-5 d-flex">

                <button type="button" class="btn btn-primary ml-auto p-2 w-25" onclick="previousSection(3)">Retour
                </button>

            </div>
            <div class="mb-5 d-flex justify-content-end">

                <button type="button" class="btn btn-primary ml-auto p-2 w-25" onclick="nextSection(5)">Suivant
                </button>

            </div>

        </section>
        <section class="container box-question p-5 suivant" id="section5" style="display: none;">
            <h3>QUESTION 5 sur 5</h3>

            <div class="form-group">
                <label><b>Choix du système de payement en ligne ?</b></label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="moyen_paiement" id="moyen_paiementA"
                        value="Portefeuille électronique : Mobile Money, Moov Money, Celtiis Cash . . .">
                    <label class="custom-control-label" for="moyen_paiementA">Portefeuille électronique : Mobile Money,
                        Moov
                        Money, Celtiis Cash . . .</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" type="radio" name="moyen_paiement" id="moyen_paiementB"
                        value="Carte bancaire + Portefeuille">
                    <label class="custom-control-label" for="moyen_paiementB">Carte bancaire + Portefeuille
                        éléctronique</label>
                </div>

            </div>
            <br><br>
            <div class="mb-5 d-flex">

                <button type="button" class="btn btn-primary ml-auto p-2 w-25" onclick="previousSection(4)">Retour
                </button>

            </div>
            <div class="mb-5 d-flex justify-content-end">

                <button  class="btn btn-primary ml-auto p-2 w-25" onclick="showSummary()"> Terminer
                </button>

            </div>

        </section>

    </form>


    <script>

        let formData = {};
        let currentSection = 1;

        function nextSection(sectionNumber) {
            currentSection = sectionNumber;

            document.getElementById('section' + sectionNumber).style.display = 'block';
            document.getElementById('section' + (sectionNumber - 1)).style.display = 'none';
        }

        function previousSection(sectionNumber) {

            document.getElementById('section' + sectionNumber).style.display = 'block';
            document.getElementById('section' + currentSection).style.display = 'none';
            currentSection = sectionNumber;
        }

        function showSummary() {
            const form = document.getElementById('myForm');

            let xhr = new XMLHttpRequest();
            xhr.open('POST', '{{ route('siteEcommerce_choice') }}', true);
            xhr.setRequestHeader('Content-Type', 'application/json');
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {

                    console.log(xhr.responseText);
                }
            };

            let jsonData = JSON.stringify(formData);

            xhr.send(jsonData);
        }
    </script>
@endsection
