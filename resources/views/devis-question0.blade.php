@extends('layouts.app')


@section('styles')
    <style>
        .bannerSiteInternet {

            width: 100%;
            height: 304px;

            background: linear-gradient(0deg, rgba(52, 97, 171, 0.88), rgba(52, 97, 171, 0.88)), url('{{ asset('assets/img/f3.jpg') }}');

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
        <h3 id="quiz0">QUESTION 0</h3>

        <div class="form-group">
            <label id="type_site"><b>Quel type de site internet souhaitez-vous ?</b></label>
            <div class="custom-control custom-radio choice mt-4">
                <input class="custom-control-input vitrine " type="radio" name="choice" id="choiceA" value="site_vitrine">
                <label class="custom-control-label" for="optionA">Site vitrine</label>
            </div>
            <div class="custom-control custom-radio choice mt-4">
                <input class="custom-control-input e-commerce" type="radio" name="choice" id="choiceB" value="e-commerce">
                <label class="custom-control-label" for="optionB">Site e-commerce</label>
            </div>
            <div class="custom-control custom-radio choice mt-4">
                <input class="custom-control-input logiciel" type="radio" name="choice" id="choiceC" value="logiciel">
                <label class="custom-control-label" for="optionC">Logiciel / Mobile</label>
            </div>
        </div>
        <br><br>
        <div class="mb-5 d-flex justify-content-end">
            <button class="btn btn-primary ml-auto p-2 w-25 suivant" onclick="redirectToSelectedRoute()">Suivant </button>

        </div>
    </div>

<pre>








</pre>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function redirectToSelectedRoute() {
            var selectedChoice = $("input[name='choice']:checked").val();

            // Define routes for each choice
            var routeMapping = {
                'site_vitrine': '{{ route('site_vitrine') }}',
                'e-commerce': '{{ route('site_e_commerce') }}',
                'logiciel': '{{ route('logiciel') }}'
            };

            // Get the route based on the selected choice
            var selectedRoute = routeMapping[selectedChoice];

            // Redirect to the selected route
            window.location.href = selectedRoute;
        }
    </script>
@endsection
