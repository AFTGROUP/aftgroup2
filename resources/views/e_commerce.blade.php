@extends('layouts.devis')

@section('styles')
<style>
    .bannerSiteInternet {

        width: 100%;
        height: 304px;
        object-fit: cover;
        background: linear-gradient(0deg, rgba(52, 97, 171, 0.88), rgba(52, 97, 171, 0.88)), url('{{ asset('assets/img/f3.jpg') }}');

    }

    @media screen and (max-width:767px){

        .bannerSiteInternet {
        background-size: contain;
background-repeat: no-repeat;
background-position: center center;
    }
}
</style>
@endsection

@section('content')
<div class="bannerSiteInternet">
    <div class="content">
        <h3 class="text-light text-center site_internet">Quel prix pour un site internet professionnel ?</h3>
    </div>
</div>



    <form id="myForm" method="POST" action="{{ route('siteEcommerce_choice') }}">
        @csrf


        <section class="container box-question p-5 mt-5" id="section1">
            <h3 class="quiz0" >QUESTION 1 sur 5</h3>

            <div class="form-group">
                <label class="type_site"><b>Quel type de site e-commerce souhaitez-vous ?</b></label>
                <div class="custom-control custom-radio choice mt-4">
                    <input class="custom-control-input " type="radio" name="type_site" id="prestashop" value="Prestashop">
                    <label class="custom-control-label " for="prestashop">Prestashop</label>
                </div>
                <div class="custom-control custom-radio choice mt-4">
                    <input class="custom-control-input" type="radio" name="type_site" id="Personnalise"
                        value="Personnalisé">
                    <label class="custom-control-label" for="Personnalise">Personnalisé</label>
                </div>

            </div>
            <br><br>
            <div class=" d-flex justify-content-end">
                <button type="button" class="suivant ml-auto p-2 w-25" onclick="nextSection(2)"> <span class="text-white">Suivant</span> </button>

            </div>

        </section>
        <section class="container box-question p-5 " id="section2" style="display: none;">
            <h3 class="quiz0">QUESTION 2 sur 5</h3>

            <div class="form-group">
                <label  class="type_site"><b>Posséder vous déjà un logo ?</b></label>
                <div class="custom-control custom-radio choice mt-4">
                    <input class="custom-control-input" type="radio" name="logo" id="logoA" value="oui">
                    <label class="custom-control-label" for="logoA">Oui</label>
                </div>
                <div class="custom-control custom-radio choice mt-4">
                    <input class="custom-control-input" type="radio" name="logo" id="logoB" value="non">
                    <label class="custom-control-label" for="logoB">Non</label>
                </div>

            </div>
            <br><br>

            <div class="mb-5 d-flex justify-content-between ">
                <button type="button" class=" ml-auto p-2 w-25 retour" onclick="previousSection(1)">
                    <span class="text-black">Retour</span>
                </button>
                <button type="button" class="suivant ml-auto p-2 w-25" onclick="nextSection(3)"><span class="text-white">Suivant</span> </button>

            </div>

        </section>
        <section class="container box-question p-5" id="section3" style="display: none;">
            <h3 class="quiz0">QUESTION 3 sur 5</h3>

            <div class="form-group">
                <label class="type_site"><b>Faut-il prévoir de la rédaction de contenue ?</b></label>
                <div class="custom-control custom-radio choice mt-4">
                    <input class="custom-control-input" type="radio" name="redaction_contenue" id="redaction_contenueA"
                        value="oui">
                    <label class="custom-control-label" for="redaction_contenueA">Oui</label>
                </div>
                <div class="custom-control custom-radio choice mt-4">
                    <input class="custom-control-input" type="radio" name="redaction_contenue" id="redaction_contenueB"
                        value="non">
                    <label class="custom-control-label" for="redaction_contenueB">Non</label>
                </div>
                <div class="custom-control custom-radio choice mt-4">
                    <input class="custom-control-input" type="radio" name="redaction_contenue" id="redaction_contenueC"
                        value="tout_sera_fournie">
                    <label class="custom-control-label" for="redaction_contenueC">Tout sera fournit</label>
                </div>
            </div>
            <br><br>

            <div class="mb-5 d-flex justify-content-between">
                <button type="button" class="retour ml-auto p-2 w-25" onclick="previousSection(2)"><span class="text-black">
                    Retour
                </span>
                </button>
                <button type="button" class="suivant ml-auto p-2 w-25" onclick="nextSection(4)"><span class="tetx-white">
                    Suivant
                </span> </button>

            </div>

        </section>
        <section class="container box-question p-5 " id="section4" style="display: none;">
            <h3 class="quiz0">QUESTION 4 sur 5</h3>

            <div class="form-group">
                <label class="type_site"><b>Optimisation au référencement ?</b></label>
                <div class="custom-control custom-radio choice mt-4">
                    <input class="custom-control-input" type="radio" name="referencement" id="referencementA"
                        value="oui">
                    <label class="custom-control-label" for="referencementA">Oui</label>
                </div>
                <div class="custom-control custom-radio choice mt-4">
                    <input class="custom-control-input" type="radio" name="referencement" id="referencementB"
                        value="non">
                    <label class="custom-control-label" for="referencementB">Non</label>
                </div>

            </div>
            <br><br>

            <div class="mb-5 d-flex justify-content-between">
                <button type="button" class="retour ml-auto p-2 w-25" onclick="previousSection(3)"> <span class="text-black">
                    Retour
                </span>
                </button>
                <button type="button" class="suivant ml-auto p-2 w-25" onclick="nextSection(5)"><span class="tetx-white">
                    Suivant
                </span>
                </button>

            </div>

        </section>
        <section class="container box-question p-5 " id="section5" style="display: none;">
            <h3 class="quiz0">QUESTION 5 sur 5</h3>

            <div class="form-group">
                <label class="type_site"><b>Choix du système de payement en ligne ?</b></label>
                <div class="custom-control custom-radio choice mt-4">
                    <input class="custom-control-input" type="radio" name="moyen_paiement" id="moyen_paiementA"
                        value="Portefeuille électronique : Mobile Money, Moov Money, Celtiis Cash . . .">
                    <label class="custom-control-label" for="moyen_paiementA">Portefeuille électronique : Mobile Money,
                        Moov
                        Money, Celtiis Cash . . .</label>
                </div>
                <div class="custom-control custom-radio choice mt-4">
                    <input class="custom-control-input" type="radio" name="moyen_paiement" id="moyen_paiementB"
                        value="Carte bancaire + Portefeuille">
                    <label class="custom-control-label" for="moyen_paiementB">Carte bancaire + Portefeuille
                        éléctronique</label>
                </div>

            </div>
            <br><br>

            <div class="mb-5 d-flex justify-content-between">

                <button type="button" class="retour ml-auto p-2 w-25" onclick="previousSection(4)">
                    <span class="text-black">
                        Retour
                    </span>
                </button>
                <button  class="suivant ml-auto p-2 w-25" onclick="showSummary()">
                    <span class="text-black">
                        Terminer
                    </span>
                </button>

            </div>

        </section>

    </form>

<pre>







</pre>
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
