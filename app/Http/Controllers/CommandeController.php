<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Produit;
use App\Models\User;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    //=====================La gestion de la commande====================================
   public function store(Request $request){

    $products = Produit::findOrFail($request->id);
    if(auth()->user())
    {
        $products = ([
            'quantite' => $request->quantity,
            'nom' => $request->name,
            'prix' => $request->price,
            'total' => $request->total,
            // 'id_user' => $request->id, 
            'id_statusCommande' => $request->id_statusCommande = 2,

        ]);

        // dd($products);
        
        Commande::create($products);

        return redirect()->route('panier')
                    ->with('message', 'Votre commande passée avec succès!');
    }
    return redirect()->route('creation')
                    ->with('message', 'Pour passer une commande, Vous devez d\'abord créer un compte si vous en n\'avez pas et vous connectez par la suite');
}
}
