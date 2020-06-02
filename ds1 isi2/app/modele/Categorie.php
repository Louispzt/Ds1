<?php

namespace App\modele;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = ['libelle'];

    public $timestamps = false;

    public function films(){
        return $this -> hasMany(Film::class);
    }
}
