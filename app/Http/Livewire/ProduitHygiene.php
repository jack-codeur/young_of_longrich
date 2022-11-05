<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProduitHygiene extends Component
{
    public function render()
    {
        return view('livewire.user.produit-hygiene')
                ->extends('layouts.user.master')
                ->section('produit_hygiene');
    }
}
