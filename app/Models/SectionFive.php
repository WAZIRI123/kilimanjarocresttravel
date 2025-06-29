<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectionFive extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'first_paragraph',
        'second_paragraph',
        'third_paragraph',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];
}
