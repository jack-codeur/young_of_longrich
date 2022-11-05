<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProduitSoins extends Component
{
    public function render()
    {
        return view('livewire.user.produit-soins')
                ->extends('layouts.user.master')
                ->section('produit_soins');
    }
}
