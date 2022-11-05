<?php

namespace App\Http\Livewire;

use App\Models\Article;
use App\Models\TypeArticle;
use Illuminate\Support\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Accessoires extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';

    public $search = "";
    public $filterEtat = "";

    public $addArticle = [];
    public $image_1 = "", $image_2 = "", $image_3 = "", $image_4 = "";


    protected $rules = [
        'addArticle.type' => 'required',
        'addArticle.model' => 'required',
        'addArticle.disponible' => 'required',
        'image_1' => 'image|required|max:1024', //1Mg
        'image_2' => 'image|required|max:1024', //1Mg
        'image_3' => 'image|required|max:1024', //1Mg
        'image_4' => 'image|required|max:1024', //1Mg
        'addArticle.prix_reel' => 'required',
        'addArticle.prix_promo' => 'required',
        'addArticle.caracteristique' => 'required',
    ];

    protected $messages = [
        'addArticle.type' => 'Le champ catégorie est requis',
        'addArticle.model' => 'Le nom du article est requis',
        'addArticle.disponible' => 'Ce champ est obligatoire',
        'image_1' => 'L\'image est requis',
        'addArticle.prix_reel' => 'Le prix est requis',
        'addArticle.prix_promo' => 'Le prix de promo est requis',
        'addArticle.caracteristique' => 'Veillez renseigner les caracteristique de l\'article ',
    ];


    public function render()
    {

        Carbon::setLocale('fr');

        $searchArticle = Article::query();

        if ($this->search != "") {
            $searchArticle->where('model_article', 'LIKE', "%" .$this->search. "%")
                          ->orWhere('EstDisponible', 'LIKE', "%" .$this->search. "%");
        }
        if ($this->filterEtat != "") {
            $searchArticle->where('EstDisponible', 'LIKE', "%" .$this->search. "%");
        }

        return view('livewire.admin.accessoires',
        [
            'accessoires' => $searchArticle->latest()->paginate(5),
            'categories' => TypeArticle::all(),
        ])
        ->extends('layouts.admin.master')
        ->section('produit_liste_accessoire');
    }

    public function createProduct()
    {

        $pathImage_1 = ""; $pathImage_2 = ""; $pathImage_3 = ""; $pathImage_4 = "";

        if ($this->image_1 != "" && $this->image_2 != "" && $this->image_3 != "" && $this->image_4 != "") {

            $pathImage_1 = $this->image_1->store('upload', 'public');
            $pathImage_2 = $this->image_2->store('upload', 'public');
            $pathImage_3 = $this->image_3->store('upload', 'public');
            $pathImage_4 = $this->image_4->store('upload', 'public');
        }
        
        $validateArticle = $this->validate();

        Article::create([
            "id_typeArticle" => $validateArticle["addArticle"]["type"],
            "model_article" => $validateArticle["addArticle"]["model"],
            "EstDisponible" => $validateArticle["addArticle"]["disponible"],
            "prix_reel" => $validateArticle["addArticle"]["prix_reel"],
            "prix_promo" => $validateArticle["addArticle"]["prix_promo"],
            "caracteristique" => $validateArticle["addArticle"]["caracteristique"],
            "image_1" => $pathImage_1,
            "image_2" => $pathImage_2,
            "image_3" => $pathImage_3,
            "image_4" => $pathImage_4
        ]);
        // Dump($validateArticle["addArticle"]);

        $this->addArticle = [];

        $this->dispatchBrowserEvent('showSuccessMessage', ['message'=>'Produit ajouté avec succè!']);
        $this->closeModal();
    }
    //Edit article
    public function showEditArticle($id){
        $this->editArticle = Article::find($id)->toArray();

        $this->dispatchBrowserEvent("showEditModal");

    }
    public function updateArticle(){

        $this->validate([
            'editArticle.id_typeArticle' => 'required',
            'editArticle.model_article' => 'required',
            'editArticle.EstDisponible' => 'required',
            'editArticle.prix_reel' => 'required',
            'editArticle.prix_promo' => 'required',
            'editArticle.caracteristique' => 'required',
        ]);
        Article::find($this->editArticle["id"])->update([
            "id_typeArticle" => $this->editArticle["id_typeArticle"],
            "model_article" => $this->editArticle["model_article"],
            "EstDisponible" => $this->editArticle["EstDisponible"],
            "prix_reel" => $this->editArticle["prix_reel"],
            "prix_promo" => $this->editArticle["prix_promo"],
            "caracteristique" => $this->editArticle["caracteristique"],
        ]);

        $this->dispatchBrowserEvent('showSuccessMessage', ['message'=>'Produit modifier avec succè!']);
        $this->dispatchBrowserEvent('closeEditModal');
    }
    //Delete article
    public function confirmDeleteMessage($article_name, $id){

        $this->dispatchBrowserEvent("showConfrmMessage", [
            "message" =>[
                "text" => "Vous etes sur le point de supprimer le produit $article_name",
                "title" => "Etes-vous sûr de continuer?",
                "icon" => "warning",
                "data" =>[
                    "article_id" => $id
                ]
            ]
        ]);
    }
    public function deleteArticle($id){
        Article::destroy($id);

        $this->dispatchBrowserEvent("showSuccessMessage", ['message'=>'Article supprimé avec succè!']);
    }
    //============================================================================
    public function showAddprdtAcce(){
        $this->dispatchBrowserEvent('showModal');
    }
    public function closeModal(){
        $this->dispatchBrowserEvent('closeModal');
    }
    public function closeEditModal(){
        $this->dispatchBrowserEvent('closeEditModal');
    }
}
