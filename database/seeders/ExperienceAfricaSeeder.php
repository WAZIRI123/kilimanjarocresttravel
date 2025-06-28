<?php

namespace Database\Seeders;

use App\Models\ExperienceAfrica;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceAfricaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ExperienceAfrica::create([
            'heading' => "Experience Tanzania's Wild Beauty with Stan Safaris",
            'subheading' => "Embark on a safari in Tanzania with Stan Safaris, your gateway to the Serengeti, Ngorongoro Crater, Mount Kilimanjaro, and beyond. We offer private guided tours, custom itineraries, and premium lodges, all designed for unforgettable wildlife encounters and seamless comfort. Whether you're chasing the Great Migration or relaxing in Zanzibar, your journey with us is crafted to impress.",
            'benefits' => [
                'Tailor-Made Safari',
                'Expert Local Guides',
                'Big 5 Game Viewing'
            ],
            'button_text' => 'Learn More',
            'button_link' => '/about',
            'image_path' => 'images/girrafe1.png',
            'is_active' => true
        ]);
    }
}
