<?php

namespace Database\Seeders;

use App\Models\SectionNine;
use Illuminate\Database\Seeder;

class SectionNineSeeder extends Seeder
{
    public function run()
    {
        SectionNine::firstOrCreate(
            ['title' => 'Our Activities'],
            [
                'image' => 'images/safari.jpeg',
                'caption' => 'Wildlife, Safari',
                'image2' => 'images/balloon-safari-scaled.jpg',
                'caption2' => 'Baloon, Safari',
                'image3' => 'images/Maasai-Cultural.jpeg',
                'caption3' => 'Cultural, Tour',
                'image4' => 'images/Crater-3.jpg',
                'caption4' => 'Ngorongoro, Crater',
                'image5' => 'images/bike.jpg',
                'caption5' => 'Biking, Tour',
                'image6' => 'images/walking.jpg',
                'caption6' => 'Walking, Tour',
                'is_active' => true
            ]
        );
    }
}
