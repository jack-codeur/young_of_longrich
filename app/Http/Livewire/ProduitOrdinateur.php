<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProduitOrdinateur extends Component
{
    public function render()
    {
        return view('livewire.user.produit-ordinateur')
                ->extends('layouts.user.master')
                ->section('produit_ordi');
    }
}
