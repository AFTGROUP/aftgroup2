@extends('layouts.app')

@section('content')

<style>
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
    .recap{
        font-size: 26px;
    }

    </style>

<section class="banner">
        <div class="content">
            <h3 class="text-light text-center">Quel est le prix pour un site professionnel</h3>
        </div>
</section>


    <section class="container recap p-5" >
        <h6>Recapitulatif</h6>

        <p>Estimation tarification pour la creation de e-commerce </p>
        <div class="recap-list px-4">
        <table class="table px-4">
            <tbody>
                <tr>
                    <td> Quel type de site e-commerce souhaitez vous ?</td>
                    <td> {{ $formData['type_site'] }}  </td>
                </tr>
                <tr>
                    <td>SPossédez vous déjà un logo ?</td>
                    <td>  {{ $formData['logo'] }} </td>
                </tr>

                <tr>
                    <td>Faut-il prévoir de la rédaction de contenue ?</td>
                    <td> {{ $formData['redaction_contenue'] }}  </td>
                </tr>

                <tr>
                    <td>Optimisation du reference naturel</td>
                    <td>{{ $formData['referencement'] }} </td>
                </tr>
                <tr>
                    <td>Choix du système de paiement en ligne</td>
                    <td> {{ $formData['moyen_paiement'] }} </td>
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
