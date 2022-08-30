<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable =[
        'intitule',
    ];

     //Permet de recuperer tous les materiels de la categorie
     public function materiel()
     {
         return $this->hasMany(Materiel::class);
     }
}
