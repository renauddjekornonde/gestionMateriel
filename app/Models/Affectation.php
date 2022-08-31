<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Operation;
use App\Model\Salle;

class Affectation extends Model
{
    use HasFactory;

     // cette fonction permet de repucerer les salles
     public function salleAffectation()
     {
         return $this->belongsTo(Salle::class);
     }

     //Permet de recuperer toutes les affectations dans une operation
     public function operationAffectations()
     {
         return $this->hasMany(Operation::class);
     }

}
