<?php

use App\Http\Controllers\AdminCotroller;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Accessoires;
use App\Http\Livewire\AccueilAdmin;
use App\Http\Livewire\Clients;
use App\Http\Livewire\Commandes;
use App\Http\Livewire\Devis;
use App\Http\Livewire\Factures;
use App\Http\Livewire\Hygiene;
use App\Http\Livewire\Livraisons;
use App\Http\Livewire\Ordinateurs;
use App\Http\Livewire\Parametres;
use App\Http\Livewire\Sante;
use App\Http\Livewire\Soins;
use App\Http\Livewire\SpecialBebe;
use App\Http\Livewire\Utilisateurs;
use App\Models\Article;
use App\Models\TypeArticle;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

route::get('/article', function(){
    return Article::with('type')->paginate(5);
});
route::get('/types', function(){
    return TypeArticle::with('articles')->paginate(3);
});

Route::group([
    'middleware' => ['auth', 'auth.superadmin'],
    'as' => 'admin.'
], function(){

    Route::group([
        'prefix' => 'parametre',
        'as' => 'parametres.'
     ], function(){

        Route::get('/parametre', Parametres::class)->name('parametre.user');


     });

});

//=================================================================================================
Route::get('/admin_accueil', AccueilAdmin::class)->name('admin_accueil');
//=================================================================================================
Route::get('/contact_user', Utilisateurs::class)->name('contact_user');
Route::get('/contact_client', Clients::class)->name('contact_client');
//=================================================================================================
Route::get('/liste_sante', Sante::class)->name('liste_sante');
//=================================================================================================
Route::get('/liste_soins', Soins::class)->name('liste_soins');
//=================================================================================================
Route::get('/liste_hygiene', Hygiene::class)->name('liste_hygiene');
//=================================================================================================
Route::get('/liste_ordinateur', Ordinateurs::class)->name('liste_ordinateur');
//=================================================================================================
Route::get('/liste_bebe', SpecialBebe::class)->name('liste_bebe');
//=================================================================================================
Route::get('/liste_accessoire', Accessoires::class)->name('liste_accessoire');

//=================================================================================================
Route::get('/devis', Devis::class)->name('devis');
Route::get('/commande', Commandes::class)->name('commandes');
Route::get('/livraison', Livraisons::class)->name('livraisons');
Route::get('/facture', Factures::class)->name('factures');

//=================================================================================================
Route::get('contact', [UserController::class, 'contact'])->name('contact');

Route::get('/', [UserController::class, 'accueil'])->name('accueil');
Route::get('/boutique', [UserController::class, 'boutique'])->name('boutique');
Route::get('/partenaires', [UserController::class, 'partenaires'])->name('partenaire');

Route::get('/produit/sante', [UserController::class, 'produit_sante'])->name('produit_sante');
Route::get('/produit/soins', [UserController::class, 'produit_soins'])->name('produit_soins');
Route::get('/produit/ordinateurs', [UserController::class, 'produit_ordis'])->name('produit_ordis');
Route::get('/produit/hygiene', [UserController::class, 'produit_hygiene'])->name('produit_hygiene');
Route::get('/produit/bebe', [UserController::class, 'produit_bebe'])->name('produit_bebe');
Route::get('/produit/autres', [UserController::class, 'produit_autres'])->name('produit_autres');


Route::get('/details_produit', [UserController::class, 'details'])->name('details_produit');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
