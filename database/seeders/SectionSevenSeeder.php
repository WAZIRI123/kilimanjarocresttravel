<?php

namespace Database\Seeders;

use App\Models\SectionSeven;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSevenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SectionSeven::create([
            'main_heading' => 'Beyond <strong>Expectation</strong>',
            'description' => 'Your ultimate African safari journey begins here. A dream African Safari.',
            'left_image' => 'images/maasaitz.jpg',
            'right_image' => 'images/Child-Friendly-copy.webp',
            'is_active' => true,
            'sort_order' => 1,
        ]);
    }
}
