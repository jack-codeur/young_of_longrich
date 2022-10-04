<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class Ordinateurs extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.ordinateurs',
    [
        'ordis' => Article::latest()->paginate(5)
    ])
        ->extends('layouts.admin.master')
        ->section('vente');
    }
}
