<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SectionEight extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'destinations',
        'is_active',
        'sort_order'
    ];

    protected $casts = [
        'destinations' => 'array',
        'is_active' => 'boolean'
    ];

    /**
     * Scope a query to only include active sections.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}