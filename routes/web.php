<?php

use App\Http\Controllers\AdminCotroller;
use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Accessoires;
use App\Http\Livewire\Accueil;
use App\Http\Livewire\Boutique;
use App\Http\Livewire\Clients;
use App\Http\Livewire\Commandes;
use App\Http\Livewire\DevenirPartenaire;
use App\Http\Livewire\Devis;
use App\Http\Livewire\Factures;
use App\Http\Livewire\Hygiene;
use App\Http\Livewire\Livraisons;
use App\Http\Livewire\Ordinateurs;
use App\Http\Livewire\Parametres;
use App\Http\Livewire\ProduitAutre;
use App\Http\Livewire\ProduitBebe;
use App\Http\Livewire\ProduitHygiene;
use App\Http\Livewire\ProduitOrdinateur;
use App\Http\Livewire\ProduitSante;
use App\Http\Livewire\ProduitSoins;
use App\Http\Livewire\ProduitView;
use App\Http\Livewire\Sante;
use App\Http\Livewire\Soins;
use App\Http\Livewire\SpecialBebe;
use App\Http\Livewire\Utilisateurs;
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

//=================================================================================================
Route::get('/admin_accueil', [AdminCotroller::class, 'index'])->name('admin_accueil');
//==============================================ROUTE SUPER ADMIN================================================

Route::group([
    'middleware' => ['auth', 'auth.admin'],
    'as' => 'admin.'
], function(){

    Route::group([
        'prefix' => 'produit',
        'as' => 'produit/liste.'
     ], function(){
        //=================================================================================================
        Route::get('/liste_sante', Sante::class)->name('sante');
        Route::get('/liste_soins', Soins::class)->name('soins');
        Route::get('/liste_hygiene', Hygiene::class)->name('hygiene');
        Route::get('/liste_ordinateur', Ordinateurs::class)->name('ordinateur');
        Route::get('/liste_bebe', SpecialBebe::class)->name('bebe');
        Route::get('/liste_accessoire', Accessoires::class)->name('accessoire');
     });
    Route::group([
        'prefix' => 'vente',
        'as' => 'vente.'
    ], function(){
        //=================================================================================================
        Route::get('/devis', Devis::class)->name('devis');
        Route::get('/commande', Commandes::class)->name('commandes');
        Route::get('/livraison', Livraisons::class)->name('livraisons');
        Route::get('/facture', Factures::class)->name('factures');
    });
    Route::group([
        'prefix' => 'contact',
        'as' => 'contact.'
    ], function(){
        //=================================================================================================
        Route::get('/contact_user', Utilisateurs::class)->name('user');
        Route::get('/contact_client', Clients::class)->name('client');
    });
});

//==============================================ROUTE ADMIN================================================

// Route::group([
//     'middlewer' => ['auth', 'auth.admin'],
//     'as' => 'admin.'
// ], function(){
//     Route::group([
//         'prefix' => 'produit',
//         'as' => 'produit.'
//     ], function(){
        //=================================================================================================
    //     Route::get('/liste_sante', Sante::class)->name('sante');
    //     Route::get('/liste_soins', Soins::class)->name('soins');
    //     Route::get('/liste_hygiene', Hygiene::class)->name('hygiene');
    //     Route::get('/liste_ordinateur', Ordinateurs::class)->name('ordinateur');
    //     Route::get('/liste_bebe', SpecialBebe::class)->name('bebe');
    //     Route::get('/liste_accessoire', Accessoires::class)->name('accessoire');
    // });
    // Route::group([
    //     'prefix' => 'vente',
    //     'as' => 'Vente.'
    // ], function(){
        //=================================================================================================
    //     Route::get('/devis', Devis::class)->name('devis');
    //     Route::get('/commande', Commandes::class)->name('commandes');
    //     Route::get('/livraison', Livraisons::class)->name('livraisons');
    //     Route::get('/facture', Factures::class)->name('factures');
    // });
    // Route::group([
    //     'prefix' => 'contact',
    //     'as' => 'contact.'
    // ], function(){
        //=================================================================================================
//         Route::get('/contact_user', Utilisateurs::class)->name('user');
//         Route::get('/contact_client', Clients::class)->name('client');
//     });
// });



// Route::get('/admin_accueil', AccueilAdmin::class)->name('admin_accueil');
//=================================================================================================
// Route::get('/contact_user', Utilisateurs::class)->name('contact_user');
// Route::get('/contact_client', Clients::class)->name('contact_client');

//=================================================================================================
// Route::get('/liste_soins', Soins::class)->name('liste_soins');
//=================================================================================================
// Route::get('/liste_hygiene', Hygiene::class)->name('liste_hygiene');
//=================================================================================================
// Route::get('/liste_ordinateur', Ordinateurs::class)->name('liste_ordinateur');
//=================================================================================================
// Route::get('/liste_bebe', SpecialBebe::class)->name('liste_bebe');
//=================================================================================================
// Route::get('/liste_accessoire', Accessoires::class)->name('liste_accessoire');

//=================================================================================================
// Route::get('/devis', Devis::class)->name('devis');
// Route::get('/commande', Commandes::class)->name('commandes');
// Route::get('/livraison', Livraisons::class)->name('livraisons');
// Route::get('/facture', Factures::class)->name('factures');

//=================================================================================================
Route::get('contact', [UserController::class, 'contact'])->name('contact');

Route::get('/', [UserController::class, 'accueil'])->name('accueil');
// Route::get('/', Accueil::class)->name('accueil');

Route::get('/boutique', Boutique::class)->name('boutique');
Route::get('/partenaires', DevenirPartenaire::class)->name('partenaire');

Route::get('/produit/sante', ProduitSante::class)->name('produit_sante');
Route::get('/produit/soins', ProduitSoins::class)->name('produit_soins');
Route::get('/produit/ordinateurs', ProduitOrdinateur::class)->name('produit_ordis');
Route::get('/produit/hygiene', ProduitHygiene::class)->name('produit_hygiene');
Route::get('/produit/bebe', ProduitBebe::class)->name('produit_bebe');
Route::get('/produit/autres', ProduitAutre::class)->name('produit_autres');


Route::get('/details_produit', ProduitView::class)->name('details_produit');

//=================================================================================================
Route::get('/parametre', Parametres::class)->name('parametre.user');

Route::get('/creation', [RegisterUserController::class, 'index'])->name('index');
Route::post('/creation', [RegisterUserController::class, 'store'])->name('creation');
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
