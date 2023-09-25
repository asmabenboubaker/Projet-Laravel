<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function traiterFormulaire(Request $request)
    {
        $nom = $request->input('nom');
       
        return redirect('/confirmation');
    }
}
