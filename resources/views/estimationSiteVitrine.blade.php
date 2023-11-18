@extends('layouts.devis')


@section('content')

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


    <section class="container  box-question mt-5 recap p-5">
        <h6 class="quiz0">Recapitulatif</h6>

        <p class="type_site">Estimation tarification pour la creation de site vitrine </p>
        <div class="recap-list px-4">
            <table class="table px-4">
                <tbody>
                    <tr>
                        <td> Quel type de site vitrine souhaitez vous ?</td>
                        <td> {{ $formData['type_site'] ?? '' }} </td>
                    </tr>
                    <tr>
                        <td>Souhaitez vous avoir une maquette ?</td>
                        <td> {{ $formData['maquette'] ?? '' }} </td>
                    </tr>

                    <tr>
                        <td>Nombre de pages ?</td>
                        <td> {{ $formData['nombre_pages'] ?? '' }} </td>
                    </tr>

                    <tr>
                        <td>Souhaitez vous avoir une page d'actualités ?</td>
                        <td> {{ $formData['actualite'] ?? '' }} </td>
                    </tr>
                    <tr>
                        <td>Optimisation multi-écran : Responsive design ?</td>
                        <td>{{ $formData['responsive_design'] ?? '' }} </td>
                    </tr>

                    <tr>
                        <td>Optimisation au référence naturel ?</td>
                        <td> {{ $formData['reference_naturel'] ?? '' }} </td>
                    </tr>
                    <tr>
                        <td>Faut-il prévoir de la redation de contenue ?</td>
                        <td> {{ $formData['redaction_contenue'] ?? '' }} </td>
                    </tr>

                    <tr>
                        <td>Possedez vous déjà un logo ?</td>
                        <td>{{ $formData['logo'] ?? '' }} </td>
                    </tr>

                    <tr>
                        <td>Souhaitez-vous intégre un ou des modules multimédia ?</td>
                        <td>{{ $formData['multimedia'] ?? '' }} </td>
                    </tr>

                    <tr>
                        <td>Possédez vous déja un nom de domaine pour votre site ? </td>
                        <td>{{ $formData['domaine'] ?? '' }} </td>
                    </tr>

                    <tr>
                        <td>Possedez vous déja un hebergement pour votre site ?</td>
                        <td>{{ $formData['hebergement'] ?? '' }} </td>
                    </tr>


                    <!-- Ajoutez autant de lignes que nécessaire -->
                </tbody>
            </table>
            <div style="text-align: right;"> TOTAL HT : {{ $estimation }} euros</div>
        </div>

    </section>





    <pre>






    </pre>
@endsection
