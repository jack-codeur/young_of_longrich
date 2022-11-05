<?php

namespace App\Http\Livewire;

use App\Models\Produit;
use Livewire\Component;

class Accueil extends Component
{
    public $search = "";

    protected $queryString = ['search'];
    
    public function render()
    {
        $searchP = "%". $this->search. "%";


        return view('livewire.user.accueil',[
            'produits' => Produit::where('nom_produit', 'like', $searchP)->latest()->get(),
        ])
                ->extends('layouts.user.master')
                ->section('accueil');
    }
}
