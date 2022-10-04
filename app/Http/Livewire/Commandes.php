<?php

namespace App\Http\Livewire;

use App\Models\Commande;
use Illuminate\Support\Facades\Artisan;
use Livewire\Component;
use Livewire\WithPagination;

class Commandes extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.commandes',
        [
            'commandes' => Commande::latest()->paginate(5)
        ])
        ->extends('layouts.admin.master')
        ->section('vente');
    }
}
