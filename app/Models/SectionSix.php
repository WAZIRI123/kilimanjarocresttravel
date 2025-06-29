<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SectionSix extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'first_paragraph',
        'second_paragraph',
        'main_image_path',
        'main_image_alt',
        'thumbnail1_path',
        'thumbnail1_alt',
        'thumbnail2_path',
        'thumbnail2_alt',
        'thumbnail3_path',
        'thumbnail3_alt',
        'is_active'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Scope a query to only include active records.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
