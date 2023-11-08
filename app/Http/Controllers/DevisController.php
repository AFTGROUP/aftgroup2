<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevisController extends Controller
{
    //

    public function index(){

        return view('devis');
    }
    public function question0(){

        return view('devis-question0');
    }

    public function choice(Request $request){

        dd($request);
    }

    public function userData(){

    }
}
