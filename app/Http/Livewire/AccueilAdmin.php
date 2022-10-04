<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class AccueilAdmin extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.accueil-admin',)
            ->extends('layouts.admin.master')
            ->section('accueil');
    }
}
