<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Model\Operation;

class Entree extends Model
{
    use HasFactory;

    protected $fillable=[
        // 'matricule',
        'fournisseur_id',
    ];



     //Permet de recuperer toutes les entrees dans une operation
     public function operations()
     {
         return $this->hasMany(Operation::class);
     }

          //Permet de recuperer toutes les entrees d'un fournisseur
          public function fournisseurs()
          {
              return $this->hasMany(Fournisseur::class);
          }


}
