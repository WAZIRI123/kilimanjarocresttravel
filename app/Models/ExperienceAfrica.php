<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExperienceAfrica extends Model
{
    protected $fillable = [
        'heading',
        'subheading',
        'benefits',
        'button_text',
        'button_link',
        'image_path',
        'is_active'
    ];

    protected $casts = [
        'benefits' => 'array',
        'is_active' => 'boolean'
    ];
}
