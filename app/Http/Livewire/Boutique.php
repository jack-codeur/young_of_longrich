<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Boutique extends Component
{
    public function render()
    {
        return view('livewire.user.boutique')
                ->extends('layouts.user.master')
                ->section('boutique');
    }
}
