<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devis extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'adresse',
        'telephone',
        'email',
        'description',
        'ville',
        'style',
        'moderniter',
        'avatar', // Add the 'avatar' column here
        'projet_picture', // Add the 'projet_picture' column here
        'budget',
    ];
    
}
