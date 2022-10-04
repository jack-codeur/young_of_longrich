<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class Soins extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.soins',
        [
            '_soins' => Article::latest()->paginate(5),
        ])
            ->extends('layouts.admin.master')
            ->section('produit_liste_sante');
    }
}
