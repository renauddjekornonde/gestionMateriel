<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\User;
use App\Model\Entree;
use App\Model\Affectation;
use App\Model\Materiel;

class Operation extends Model
{
    use HasFactory;

    protected $fillable=[
        'quantite',
        'typeOperation',
    ];

    //Permet de recuperer toutes les entrees dans une operation
    public function entree()
    {
        return $this->belongsTo(Entree::class);
    }

     //Permet de recuperer toutes les affectations dans une operation
     public function affectation()
     {
         return $this->belongsTo(Affectation::class);
     }

      //Permet de recuperer toutes les materiels dans une operation
    public function materiel()
    {
        return $this->belongsTo(Materiel::class, 'materiel_id');
    }

     //Permet de recuperer toutes les utilisateurs qui ont effectuer une operation
     public function user()
     {
         return $this->belongsTo(User::class);
     }
}
