<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
