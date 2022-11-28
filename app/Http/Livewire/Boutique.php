<?php

namespace App\Http\Livewire;

use App\Models\Produit;
use Livewire\Component;

class Boutique extends Component
{
    public $search = "";

    public function render()
    {
        $search_product = Produit::query()->get();

        if($this->search != ""){
            $search_product->where('nom_produit', 'LIKE', '%'.$this->search.'%')
                            ->orWhere('id_typeArticle', 'LIKE', '%'.$this->search.'%');
        }
        return view('livewire.user.boutique',
        [
            'products' => $search_product
        ])
                ->extends('layouts.user.master')
                ->section('boutique');
    }
}
