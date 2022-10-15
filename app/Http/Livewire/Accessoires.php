<?php

namespace App\Http\Livewire;

use App\Models\Article;
use App\Models\TypeArticle;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Accessoires extends Component
{
    public $nme;
    public $email;


    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';

    public $id_typeArticle;
    public $model_article;
    public $image_article;
    public $prix_promo;
    public $prix_reel;
    public $caracteristique;

    public $search = "";

    protected $rules = [
        'id_typeArticle' => 'required',
        'model_article' => 'required|string',
        'image_article.*' => 'image|max: 1024',
        'prix_promo' => 'required',
        'prix_reel' => 'required',
        'caracteristique' => 'required|string|min: 1',
    ];


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
            'accessoires' => Article::latest()->paginate(5),
            'categories' => TypeArticle::all(),
        ])
        ->extends('layouts.admin.master')
        ->section('produit_liste_accessoire');
    }

    public function createProduitSoins ()
    {
        Article::create([
            
            'id_typeArticle' => $this->id_typeArticle,
            'model_article' => $this->nom_produit,
            'image_article' => $this->image_produit->store('public/assets/images/sante'),
            'prix_promo' => $this->prix_promo,
            'prix_reel' => $this->prix_reel,
            'caracteristique' => $this->description_produit,
        ]);
    }

    public function showAddprdtAcce(){
        $this->dispatchBrowserEvent('showModal');
    }
    public function closeModal(){
        $this->dispatchBrowserEvent('closeModal');
    }
}
