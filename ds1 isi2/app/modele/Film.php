<?php

namespace App\modele;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = ['titre', 'anneeSortie', 'description', 'categorie_id'];

    public $timestamps = false;

    public function categorie(){
        return $this -> belongsTo(Categorie::class);
    }
}
