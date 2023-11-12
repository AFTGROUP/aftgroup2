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

        // Estimation
        $type_site = $formData['type_site'] == 'Personnalisé' ? $personnalise : $prestashop;
        $isLogo = $formData['logo'] == 'oui' ? $logo : 0;
        $isRedaction = $formData['redaction_contenue'] == 'oui' ? $redaction : 0;
        $isSeo = $formData['referencement'] == 'oui' ? $seo : 0;

        $estimation = $type_site + $isLogo + $isRedaction + $isSeo;

      return view('estimationSiteEcommerce', compact('formData', 'estimation'));


    }

}
