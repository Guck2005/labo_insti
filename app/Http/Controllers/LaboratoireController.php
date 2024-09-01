<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Labo;
use App\Models\Mission;
use App\Models\Technologie;
use App\Models\Impact;
use App\Models\Perspective;
use App\Models\Membre;
use App\Models\Globals;
use App\Models\HistoriqueDirecteur;
use App\Models\User;

class LaboratoireController extends Controller
{
    // ...
        public function accueil()
        {
            $typesLabo = Globals::all();
        
            return view('welcome', ['typesLabo' => $typesLabo]);
        }
        
        
        public function laboratoireRecherche()
        {
            return view('Admin.laboratoire.recherche');
        }

        public function laboratoirePedagogique()
        {
            return view('Admin.laboratoire.pedagogique');
        }
        public function laboratoireDetail($id)
        {
            // Récupérez le laboratoire avec les relations
            $labo = Labo::with(['missions', 'technologies', 'impacts', 'perspectives', 'membres', 'type'])
                        ->findOrFail($id);
        
            // Passez les données à la vue appropriée (par exemple, 'laboratoire-detail.blade.php')
            return view('Admin.laboratoire.detail', ['labo' => $labo]);
        }
        

        public function laboratoireParType($type)
        {
            // Récupérez les laboratoires du type spécifié avec la relation 'type'
            $labos = Labo::with('type')->where('type_labo', $type)->get();

            // Récupérez le nom du type à partir du premier laboratoire (supposant que tous les laboratoires ont le même type)
            $typeName = $labos->isNotEmpty() ? $labos->first()->type->cat_name : '';

            // Passez les données à la vue appropriée (par exemple, 'laboratoires-par-type.blade.php')
            return view('Admin.laboratoire.pedagogique', ['labos' => $labos, 'typeName' => $typeName]);
        }

        public function historiqueDirecteurs(Labo $labo)
        {
            $historiqueDirecteurs = $labo->historiqueDirecteurs;
        
            return view('Admin.laboratoire.historiqueDirecteurs', ['historiqueDirecteurs' => $historiqueDirecteurs, 'labo' => $labo]);
        }

        public function ajouterLaboratoire()
        {
            $type_labo = Globals::all();
            $users = User::all(); // Récupérer tous les utilisateurs
        
            return view('Admin.laboratoire.ajouterLaboratoire', [
                'type_labo' => $type_labo,
                'users' => $users,
            ]);
        }

