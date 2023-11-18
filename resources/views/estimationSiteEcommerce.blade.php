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



    <section class="container box-question mt-5 recap p-5">
        <h6 class="quiz0">Recapitulatif</h6>

        <p class="type_site">Estimation tarification pour la création de site e-commerce </p>
        <div class="recap-list px-4">
            <table class="table px-4">
                <tbody>
                    <tr>
                        <td> Quel type de site e-commerce souhaitez vous ?</td>
                        <td> {{ $formData['type_site'] ?? '' }} </td>
                    </tr>
                    <tr>
                        <td>Possédez vous déjà un logo ?</td>
                        <td> {{ $formData['logo'] ?? '' }} </td>
                    </tr>

                    <tr>
                        <td>Faut-il prévoir de la rédaction de contenue ?</td>
                        <td> {{ $formData['redaction_contenue'] ?? '' }} </td>
                    </tr>

                    <tr>
                        <td>Optimisation du référence naturel</td>
                        <td>{{ $formData['referencement'] ?? '' }} </td>
                    </tr>
                    <tr>
                        <td>Choix du système de paiement en ligne</td>
                        <td> {{ $formData['moyen_paiement'] ?? '' }} </td>
                    </tr>


                    <!-- Ajoutez autant de lignes que nécessaire -->
                </tbody>
            </table>
            <div style="text-align: right;" class="ht"> TOTAL HT : {{ $estimation }} euros</div>
        </div>

    </section>





    <pre>






    </pre>
@endsection
