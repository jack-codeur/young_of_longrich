<?php

namespace App\Http\Controllers;

use App\Models\Maladie;
use App\Models\Produit;
use App\Models\TypeArticle;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $queryString = ['search'];
    
    public function contact(){
        return view('pages.user.contact');
    }

    public function accueil(Request $request){

        return view('pages.user.accueil');    
    }

    // public function produit_search(){
    //     request()->validate([
    //         'q' => 'required',
    //     ]);

    //     $q = request()->input('q');
    //     // dd($q); die();
    //     $produit = Produit::with('nom_produit', 'like', "%$q%")
    //                         ->orWhere('description_produit', 'like', "%$q%")
    //                         ->get();

    //     return view('template.user.produit_search_by_maladie',[
    //         'produits' => $produit,
            
    //     ]);

    // }


//     public function partenaires(){
//         return view('pages.user.devenir_partenaire');
//     }


//     public function boutique(){
//         return view('pages.user.boutique');
//     }
//     public function produit_sante(){
//         return view('pages.user.produit_sante');
//     }
//     public function produit_soins(){
//         return view('pages.user.produit_soins');
//     }
//     public function produit_hygiene(){
//         return view('pages.user.produit_soins');
//     }
//     public function produit_ordis(){
//         return view('pages.user.produit_ordinateurs');
//     }
//     public function produit_bebe(){
//         return view('pages.user.produit_bebe');
//     }
//     public function produit_autres(){
//         return view('pages.user.produit_autres');
//     }

//     public function details(){
//         return view('pages.user.view_produit');
//     }
}
