<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DiscoverAfricaBest extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'heading',
        'subheading',
        'image1_path',
        'image1_alt',
        'image2_path',
        'image2_alt',
        'image3_path',
        'image3_alt',
        'is_active'
    ];

    /**
     * Scope a query to only include active records.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
