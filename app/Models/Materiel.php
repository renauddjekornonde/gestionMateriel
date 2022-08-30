<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materiel extends Model
{
    use HasFactory;

    protected $fillable =[
        'matricule',
        'intitule',
        'quantite',
        'description',
    ];

 // cette fonction permet de repucerer les categories
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
