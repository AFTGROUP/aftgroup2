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
        if (isset($formData['type_site'])) {
            $type_site = $formData['type_site'] == 'Personnalisé' ? $personnalise : $prestashop;
        }

        if (isset($formData['logo'])) {
            $isLogo = $formData['logo'] == 'oui' ? $logo : 0;
        }

        if (isset($formData['redaction_contenue'])) {
            $isRedaction = $formData['redaction_contenue'] == 'oui' ? $redaction : 0;
        }

        if (isset($formData['referencement'])) {
            $isSeo = $formData['referencement'] == 'oui' ? $seo : 0;
        }

        $estimation = $type_site + $isLogo + $isRedaction + $isSeo;

        return view('estimationSiteEcommerce', compact('formData', 'estimation'));
    }

    public function siteVitrine_Vitrine(Request $request)
    {
        $formData = $request->all();

      //  dd($formData);
        //Types sites
        $mesure = 175000;
        $template = 100000;
        $templatePersonnalisation = 150000;

        //maquette
        $maquette = 50000;

        //actualites
        $actualite = 15000;

        //Responsive design
        $responsive_design = 10000;

        //Référencement SEO
        $reference_naturel = 25000;

        //Rédaction de contenue
        $redaction_contenue = 30000;

        //Logo
        $logo = 50000;

        // Intégration multimédia

        $multimedia = 15000;

        //Nom de domaine
        $domaine = 250000;

        //Hébergement
        $hebergement = 100000;

        $type_site = 0;
        $isMaquette = 0;
        $nombre_pages = 0;
        $isActualite = 0;
        $isResponsive_design = 0;
        $isReferenceNaturel = 0;
        $isRedactionContenue = 0;
        $isLogo = 0;
        $isMultimedia = 0;
        $isDomaine = 0;
        $isHebergement = 0;

        //Estimation
        if (isset($formData['type_site'])) {
            if ($formData['type_site'] == 'Entièrement sur mesure') {
                $type_site = $mesure;
            } else if ($formData['type_site'] == 'Template') {
                $type_site = $template;
            } else {
                $type_site = $templatePersonnalisation;
            }
        }

        if (isset($formData['maquette'])) {
            $isMaquette = $formData['maquette'] == 'oui' ? $maquette : $isMaquette;
        }

        if (isset($formData['nombre_pages'])) {
            $nombre_pages = nombre_pages($formData['nombre_pages']);
        }

        if (isset($formData['actualite'])) {
            $isActualite = $formData['actualite'] == 'oui' ? $actualite : $isActualite;
        }

        if (isset($formData['responsive_design'])) {
            $isResponsive_design = $formData['responsive_design'] == 'oui' ? $responsive_design : $isResponsive_design;
        }

        if (isset($formData['reference_naturel'])) {
            $isReferenceNaturel = $formData['reference_naturel'] == 'oui' ? $reference_naturel : $isReferenceNaturel;
        }

        if (isset($formData['redaction_contenue'])) {
            $isRedactionContenue = $formData['redaction_contenue'] == 'oui' ? $redaction_contenue : $isRedactionContenue;
        }

        if (isset($formData['logo'])) {
            $isLogo = $formData['logo'] == 'oui' ? $logo : $isLogo;
        }

        if (isset($formData['multimedia'])) {
            $isMultimedia = $formData['multimedia'] == 'oui' ? $multimedia : $isMultimedia;
        }

        if (isset($formData['domaine'])) {
            $isDomaine = $formData['domaine'] == 'oui' ? $domaine : $isDomaine;
        }

        if (isset($formData['hebergement'])) {
            $isHebergement = $formData['hebergement'] == 'oui' ? $hebergement : $isHebergement;
        }

        $estimation = $type_site + $isMaquette + $nombre_pages + $isActualite +  $isResponsive_design + $isReferenceNaturel + $isRedactionContenue + $isLogo + $isMultimedia + $isDomaine + $isHebergement;


        return view('estimationSiteVitrine', compact('formData', 'estimation'));

    }
}
