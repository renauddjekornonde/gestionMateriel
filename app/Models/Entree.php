<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Operation;

class Entree extends Model
{
    use HasFactory;

    protected $fillable=[
        'matricule',
    ];

    //Permet de recuperer les entrees
    public function operationEntree()
    {
        return $this->belongsTo(Operation::class);
    }

     //Permet de recuperer toutes les entrees dans une operation
     public function operationEntrees()
     {
         return $this->hasMany(Operation::class);
     }
 
     
}