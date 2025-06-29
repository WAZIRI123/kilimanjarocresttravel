<?php

namespace Database\Seeders;

use App\Models\SectionFive;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionFiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SectionFive::create([
            'title' => 'Our Story',
            'subtitle' => 'STAN SAFARIS',
            'first_paragraph' => 'Born from a deep love for Africa\'s wild beauty and rich cultures, Stan Safaris was founded in Tanzania by locals. Our mission is to share the real Africa with the world authentically, responsibly, and memorably. We started by guiding small groups through Tanzania\'s national parks and have grown into a trusted safari company offering tailor-made adventures across East and West Africa. Our roots remain grounded in local knowledge, driven by passion, and committed to delivering deeply personal and enriching travel experiences.',
            'second_paragraph' => 'As Stan Safaris grew, we expanded our vision by building Selous Kinga Lodge in the Selous Game Reserve for a true wilderness escape, and establishing Kinga Homes in Moshi, the gateway to Mount Kilimanjaro.',
            'third_paragraph' => 'Our properties offer comfort and a genuine connection to Africa. As storytellers, hosts, and guardians of the natural world, Stan Safaris believes travel should be meaningful for guests, communities, and the land. Our story is Africa\'s; now, it\'s yours to write. Come experience it with us.',
            'is_active' => true
        ]);
    }
}
