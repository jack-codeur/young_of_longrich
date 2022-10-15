<?php

namespace App\Http\Livewire;

use App\Models\Maladie;
use App\Models\Produit;
use App\Models\TypeArticle;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\Livewire;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Sante extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';


    public $id_typeArticle;
    public $nom_produit;
    public $maladie;
    public $image_produit;
    public $prix_promo;
    public $prix_reel;
    public $description_produit;
    public $mode_utilisation;

    public $collection;
    
    protected $rules = [
        'id_typeArticle' => 'required',
        'nom_produit' => 'required|string',
        'maladie' => 'required',
        'image_produit.*' => 'required|image|max: 1024',
        'prix_promo' => 'required',
        'prix_reel' => 'required',
        'description_produit' => 'required|string|min: 1',
        'mode_utilisation' => 'required|string',
    ];

    protected $messages = [
        'id_typeArticle' => 'Le champ du produit est requise',
        'maladie' => 'Le champ du produit est requise',
        'image_produit' => 'Le champ du produit est requise',
        'prix_promo' => 'Le champ du produit est requise',
        'prix_reel' => 'Le champ du produit est requise',
        'description_produit' => 'Le champ du produit est requise',
        'mode_utilisation' => 'Le champ du produit est requise',
    ];
    
    public function render()
    {
        return view('livewire.admin.sante',
        [
            'santes' => Produit::latest()->paginate(5),
            'categories' => TypeArticle::all(),
            'maladies' => Maladie::all()
        ])
            ->extends("layouts.admin.master")
            ->section('produit_liste_sante');
    }

    public function createProduitSante ()
    {
        Produit::create([
            
            'id_typeArticle' => $this->id_typeArticle,
            'nom_produit' => $this->nom_produit,
            'maladie' => $this->maladie,
            'image_produit' => $this->image_produit->store('public/assets/images/sante'),
            'prix_promo' => $this->prix_promo,
            'prix_reel' => $this->prix_reel,
            'description_produit' => $this->description_produit,
            'mode_utilisation' => $this->mode_utilisation,
        ]);
    }

    public function showAddprdtSante(){
        $this->dispatchBrowserEvent('showModal');
    }
    public function closeModal(){
        $this->dispatchBrowserEvent('closeModal');
    }


    
}
