@extends('layouts.app')

@section('styles')
    <style>
        .bannerSiteInternet {

            width: 100%;
            height: 304px;

            background: linear-gradient(0deg, rgba(52, 97, 171, 0.88), rgba(52, 97, 171, 0.88)), url('{{ asset('assets/img/f3.jpg') }}');

        }

        .texte {

            width: 882px;
            height: 156px;


            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 39px;
            /* or 244% */
            text-align: center;
            letter-spacing: -0.656526px;

            color: #000000;


        }

        .contact {
            background: #3461AB;
            border: 2px solid #3461AB;
            backdrop-filter: blur(1px);

            border-radius: 5px;

        }

        .contact span {
            /* Get Beta Access */

          
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 600;
            font-size: 16px;
            line-height: 24px;
            /* identical to box height */
            text-align: center;
            letter-spacing: -0.500211px;

            color: #FFFFFF;


        }
    </style>
@endsection

@section('content')
    <div class="bannerSiteInternet">
        <div class="content">
            <h3 class="text-light text-center site_internet">Quel prix pour un site internet professionnel ?</h3>
        </div>
    </div>
    <div>
        <div class="logiciel_polygones"> </div>
        <div id="logiciel_polygone1"></div>
        <div id="logiciel_polygone2"></div>
    </div>


    <section class="container" id="devis">
        <div class=" rounded-3 py-5 px-3 px-sm-4 px-lg-0">
            <div class="row justify-content-center align-items-center pt-1 pb-2 ">
                <div class="col-xl-7 col-lg-10 col-md-6 mb-4 pb-3 mb-md-0 pb-md-0 ">



                    <p class="texte">PAvez-vous le projet de renforcer
                        l&apos;efficacité opérationnelle de votre
                        entreprise, de développer un logiciel de gestion de qualité ou une
                        application novatrice ?
                        L&apos;équipe de AFT GROUP est prête à transformer vos besoins en solution
                        numérique sur mesure. Parlez-nous de votre vision ou projet en toute
                        sécurité.</p>

                    <div class="mb-3 d-flex justify-content-center align-items-center">

                        <button type="submit" class="contact  "><span>Contactez nous</span></button>
                    </div>

                </div>
    </section>
    <pre>



    </pre>
@endsection
