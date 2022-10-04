<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maladie extends Model
{
    use HasFactory;

    protected $table = "maladies";

    public function articles(){
        return $this->belongsToMany(Article::class, 'peut_ou_traites', 'id_maladie', 'id_article');
    }
}
