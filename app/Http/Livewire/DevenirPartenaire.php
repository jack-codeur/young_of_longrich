<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DevenirPartenaire extends Component
{
    public function render()
    {
        return view('livewire.user.devenir-partenaire')
                ->extends('layouts.user.master')
                ->section('partenaire');
    }
}
