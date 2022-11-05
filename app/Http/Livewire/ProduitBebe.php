<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProduitBebe extends Component
{
    public function render()
    {
        return view('livewire.user.produit-bebe')
                ->extends('layouts.user.master')
                ->section('produit_bebe');
    }
}
