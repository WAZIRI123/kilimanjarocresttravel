<?php

namespace Database\Seeders;

use App\Models\SectionSix;
use Illuminate\Database\Seeder;

class SectionSixSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SectionSix::create([
            'title' => 'Where Wilderness <strong>Meets Comfort</strong>',
            'first_paragraph' => 'Retreat to Africa\'s untouched wilderness in your own private villa, lodge, or designer tented suite each crafted for comfort, privacy, and awe-inspiring views. From the moment you arrive, nature surrounds you: lions echo in the distance, elephants roam freely at dusk, and lanterns guide you to candlelit dinners beneath the stars.',
            'second_paragraph' => 'Enjoy world-class amenities, gourmet cuisine, and bespoke service all set against Africa\'s most breathtaking backdrops. This is more than a safari. It\'s your exclusive sanctuary where adventure meets elegance.',
            'main_image_path' => 'images/one-nature-nyaruswiga-lodge-serengeti.jpg',
            'main_image_alt' => 'one-nature-nyaruswiga-lodge-serengeti',
            'thumbnail1_path' => 'images/selous-kinga-lodge-8-768x512.jpg',
            'thumbnail1_alt' => 'selous-kinga-lodge',
            'thumbnail2_path' => 'images/mount climanjaro.webp',
            'thumbnail2_alt' => 'mount-climanjaro',
            'thumbnail3_path' => 'images/village-visit-04.jpg',
            'thumbnail3_alt' => 'village-visit',
            'is_active' => true,
        ]);
    }
}
