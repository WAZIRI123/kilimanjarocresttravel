<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoSection extends Model
{
    protected $fillable = [
        'title',
        'video_id',
        'thumbnail_url',
        'is_active'
    ];
    
    protected $casts = [
        'is_active' => 'boolean'
    ];
}
