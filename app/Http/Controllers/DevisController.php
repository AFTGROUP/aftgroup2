<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevisController extends Controller
{
    //

    public function index()
    {

        return view('devis');
    }

    public function question0(Request $request)
    {
        $data = $request->all();

        return view('devis-question0', compact('data'));
    }


    public function site_e_commerce()
    {

        return view('e_commerce');
    }

    public function logiciel()
    {
        return view('logiciel');
    }

    public function site_vitrine()
    {
        return view('site_vitrine');
    }

    public function estimationSiteVitrine()
    {
        return view('estimationSiteVitrine');
    }

    public function estimationSiteEcommmerce()
    {
        return view('estimationSiteEcommerce');
    }

    public function siteEcommerce_choice(Request $request)
    {
        // Récupérez les données du formulaire
        $formData = $request->all();

        // Type de site e-commerce
        $prestashop = 150000;
        $personnalise = 200000;

        // Logo
        $logo = 50000;

        // Rédaction de contenu
        $redaction = 30000;

        // Optimisation du référencement naturel
        $seo = 25000;

        $type_site = 0;
        $isLogo = 0;
        $isRedaction = 0;
        $isSeo = 0;


        // Estimation
        if(isset($formData['type_site'])){
            $type_site = $formData['type_site'] == 'Personnalisé' ? $personnalise : $prestashop;
        }

        if(isset($formData['logo'])){
            $isLogo = $formData['logo'] == 'oui' ? $logo : 0;
        }


        if(isset($formData['redaction_contenue'])){
            $isRedaction = $formData['redaction_contenue'] == 'oui' ? $redaction : 0;
        }


        if(isset($formData['referencement'])){
            $isSeo = $formData['referencement'] == 'oui' ? $seo : 0;
        }

        $estimation = $type_site + $isLogo + $isRedaction + $isSeo;

      return view('estimationSiteEcommerce', compact('formData', 'estimation'));


    }

    public function siteVitrine_Vitrine(Request $request){
        $formData = $request->all();

      //  dd($formData);
      //Types sites
      $mesure = 175000;
      $template = 100000;
      $templatePersonnalisation = 150000;

         //maquette
         $maquette = 50000;

     //Nombre de pages
       $nb_price = 0;
       if ($nombreDePages >= 1 && $nombreDePages <= 5) {
        $nb_price = 0;
    } elseif ($nombreDePages == 6) {
        $nb_price = 10000;
    } elseif ($nombreDePages == 7) {
        $nb_price = 20000;
    } elseif ($nombreDePages == 8) {
        $nb_price = 30000;
    } elseif ($nombreDePages == 9) {
        $nb_price = 40000;
    }
    elseif ($nombreDePages == 10) {
        $nb_price = 50000;
    }
    else {
        $nb_price = 60000;
    }

    }

}
