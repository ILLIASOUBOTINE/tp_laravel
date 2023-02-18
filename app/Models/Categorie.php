<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $table = "categories";
    protected $primaryKey ="id";
    protected $fillable = array('libelle');
    public $timestamps = false;

    /**
    * Une catégorie a plusieurs jeux
    *
    * @return void
    */
    public function jeux()
    {
    return $this->hasMany(Jeu::class);
    }


}