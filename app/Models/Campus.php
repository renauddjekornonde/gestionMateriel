<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Model\Salle;

class Campus extends Model
{
    use HasFactory;

    protected $fillable=[
        'intitule',
        'lieu',
        'telephone',
    ];

    //Permet de recuperer toutes les salles des campus car la relation est de un à plusieurs
    public function salles()
    {
        return $this->hasMany(Salle::class);
    }
}
