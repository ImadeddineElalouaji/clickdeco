<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
     * Define the relationship between Speciality and DecoratorSubmission models.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function decoratorSubmissions()
    {
        return $this->belongsToMany(DecoratorSubmission::class, 'decorator_speciality', 'speciality_id', 'decorator_submission_id');
    }
    public function decorators()
{
    return $this->belongsToMany(DecoratorSubmission::class, 'decorator_speciality');
}

}
