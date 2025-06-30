<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teamMembers = [
            [
                'name' => 'James Mwita',
                'title' => 'Head Safari Guide',
                'image' => 'images/team.png',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Neema Joseph',
                'title' => 'Cultural Specialist',
                'image' => 'images/team.png',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Rajabu Ally',
                'title' => 'Wildlife Photographer',
                'image' => 'images/team.png',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Amina Hassan',
                'title' => 'Adventure Specialist',
                'image' => 'images/team.png',
                'sort_order' => 4,
                'is_active' => true,
            ],
        ];

        foreach ($teamMembers as $member) {
            \App\Models\TeamMember::create($member);
        }
    }
}
