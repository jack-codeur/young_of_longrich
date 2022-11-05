<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProduitSante extends Component
{
    public function render()
    {
        return view('livewire.user.produit-sante')
                ->extends('layouts.user.master')
                ->section('produit_sante');
    }
}
