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
        $search_product = Produit::query();

        if ($this->search != ""){
            $search_product->where('nom_produit', 'like', "%".$this->search. "%");
        }

        return view('livewire.user.accueil',[
            'produits' => $search_product->latest()->get(),
        ])
                ->extends('layouts.user.master')
                ->section('accueil');
    }
}
