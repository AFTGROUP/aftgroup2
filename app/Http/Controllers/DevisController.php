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

        $data = $request;
        return view('devis-question0', compact('data'));
    }

    public function choice(Request $request)
    {

        //  dd($request);

        $choice = $request->choice;

        if ($choice === 'logiciel') {
            return response()->json(['redirect' => route('logiciel')]);
        } elseif ($choice === 'e-commerce') {
            return response()->json(['redirect' => route('site_e_commerce')]);
        } elseif ($choice === 'site_vitrine') {
            return response()->json(['redirect' => route('site_vitrine')]);
        }
    
        return response()->json(['message' => 'Choix invalide']);
    }


    public function site_e_commerce()
    {
    }

    public function logiciel()
    {
        return view('logiciel');
    }
}
