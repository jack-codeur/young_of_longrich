<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\User;
use Cart;
use Illuminate\Http\Request;

class PanierController extends Controller
{

    public function index(){

        $content = Cart::getContent();

        // dd($content);
        
        return view('pages.user.prdct_vente.panier',
        [
            'products' => $content
        ]);
    }

    public function cart_add(Request $request){
        
        // $user = User::findOrFail($request->id);
        $product = Produit::findOrFail($request->id);
        Cart::add(array(
            'id' => $product->id,
            'name' => $product->nom_produit,
            'price' => $product->prix_promo,
            'quantity' => $request->quantity,

            // 'attributes' => array(),
        ));

        session()->flash('success', "Produit, $product->nom_produit ajouté dans le panier avec succès !");
        return redirect()->route('panier');
    }

    public function cart_update(Request $request){

        $product = Produit::findOrFail($request->id);
        Cart::update(
            $request->id, array(
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ]
                ),
            );
            // dd($dd);
        session()->flash('success', "Vous avez modifié la quantité du produit $product->nom_produit du panier !");
        return redirect()->route('panier');
    }

    public function cart_remove(Request $request){

        $product = Produit::findOrFail($request->id);
        
        Cart::remove($request->id);

        session()->flash('success', "Le produit $product->nom_produit supprimmé avec succès !");
        return redirect()->route('panier');
    }

    public function cart_clear(){
        Cart::clear();

        session()->flash('success', "Vous avez vidé le panier !");
        return redirect()->route('panier');
    }
}
