<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SectionTen extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'location',
        'testimonial',
        'image',
        'is_active',
        'order'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'order' => 'integer'
    ];
}
