<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectionSeven extends Model
{
    protected $fillable = [
        'main_heading',
        'description',
        'left_image',
        'right_image',
        'is_active',
        'sort_order'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'main_heading' => 'string',
    ];

    protected $appends = ['main_heading_html'];

    public function getMainHeadingHtmlAttribute()
    {
        return $this->main_heading;
    }

    public function getLeftImageUrlAttribute()
    {
        return asset('storage/' . $this->left_image);
    }

    public function getRightImageUrlAttribute()
    {
        return asset('storage/' . $this->right_image);
    }
}
