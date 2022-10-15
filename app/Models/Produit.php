<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $table = 'produits';
    protected $fillable = ['id_typeArticle', 'images_produit', 'nom_produit', 'maladie', 'image_produit', 'prix_promo', 'prix_reel', 'description_produit', 'mode_utilisation'];

    public function types(){
        return $this->belongsTo(TypeArticle::class, 'id_typeArticle', 'id');
    }
    
    public function commandes(){
        return $this->hasMany(Commande::class);
    }

    public function maladies(){
        return $this->belongsToMany(Maladie::class, 'peut_ou_traites', 'id_produit', 'id_maladie');
    }
}