        public function store(Request $request)
        {
            // Vérifiez d'abord si un fichier a été téléchargé pour le champ 'photo_labo'
        if ($request->hasFile('photo_labo')) {
            // Validation des données pour les champs autres que 'photo_labo'
            $request->validate([
                'labo_name' => 'required|max:255',
                'type_labo' => 'required|exists:globals,id',
                'directeur_labo' => 'required|max:255',
                'description_labo' => 'required',
                'photo_labo' => 'required|image',
                // Ajoutez d'autres règles de validation au besoin
            ]);

            // Si la validation réussit, procédez à l'enregistrement du fichier photo
            $file = $request->file('photo_labo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('photos_labo', $fileName, 'public');
        } else {
            // Si aucun fichier n'est téléchargé, effectuez la validation sans la règle 'image'
            $request->validate([
                'labo_name' => 'required|max:255',
                'type_labo' => 'required|exists:globals,id',
                'directeur_labo' => 'required|max:255',
                'description_labo' => 'required',
                'photo_labo' => 'required', // La règle 'image' est supprimée ici
                // Ajoutez d'autres règles de validation au besoin
            ]);
        }

        // Création d'un nouveau laboratoire
        $labo = new Labo();
        $labo->labo_name = $request->input('labo_name');
        $labo->type_labo = $request->input('type_labo');
        $labo->directeur_labo = $request->input('directeur_labo');
        $labo->description_labo = $request->input('description_labo');
        $labo->photo_labo = $request->input('photo_labo');

        // Si un fichier a été téléchargé, enregistrez le chemin dans la base de données
        if (isset($filePath)) {
            $labo->photo_labo = $filePath;
        }

        $labo->save();

        // Enregistrez les missions associées
        foreach ($request->input('mission_description') as $missionDescription) {
            $mission = new Mission(['mission' => $missionDescription]);
            $labo->missions()->save($mission);
        }

        // Enregistrez les technologies associées
        foreach ($request->input('tech_desc') as $techDesc) {
            $technologie = new Technologie(['technologie' => $techDesc]);
            $labo->technologies()->save($technologie);
        }

        // Enregistrez les impacts associés
        foreach ($request->input('impact_description') as $impactDesc) {
            $impact = new Impact(['impact' => $impactDesc]);
            $labo->impacts()->save($impact);
        }

        // Enregistrez les perspectives associées
        foreach ($request->input('perspective_description') as $perspectiveDesc) {
            $perspective = new Perspective(['perspective' => $perspectiveDesc]);
            $labo->perspectives()->save($perspective);
        }

        // Enregistrez les membres associés
        foreach ($request->input('membre_labo') as $membreId) {
            $membre = new Membre(['id_membre' => $membreId]);
            $labo->membres()->save($membre);
        }

        //Redirection avec un message de succès
        return redirect()->route('labos.index')->with('success', 'Laboratoire créé avec succès!');
    }

    public function index()
    {
        $labos = Labo::with('type')->get(); // Charger la relation avec le type
    
        return view('Admin.laboratoire.listeLabo', [
            'labos' => $labos,
        ]);
    }
    
    public function show(Labo $labo)
    {
        // Charger les relations pour les détails du laboratoire
        $labo->load('missions', 'technologies', 'impacts', 'perspectives', 'membres');
    
        return view('Admin.laboratoire.detailsLabo', [
            'labo' => $labo,
        ]);
    }

    public function destroy(Labo $labo)
    {
        // Supprimer la photo associée au laboratoire s'il y en a une
        if ($labo->photo_labo) {
            Storage::disk('public')->delete($labo->photo_labo);
        }

        // Supprimer le laboratoire
        $labo->delete();

        // Redirection avec un message de succès
        return redirect()->route('labos.index')->with('success', 'Laboratoire supprimé avec succès!');
    }

    public function edit(Labo $labo)
    {
        // Charger les relations pour le formulaire de modification
        $labo->load('missions', 'technologies', 'impacts', 'perspectives', 'membres');

        // Charger d'autres données nécessaires pour le formulaire, par exemple, les types de laboratoire et les utilisateurs
        $type_labo = Globals::all();
        $users = User::all();

        return view('Admin.laboratoire.modifierLaboratoire', [
            'labo' => $labo,
            'type_labo' => $type_labo,
            'users' => $users,
        ]);
    }
    public function update(Request $request, Labo $labo)
    {
        // Validation des données
        $request->validate([
            'labo_name' => 'required|max:255',
            'type_labo' => 'required|exists:globals,id',
            'directeur_labo' => 'required|max:255',
            'description_labo' => 'required',
            'photo_labo' => 'sometimes|image', // Utilisez 'sometimes' pour autoriser la mise à jour facultative de la photo
            // Ajoutez d'autres règles de validation au besoin
        ]);

        // Mise à jour des données du laboratoire
        $labo->labo_name = $request->input('labo_name');
        $labo->type_labo = $request->input('type_labo');
        $labo->directeur_labo = $request->input('directeur_labo');
        $labo->description_labo = $request->input('description_labo');

        // Mise à jour de la photo du laboratoire si un nouveau fichier est téléchargé
        if ($request->hasFile('photo_labo')) {
            // Suppression de l'ancienne photo si elle existe
            if ($labo->photo_labo) {
                Storage::disk('public')->delete($labo->photo_labo);
            }

            // Enregistrement de la nouvelle photo
            $file = $request->file('photo_labo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('photos_labo', $fileName, 'public');

            $labo->photo_labo = $filePath;
        }

        $labo->save();

        // Mise à jour des missions associées
        $labo->missions()->delete(); // Supprimez d'abord toutes les missions existantes
        foreach ($request->input('mission_description') as $missionDescription) {
            $mission = new Mission(['mission' => $missionDescription]);
            $labo->missions()->save($mission);
        }

        // Mise à jour des technologies associées
        $labo->technologies()->delete(); // Supprimez d'abord toutes les technologies existantes
        foreach ($request->input('tech_desc') as $techDesc) {
            $technologie = new Technologie(['technologie' => $techDesc]);
            $labo->technologies()->save($technologie);
        }

        // Mise à jour des impacts associés
        $labo->impacts()->delete(); // Supprimez d'abord tous les impacts existants
        foreach ($request->input('impact_description') as $impactDesc) {
            $impact = new Impact(['impact' => $impactDesc]);
            $labo->impacts()->save($impact);
        }

        // Mise à jour des perspectives associées
        $labo->perspectives()->delete(); // Supprimez d'abord toutes les perspectives existantes
        foreach ($request->input('perspective_description') as $perspectiveDesc) {
            $perspective = new Perspective(['perspective' => $perspectiveDesc]);
            $labo->perspectives()->save($perspective);
        }

        // Mise à jour des membres associés
        $labo->membres()->delete();// Détachez tous les membres existants
        foreach ($request->input('membre_labo') as $membreId) {
            $membre = new Membre(['id_membre' => $membreId]);
            $labo->membres()->save($membre);
        }

        $ancienDirecteurId = $labo->directeur_labo; // Remplacez ceci par l'ID de l'ancien directeur (si disponible)
        $nouveauDirecteurId = $request->input('directeur_labo');
    
        $historique = new HistoriqueDirecteur([
            'labo_id' => $labo->id,
            'ancien_directeur_id' => $ancienDirecteurId, // ID de l'ancien directeur
            'nouveau_directeur_id' => $nouveauDirecteurId, // ID du nouveau directeur
            'date_debut' => now(), // ou la date appropriée
            'date_fin' => null, // à ajuster selon votre logique
        ]);
    
        $historique->save();
        // Redirection avec un message de succès
        return redirect()->route('labos.index')->with('success', 'Laboratoire mis à jour avec succès!');
    }



    // ...
}

