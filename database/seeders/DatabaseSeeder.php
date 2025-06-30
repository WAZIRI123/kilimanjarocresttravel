<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create test user
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Seed packages and content
        $this->call([
            PackageSeeder::class,
            ExperienceAfricaSeeder::class,
            VideoSectionSeeder::class,
            DiscoverAfricaBestSeeder::class,
            SectionFourSeeder::class,
            SectionFiveSeeder::class,
            SectionSixSeeder::class,
            SectionEightSeeder::class,
            SectionSevenSeeder::class,
        ]);
    }
}
