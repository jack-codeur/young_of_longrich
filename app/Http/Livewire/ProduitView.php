<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProduitView extends Component
{
    public function render()
    {
        return view('livewire.user.produit-view')
                ->extends('layouts.user.master')
                ->section('view_produit');
    }
}
