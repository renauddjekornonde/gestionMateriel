<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Materiel;

class Category extends Model
{
    use HasFactory;

    protected $fillable =[
        'intitule',
    ];

     //Permet de recuperer tous les materiels d'une categorie
     public function materiels()
     {
         return $this->hasMany(Materiel::class);
     }
}
