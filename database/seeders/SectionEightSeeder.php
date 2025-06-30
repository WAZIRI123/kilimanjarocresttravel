<?php

namespace Database\Seeders;

use App\Models\SectionEight;
use Illuminate\Database\Seeder;

class SectionEightSeeder extends Seeder
{
    public function run(): void
    {
        SectionEight::create([
            'title' => 'Curated African Escapes <br> <strong>Curated for You</strong>',
            'subtitle' => 'At Stan Safari, every journey is tailored to immerse you in Africa\'s beauty, culture, and wildlife with comfort and exclusivity at the core.' . "\n\n" . 'From thrilling safaris to cultural escapes, our curated experiences include:',
            'destinations' => [
                
                [
                    'name' => 'Tanzania',
                    'description' => 'Experience the vast Serengeti and the majestic Ngorongoro Crater.'
                ],
                [
                    'name' => 'Zanzibar',
                    'description' => "Experience the vibrant culture and rich history of Zanzibar."
                ],
                [
                    'name' => 'Kenya',
                    'description' => 'Discover Maasai Mara and the Great Migration'
                ],
                [
                    'name' => 'Uganda',
                    'description' => "Experience the gorilla trekking in Uganda's lush rainforests."
                ],
                [
                    'name' => 'South Africa',
                    'description' => "Big Five thrills meet Cape Town views"
                ],
              
            ],
            'is_active' => true,
            'sort_order' => 8
        ]);
    }
}
