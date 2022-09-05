<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Campus;
use App\Model\Affectation;

class Salle extends Model
{
    use HasFactory;

    protected $fillable =[
        'intitule',
    ];



 // cette fonction permet de repucerer les categories
    public function campus()
    {
        return $this->belongsTo(Campus::class);
    }

    // cette fonction permet de repucerer les affectations de chaque salle
    public function affectations()
    {
        return $this->hasMany(Affectation::class);
    }
}
