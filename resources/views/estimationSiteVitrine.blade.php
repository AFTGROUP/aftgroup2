@extends('layouts.devis')


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

        <p>Estimation tarification pour la creation de site vitrine </p>
        <div class="recap-list px-4">
        <table class="table px-4">
            <tbody>
                <tr>
                    <td> Quel type de site vitrine souhaitez vous ?</td>
                    <td>Templates</td>
                </tr>
                <tr>
                    <td>Souhaitez vous avoir une maquette</td>
                    <td>Oui</td>
                </tr>

                <tr>
                    <td>Nombre de page</td>
                    <td>5</td>
                </tr>

                <tr>
                    <td>Souhaitez vous a avoir une page d'actualites</td>
                    <td>Oui</td>
                </tr>
                <tr>
                    <td>Optimisation multi-ecran : Responsive design</td>
                    <td>Oui</td>
                </tr>

                <tr>
                    <td>Optimisation au reference naturel </td>
                    <td>Oui</td>
                </tr>
                <tr>
                    <td>Faut-il prevoir de la redation de contenue</td>
                    <td>Oui</td>
                </tr>

                <tr>
                    <td>Possedez vous deje un logo</td>
                    <td>Oui</td>
                </tr>

                <tr>
                    <td>Souhaitez-vous integre un ou des modules multimedia ?</td>
                    <td>Oui</td>
                </tr>

                <tr>
                    <td>Possedez vous deja un nom de domaine pour votre site </td>
                    <td>Oui</td>
                </tr>

                <tr>
                    <td>Possedez vous deja un hebergement pour votre site ?</td>
                    <td>Oui</td>
                </tr>


                <!-- Ajoutez autant de lignes que nécessaire -->
            </tbody>
        </table>
        <div style="text-align: right;"> TOTAL HT : 500 000 euros</div>
    </div>

    </section>





    <pre>






    </pre>





















@endsection
