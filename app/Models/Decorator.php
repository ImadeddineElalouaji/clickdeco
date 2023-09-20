<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Decorator extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'speciality',
        'city',
        'photo',
        'professional_description',
        'creations',
    ];

    protected $casts = [
        'creations' => 'array',
    ];
    public function comments()
    {
        return $this->hasMany(DecoratorComment::class);
    }

    public function getCommentsCountAttribute()
    {
        return $this->comments->count();
    }
}
