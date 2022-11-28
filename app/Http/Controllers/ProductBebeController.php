<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProductBebeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.user.produit_bebe',
        [
            'products' => Produit::latest()->paginate(9),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pages.user.prdct_vente.view_produit',
        [
            'products' => Produit::findOrFail($id)
        ]);
    }

    // public function _show($id)
    // {
    //     return view('pages.user.prdct_vente.view_article',
    //     [
    //         'products' => Produit::findOrFail($id)
    //     ]);
    // }
}
