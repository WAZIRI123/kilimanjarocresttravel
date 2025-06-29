<?php

namespace Database\Seeders;

use App\Models\DiscoverAfricaBest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiscoverAfricaBestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing records
        DiscoverAfricaBest::truncate();

        // Create initial data
        DiscoverAfricaBest::create([
            'heading' => 'Discover Unforgettable and      Thrilling  Safari  Adventures <strong> of Africa</strong>',
            'subheading' => 'Step into the wild with Stan Safaris, where every journey brings you face-to-face with Africa\'s most iconic landscapes and wildlife. From the endless plains of the Serengeti to the majestic Ngorongoro Crater, we deliver curated safari experiences designed for unforgettable moments.',
            'image1_path' => 'images/safari1.png',
            'image1_alt' => 'Safari Vehicle During Game Drive at Serengeti with Stan Safaris',
            'image2_path' => 'images/safari8.png',
            'image2_alt' => 'Luxury Lodge - Stan Safaris partner',
            'image3_path' => 'images/safari4.png',
            'image3_alt' => 'A cheetah on top of the safari vehicle during Game Drive in Masai Mara, Kenya with Stan Safaris',
            'is_active' => true,
        ]);
    }
}
