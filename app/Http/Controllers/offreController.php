<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class offreController extends Controller
{
    public function ajouterPartenaire()
    {
        return view('Admin.partenaire.partenaire', [
            
        ]);
    }
}
