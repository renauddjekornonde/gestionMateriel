<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\category;
use App\Model\Operation;
use App\Model\Fournisseur;

class Materiel extends Model
{
    use HasFactory;

    protected $fillable =[
        'matricule',
        'intitule',
        'description',
    ];

 // cette fonction permet de repucerer les categories
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // cette fonction permet de repucerer les materiels dans une operations
    public function operations()
    {
        return $this->hasMany(Operation::class, 'materiel_id', 'id');
    }

    // cette fonction permet de repucerer les fournisseurs
    public function fournisseur()
    {
        return $this->belongsTo(Fournisseur::class);
    }
}
