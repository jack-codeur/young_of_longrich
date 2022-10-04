<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class Accessoires extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search = "";


    public function render()
    {

        $query = Article::query();
        $search = $this->search;

        if(isset($search))
            $this->resetPage();

        $query->when($search != "", function($query) use($search){
            $query->where("typeOuSerie", "like", "%{$search}%");
            $query->orwhere("id_typeArticle", "like", "%{$search}%");
        });

        return view('livewire.admin.accessoires',
        [
            'accessoires' => $query->latest()->paginate(5),
        ])
        ->extends('layouts.admin.master')
        ->section('produit_liste_accessoire');
    }
}
