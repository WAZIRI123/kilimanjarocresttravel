<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SectionNine extends Model
{
    protected $table = 'section_nine';
    
    protected $fillable = [
        'title',
        'image',
        'caption',
        'image2',
        'caption2',
        'image3',
        'caption3',
        'image4',
        'caption4',
        'sort_order',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function getImagesAttribute()
    {
        $images = [];
        
        for ($i = 1; $i <= 4; $i++) {
            $imageField = 'image' . ($i === 1 ? '' : $i);
            $captionField = 'caption' . ($i === 1 ? '' : $i);
            
            if ($this->$imageField) {
                $images[] = [
                    'image' => $this->$imageField,
                    'caption' => $this->$captionField
                ];
            }
        }
        
        return $images;
    }
}
