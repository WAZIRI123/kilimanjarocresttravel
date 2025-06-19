<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Package extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'slug',
        'duration',
        'short_description',
        'description',
        'featured_image',
        'price',
        'is_featured',
        'is_active',
        'sort_order',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'included_items',
        'excluded_items',
        'best_time_to_visit',
        'itineraries',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'included_items' => 'array',
        'excluded_items' => 'array',
        'itineraries' => 'array',
    ];

    /**
     * Get the URL for the featured image.
     *
     * @return string|null
     */
    public function getFeaturedImageUrlAttribute(): ?string
    {
        if (!$this->featured_image) {
            return null;
        }
        
        if (filter_var($this->featured_image, FILTER_VALIDATE_URL)) {
            return $this->featured_image;
        }
        
        return asset('storage/' . $this->featured_image);
    }

    /**
     * Get the itineraries for the package.
     */
    public function itineraries(): HasMany
    {
        return $this->hasMany(PackageItinerary::class);
    }

    /**
     * Get the gallery images for the package.
     */
    public function getGalleryAttribute(): array
    {
        if (empty($this->gallery_images)) {
            return [];
        }

        return array_map(function ($image) {
            return [
                'url' => filter_var($image, FILTER_VALIDATE_URL) ? $image : asset('storage/' . $image),
                'alt' => $this->title
            ];
        }, (array) $this->gallery_images);
    }
}
