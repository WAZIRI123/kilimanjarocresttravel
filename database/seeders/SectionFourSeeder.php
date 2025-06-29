<?php

namespace Database\Seeders;

use App\Models\SectionFour;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionFourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SectionFour::create([
            'title' => 'Join the movement, <strong>Travel with purpose.</strong>',
            'description' => 'Every journey with Stan Safari does more than show you Africa\'s beauty it helps protect it. Our ethical safaris directly support wildlife conservation and uplift the local communities we call home.',
            'main_image_path' => 'images/lions-section-four.png',
            'main_image_alt' => 'Wildlife in the wild',
            'thumbnail1_path' => 'images/balloon-safari-scaled.jpg',
            'thumbnail1_alt' => 'Hot air balloon safari',
            'thumbnail2_path' => 'images/maasaitz.jpg',
            'thumbnail2_alt' => 'Maasai culture experience',
            'thumbnail3_path' => 'images/chetah.jpg',
            'thumbnail3_alt' => 'Cheetah in the wild',
            'is_active' => true,
        ]);
    }
}
