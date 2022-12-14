<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Model\Materiel;

class Fournisseur extends Model
{
    use HasFactory;

    protected $fillable=[
        'nom',
        'prenom',
        'telephone',
        'boutique',
    ];

     //Permet de recuperer toutes les materiels fournis par un fournisseur
     public function materiels()
     {
         return $this->hasMany(Materiel::class);
     }
 //Permet de recuperer toutes les materiels fournis par un fournisseur
 public function entrees()
 {
     return $this->hasMany(Entree::class);
 }

}
