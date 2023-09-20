<?php

namespace App\Models;
use App\Models\DecoratorSubmission;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DecoratorImage extends Model
{
    use HasFactory;

    protected $fillable = ['path'];

    public function submission()
    {
        // return $this->belongsTo(DecoratorSubmission::class);
        return $this->belongsTo(DecoratorSubmission::class, 'decorator_submission_id');
    }
}
