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
        'overview',
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
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'price' => 'decimal:2',
        'sort_order' => 'integer',
        'included_items' => 'array',
        'excluded_items' => 'array',
        'itineraries' => 'array',
        'included_items' => 'array',
        'excluded_items' => 'array',
        'itineraries' => 'array',
        'meta_keywords' => 'array',
    ];

    /**
     * Prepare a date for array / JSON serialization.
     *
     * @param  \DateTimeInterface  $date
     * @return string
     */
    protected function serializeDate(\DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    /**
     * Convert the model instance to an array.
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'duration' => $this->duration,
            'short_description' => $this->short_description,
            'description' => $this->description,
            'featured_image' => $this->featured_image,
            'price' => $this->price,
            'is_featured' => $this->is_featured,
            'is_active' => $this->is_active,
            'sort_order' => $this->sort_order,
            'included_items' => $this->included_items,
            'excluded_items' => $this->excluded_items,
            'best_time_to_visit' => $this->best_time_to_visit,
            'meta_title' => $this->meta_title,
            'meta_description' => $this->meta_description,
            'meta_keywords' => $this->meta_keywords,
            'itineraries' => $this->itineraries,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }

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
