<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';

    public function types(){
        return $this->belongsTo(TypeArticle::class, 'id_typeArticle', 'id');
    }

    public function commandes(){
        return $this->hasMany(Commande::class);
    }

    public function maladies(){
        return $this->belongsToMany(Maladie::class, 'peut_ou_traites', 'id_article', 'id_maladie');
    }
}
