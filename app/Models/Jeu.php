<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Jeu extends Model
{
    use HasFactory;
    protected $table = "jeux";
    protected $primaryKey ="id";
    protected $fillable = array('titre', 'description');
    public $timestamps = false;

    /**
    * Un jeu appartient à une catégorie
    *
    * @return void
    */
    public function categorie()
    {
    return $this->belongsTo(Categorie::class);
    }
}