<?php

namespace Database\Seeders;

use App\Models\SectionTen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionTenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'John Doe',
                'location' => 'Nairobi, Kenya',
                'testimonial' => 'Our safari experience was absolutely amazing! The guides were knowledgeable and the accommodations were top-notch. We saw the Big Five and so much more. Highly recommended!',
                'image' => 'testimonials/john-doe.jpg',
                'is_active' => true,
                'order' => 1,
            ],
            [
                'name' => 'Jane Smith',
                'location' => 'Cape Town, South Africa',
                'testimonial' => 'The attention to detail and personalized service made our trip unforgettable. The team went above and beyond to ensure we had the best experience possible.',
                'image' => 'testimonials/jane-smith.jpg',
                'is_active' => true,
                'order' => 2,
            ],
            [
                'name' => 'Michael Johnson',
                'location' => 'London, UK',
                'testimonial' => 'As a wildlife photographer, I was blown away by the access and opportunities provided. The guides knew exactly where to find the best shots.',
                'image' => 'testimonials/michael-johnson.jpg',
                'is_active' => true,
                'order' => 3,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            SectionTen::create($testimonial);
        }
    }
}
