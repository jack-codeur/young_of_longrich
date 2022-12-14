<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $table = 'commandes';
    protected $fillable = ['quantite', 'nom', 'prix', 'total', 'id_statusCommande'];

    // public function aticles(){
    //     $this->belongsTo(Article::class, 'id_commande', 'id');
    // }

    public function produits(){
        $this->belongsTo(Produit::class, 'id_commande', 'id');
    }

    public function users(){
        $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function statuts(){
        $this->belongsTo(StatusCommande::class, 'id_statusCommande', 'id');
    }

    public function clients(){
        $this->belongsTo(Client::class, 'id_client', 'id');
    }
}
