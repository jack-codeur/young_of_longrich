<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function contact(){
        return view('pages.user.contact');
    }

    public function accueil(){
        return view('pages.user.accueil');
    }
    public function partenaires(){
        return view('pages.user.devenir_partenaire');
    }


    public function boutique(){
        return view('pages.user.boutique');
    }
    public function produit_sante(){
        return view('pages.user.produit_sante');
    }
    public function produit_soins(){
        return view('pages.user.produit_soins');
    }
    public function produit_hygiene(){
        return view('pages.user.produit_soins');
    }
    public function produit_ordis(){
        return view('pages.user.produit_ordinateurs');
    }
    public function produit_bebe(){
        return view('pages.user.produit_bebe');
    }
    public function produit_autres(){
        return view('pages.user.produit_autres');
    }

    public function details(){
        return view('pages.user.view_produit');
    }
}
