<?php

namespace App\Http\Livewire;

use App\Models\Article;
use App\Models\TypeArticle;
use Livewire\Component;
use Livewire\WithPagination;

class Sante extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public function render()
    {
        return view('livewire.admin.sante',
        [
            'santes' => Article::latest()->paginate(5),
        ])
            ->extends("layouts.admin.master")
            ->section('produit_liste_sante');
    }
}
