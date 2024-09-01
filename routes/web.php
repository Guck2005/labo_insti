<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\partenaireController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LaboratoireController;


use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LaboratoireController::class, 'accueil'])->name('accueil');


Route::get('/dashboard', function () {
    return view('aadmin/dashboard/welcome');
})->name('dashboard');
Route::get('/edit', function () {
    return view('edition-profil');
});

Route::get('/dashboard/ajouter-etudiants', [AdminController::class, 'createEtudiants'])->name("admin.ajoutetudiants");
Route::get('/dashboard/ajouter-professeurs', [AdminController::class, 'createprofesseurs'])->name("admin.ajoutprofesseurs");
Route::get('/dashboard/ajouter-etudiant', [AdminController::class, 'createEtudiant'])->name("admin.ajoutetudiant");
Route::get('/dashboard/ajouter-professeur', [AdminController::class, 'createProfesseur'])->name("admin.ajoutprofesseur");
Route::post('/dashboard/sauver-compte', [AdminController::class, 'store'])->name("admin.savecompte");
Route::post('/dashboard/sauver-comptes', [AdminController::class, 'storeWithFile'])->name("admin.savecomptes");
 
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/ajouterLaboratoire', [LaboratoireController::class, 'ajouterLaboratoire']) ->name('ajouterLaboratoire');
Route::post('/store', [LaboratoireController::class, 'store'])->name('store');

Route::get('/labos', [LaboratoireController::class, 'index'])->name('labos.index');

Route::get('/labos/{labo}', [LaboratoireController::class, 'show'])->name('labos.show');

Route::delete('labos/{labo}', [LaboratoireController::class, 'destroy'])->name('labos.destroy');

Route::get('/labos/{labo}/edit', [LaboratoireController::class, 'edit'])->name('labos.edit');

Route::put('/labos/update/{labo}', [LaboratoireController::class, 'update'])->name('labos.update');



Route::get('/labos/type/{type}', [LaboratoireController::class, 'laboratoireParType'])->name('labos.type');

Route::get('/laboratoire/recherche', [LaboratoireController::class, 'laboratoireRecherche']);
Route::get('/laboratoire/pedagogique', [LaboratoireController::class, 'laboratoirePedagogique']);
Route::get('/laboratoire/detail/{labo}', [LaboratoireController::class, 'laboratoireDetail'])->name('labos.detail');

Route::get('/labos/{labo}/historique', [LaboratoireController::class, 'historiqueDirecteurs'])->name('labos.historiqueDirecteurs');


Route::post('/sauverPartenaire', [partenaireController::class, 'sauverPartenaire'])-> name('sauverPartenaire');
Route::get('/partenaires', [partenaireController::class, 'partenaires']);
Route::get('/informationPartenaire/{idPartenaire}',[partenaireController::class, 'informationPartenaire'] );
Route::get('/editPartenaire/{idPartenaire}',[partenaireController::class,'editPartenaire']);
Route::post('/modifierPartenaire/{idPartenaire}', [partenaireController::class,'modifierPartenaire']);
Route::get('/listePartenaire', [partenaireController::class, 'listePartenaire']);
