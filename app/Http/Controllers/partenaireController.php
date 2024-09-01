<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class partenaireController extends Controller
{
    public function ajouterPartenaire()
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }
}
