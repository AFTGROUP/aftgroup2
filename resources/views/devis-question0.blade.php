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



    <div class="container box-question p-5 mt-5">
        <h3 class="quiz0">QUESTION 0</h3>

        <div class="form-group">
            <label class="type_site"><b>Quel type de site internet souhaitez-vous ?</b></label>
            <div class="custom-control custom-radio choice mt-4">
                <input class="custom-control-input vitrine " type="radio" name="choice" id="choiceA"
                    value="site_vitrine">
                <label class="custom-control-label" for="optionA">Site vitrine</label>
            </div>
            <div class="custom-control custom-radio choice mt-4">
                <input class="custom-control-input e-commerce" type="radio" name="choice" id="choiceB"
                    value="e-commerce">
                <label class="custom-control-label" for="optionB">Site e-commerce</label>
            </div>
            <div class="custom-control custom-radio choice mt-4">
                <input class="custom-control-input logiciel" type="radio" name="choice" id="choiceC" value="logiciel">
                <label class="custom-control-label" for="optionC">Logiciel / Mobile</label>
            </div>
        </div>
        <br><br>
        <div class="mb-2 text-danger custom-control-label" id="error-message"></div>

        <div class="mb-5 d-flex justify-content-end">
            <button class=" ml-auto p-2 w-25 suivant" onclick="redirectToSelectedRoute()"> <span
                    class="text-white">Suivant</span> </button>

        </div>
    </div>

    <pre>








</pre>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function redirectToSelectedRoute() {
            var selectedChoice = $("input[name='choice']:checked").val();


            var routeMapping = {
                'site_vitrine': '{{ route('site_vitrine') }}',
                'e-commerce': '{{ route('site_e_commerce') }}',
                'logiciel': '{{ route('logiciel') }}'
            };


            if (!selectedChoice) {
                $("#error-message").text("! Veuillez choisir une option avant de continuer.");
                return;
            }


            var selectedRoute = routeMapping[selectedChoice];


            window.location.href = selectedRoute;
        }
    </script>
@endsection
