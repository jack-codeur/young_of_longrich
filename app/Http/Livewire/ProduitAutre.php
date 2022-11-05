<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProduitAutre extends Component
{
    public function render()
    {
        return view('livewire.user.produit-autre')
                ->extends('layouts.user.master')
                ->section('produit_autre');
    }
}
