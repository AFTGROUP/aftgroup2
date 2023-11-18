@extends('layouts.devis')

@section('styles')
    <style>
        .bannerSiteInternet {

            width: 100%;
            height: 304px;
            object-fit: cover;
            background: linear-gradient(0deg, rgba(52, 97, 171, 0.88), rgba(52, 97, 171, 0.88)), url('{{ asset('assets/img/f3.jpg') }}');

        }

        @media screen and (max-width:767px) {

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
    <form id="myForm" method="POST" action="{{ route('siteVitrine_choice') }}">
        @csrf

        <section class="container box-question mt-5 p-5 " id="section1">
            <h3 class="quiz0">QUESTION 1 sur 11</h3>

            <div class="form-group">
                <label class="type_site"><b>Quel type de site vitrine souhaitez-vous ?</b></label>
                <div class="custom-control custom-radio choice mt-4">
                    <input class="custom-control-input " type="radio" name="type_site" id="mesureA" value="Entièrement sur mesure"
                        required>
                    <label class="custom-control-label" for="mesureA">Entièrement sur mesure</label>
                </div>
                <div class="custom-control custom-radio choice mt-4">
                    <input class="custom-control-input" type="radio" name="type_site" id="optionB" value="Template"
                        required>
                    <label class="custom-control-label" for="templateB">Template</label>
                </div>
                <div class="custom-control custom-radio choice mt-4">
                    <input class="custom-control-input" type="radio" name="type_site" id="PersonnalisationC"
                        value="Personnalisation du template" required>
                    <label class="custom-control-label" for="PersonnalisationB">Personnalisation du template</label>
                </div>

            </div>
            <br><br>
            <div class="mb-5 d-flex justify-content-end">
                <button type="button" type="button" class="suivant ml-auto p-2 w-25" onclick="nextSection(2)"> <span
                        class="text-white">Suivant</span>
                </button>

            </div>

        </section>
        <section class="container box-question mt-5 p-5 " id="section2" style="display: none;">
            <h3 class="quiz0">QUESTION 2 sur 11</h3>

            <div class="form-group">
                <label class="type_site"><b>Souhaitez vous avoir une maquette ?</b></label>
                <div class="custom-control custom-radio choice mt-4">
                    <input class="custom-control-input" type="radio" name="maquette" id="maquetteA" value="oui">
                    <label class="custom-control-label" for="optionA">Oui</label>
                </div>
                <div class="custom-control custom-radio choice mt-4">
                    <input class="custom-control-input" type="radio" name="maquette" id="maquetteB" value="non">
                    <label class="custom-control-label" for="maquetteB">Non</label>
                </div>

            </div>
            <br><br>

            <div class="mb-5 d-flex justify-content-between">
                <button type="button" class="retour ml-auto p-2 w-25" onclick="previousSection(1)"> <span
                        class="text-black">
                        Retour
                    </span> </button>
                <button type="button" class="suivant ml-auto p-2 w-25" onclick="nextSection(3)">Suivant </button>

            </div>

        </section>
        <section class="container box-question mt-5 p-5 " id="section3" style="display: none;">
            <h3 class="quiz0">QUESTION 3 sur 11</h3>

            <div class="form-group">
                <label class="type_site"><b>Nombre de pages ?</b></label>
                <div class="custom-control custom-radio  mt-4">
                    {{-- <input class="custom-control-input" type="radio" name="redaction_contenue" id="optionA" value="oui">
                <label class="custom-control-label" for="optionA">Oui</label> --}}
                    @php
                        $i = 0;
                    @endphp
                    <select class=" choice" name="nombre_pages" id="nombre_pages">
                        <option class="vitrine" value="1"> 1 page : Accueil seul</option>
                        @for ($i = 2; $i <= 15; $i++)
                            <option class="vitrine" value="{{ $i }}"> {{ $i }} pages </option>
                        @endfor
                    </select>
                </div>

            </div>
            <br><br>
            <div class="mb-5 d-flex justify-content-between">
                <button type="button" class="retour ml-auto p-2 w-25" onclick="previousSection(2)"> <span
                        class="text-black">
                        Retour
                    </span> </button>
                <button type="button" class="suivant ml-auto p-2 w-25" onclick="nextSection(4)">Suivant </button>

            </div>


        </section>
        <section class="container box-question mt-5 p-5 " id="section4" style="display: none;">
            <h3 class="quiz0">QUESTION 4 sur 11</h3>

            <div class="form-group">
                <label class="type_site"><b>Souhaitez vous une page actualité ?</b></label>
                <div class="custom-control custom-radio choice mt-4">
                    <input class="custom-control-input " type="radio" name="actualite" id="actualiteA"
                        value="oui">
                    <label class="custom-control-label" for="actualiteA">Oui</label>
                </div>
                <div class="custom-control custom-radio choice mt-4">
                    <input class="custom-control-input" type="radio" name="actualite" id="actualiteB" value="non">
                    <label class="custom-control-label" for="actualiteB">Non</label>
                </div>

            </div>
            <br><br>
            <div class="mb-5 d-flex justify-content-between">
                <button type="button" class="retour ml-auto p-2 w-25" onclick="previousSection(3)"> <span
                        class="text-black">
                        Retour
                    </span> </button>
                <button type="button" class="suivant ml-auto p-2 w-25" onclick="nextSection(5)">Suivant </button>

            </div>

        </section>
        <section class="container box-question mt-5 p-5 " id="section5" style="display: none;">
            <h3 class="quiz0">QUESTION 5 sur 11</h3>

            <div class="form-group">
                <label class="type_site"><b>Optimisation multi-éécrans : Responsive Design ?</b></label>
                <div class="custom-control custom-radio choice mt-4">
                    <input class="custom-control-input" type="radio" name="responsive_design" id="responsive_designA"
                        value="oui">
                    <label class="custom-control-label" for="responsive_designA">Oui
                        .</label>
                </div>
                <div class="custom-control custom-radio choice mt-4">
                    <input class="custom-control-input" type="radio" name="responsive_design" id="responsive_designB"
                        value="non">
                    <label class="custom-control-label" for="responsive_designB">Non</label>
                </div>

            </div>
            <br><br>
            <div class="mb-5 d-flex justify-content-between">
                <button type="button" class="retour ml-auto p-2 w-25" onclick="previousSection(4)"> <span
                        class="text-black">
                        Retour
                    </span> </button>
                <button type="button" class="suivant ml-auto p-2 w-25" onclick="nextSection(6)">Suivant </button>

            </div>


        </section>

        <section class="container box-question mt-5 p-5 " id="section6" style="display: none;">
            <h3 class="quiz0">QUESTION 6 sur 11</h3>

            <div class="form-group">
                <label class="type_site"><b>Optimisation au référencement naturel ?</b></label>
                <div class="custom-control custom-radio choice mt-4">
                    <input class="custom-control-input" type="radio" name="reference_naturel" id="reference_naturelA"
                        value="oui">
                    <label class="custom-control-label" for="refrence_naturelA">Oui
                        .</label>
                </div>
                <div class="custom-control custom-radio choice mt-4">
                    <input class="custom-control-input" type="radio" name="reference_naturel" id="reference_naturelB"
                        value="non">
                    <label class="custom-control-label" for="refrence_naturelB">Non</label>
                </div>

            </div>
            <br><br>
            <div class="mb-5 d-flex justify-content-between">
                <button type="button" class="retour ml-auto p-2 w-25" onclick="previousSection(5)"> <span
                        class="text-black">
                        Retour
                    </span> </button>
                <button type="button" class="suivant ml-auto p-2 w-25" onclick="nextSection(7)">Suivant </button>

            </div>


        </section>

        <section class="container box-question mt-5 p-5 " id="section7" style="display: none;">
            <h3 class="quiz0">QUESTION 7 sur 11</h3>

            <div class="form-group">
                <label class="type_site"><b>Faut-il prévoir de la rédaction de contenue ?</b></label>
                <div class="custom-control custom-radio choice mt-4">
                    <input class="custom-control-input" type="radio" name="redaction_contenue"
                        id="redaction_contenueA" value="oui">
                    <label class="custom-control-label" for="redaction_contenueA">Oui
                        .</label>
                </div>
                <div class="custom-control custom-radio choice mt-4">
                    <input class="custom-control-input" type="radio" name="redaction_contenue"
                        id="redaction_contenueB" value="non">
                    <label class="custom-control-label" for="redaction_contenueB">Non</label>
                </div>

                <div class="custom-control custom-radio choice mt-4">
                    <input class="custom-control-input" type="radio" name="redaction_contenue"
                        id="redaction_contenueC" value="non">
                    <label class="custom-control-label" for="redaction_contenueC">Tout sera fourni</label>
                </div>

            </div>
            <br><br>
            <div class="mb-5 d-flex justify-content-between">
                <button type="button" class="retour ml-auto p-2 w-25" onclick="previousSection(6)"> <span
                        class="text-black">
                        Retour
                    </span> </button>
                <button type="button" class="suivant ml-auto p-2 w-25" onclick="nextSection(8)">Suivant </button>

            </div>


        </section>

        <section class="container box-question mt-5 p-5 " id="section8" style="display: none;">
            <h3 class="quiz0">QUESTION 8 sur 11</h3>

            <div class="form-group">
                <label class="type_site"><b>Possedez vous déjà un logo ?</b></label>
                <div class="custom-control custom-radio choice mt-4">
                    <input class="custom-control-input" type="radio" name="logo" id="logoA" value="oui">
                    <label class="custom-control-label" for="logoA">Oui
                        .</label>
                </div>
                <div class="custom-control custom-radio choice mt-4">
                    <input class="custom-control-input" type="radio" name="logo" id="logoB" value="non">
                    <label class="custom-control-label" for="logoB">Non</label>
                </div>

            </div>
            <br><br>
            <div class="mb-5 d-flex justify-content-between">
                <button type="button" class="retour ml-auto p-2 w-25" onclick="previousSection(7)"> <span
                        class="text-black">
                        Retour
                    </span> </button>
                <button type="button" class="suivant ml-auto p-2 w-25" onclick="nextSection(9)">Suivant </button>

            </div>


        </section>

        <section class="container box-question mt-5 p-5 " id="section9" style="display: none;">
            <h3 class="quiz0">QUESTION 9 sur 11</h3>

            <div class="form-group">
                <label class="type_site"><b>Souhaitez-vous intégrer un ou des modules multimédias ?</b></label>
                <div class="custom-control custom-radio choice mt-4">
                    <input class="custom-control-input" type="radio" name="multimedia" id="multimediaA"
                        value="oui">
                    <label class="custom-control-label" for="multimediaA">Oui
                        .</label>
                </div>
                <div class="custom-control custom-radio choice mt-4">
                    <input class="custom-control-input" type="radio" name="multimedia" id="multimediaB"
                        value="non">
                    <label class="custom-control-label" for="multimediaB">Non</label>
                </div>

            </div>
            <br><br>
            <div class="mb-5 d-flex justify-content-between">
                <button type="button" class="retour ml-auto p-2 w-25" onclick="previousSection(8)"> <span
                        class="text-black">
                        Retour
                    </span> </button>
                <button type="button" class="suivant ml-auto p-2 w-25" onclick="nextSection(10)">Suivant </button>

            </div>


        </section>

        <section class="container box-question mt-5 p-5 " id="section10" style="display: none;">
            <h3 class="quiz0">QUESTION 10 sur 11</h3>

            <div class="form-group">
                <label class="type_site"><b> Possédez-vous déjà un nom de domaine pour votre site ?</b></label>
                <div class="custom-control custom-radio choice mt-4">
                    <input class="custom-control-input" type="radio" name="domaine" id=domaineA" value="oui">
                    <label class="custom-control-label" for="domaineA">Oui
                        .</label>
                </div>
                <div class="custom-control custom-radio choice mt-4">
                    <input class="custom-control-input" type="radio" name="domaine" id=domaineB" value="non">
                    <label class="custom-control-label" for="domaineB">Non</label>
                </div>

            </div>
            <br><br>
            <div class="mb-5 d-flex justify-content-between">
                <button type="button" class="retour ml-auto p-2 w-25" onclick="previousSection(9)"> <span
                        class="text-black">
                        Retour
                    </span> </button>
                <button type="button" class="suivant ml-auto p-2 w-25" onclick="nextSection(11)">Suivant </button>

            </div>


        </section>

        <section class="container box-question mt-5 p-5 " id="section11" style="display: none;">
            <h3 class="quiz0">QUESTION 11 sur 11</h3>

            <div class="form-group">
                <label class="type_site"><b>Possédez-vous déjà un hébergement pour votre site ?</b></label>
                <div class="custom-control custom-radio choice mt-4">
                    <input class="custom-control-input" type="radio" name="hebergement" id="hebergementA"
                        value="oui">
                    <label class="custom-control-label" for="hebergementA">Oui
                        .</label>
                </div>
                <div class="custom-control custom-radio choice mt-4">
                    <input class="custom-control-input" type="radio" name="hebergement" id="hebergementB"
                        value="non">
                    <label class="custom-control-label" for="hebergementB">Non</label>
                </div>

            </div>
            <br><br>



            <div class="mb-5 d-flex justify-content-between">
                <button type="button" class="retour ml-auto p-2 w-25" onclick="previousSection(10)"><span
                        class="text-black">
                        Retour</span> </button>

                <button class="suivant ml-auto p-2 w-25" onclick="showSummary()"> <span class="text-white">
                        Terminer</span> </button>

            </div>

        </section>

    </form>
    <pre>







  </pre>


    </section>

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
            xhr.open('POST', '{{ route('siteVitrine_choice') }}', true);
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
