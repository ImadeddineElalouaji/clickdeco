<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DecoratorSubmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'telephone',
        'adresse',
        'description',
        'avatar',
        'user_id',
    ];

    public function images()
    {
        return $this->hasMany(DecoratorImage::class, 'decorator_submission_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comments()
    {
        return $this->hasMany(DecoratorComment::class);
    }

    public function specialities()
    {
        return $this->belongsToMany(Speciality::class, 'decorator_speciality');
    }
}
