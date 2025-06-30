<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TeamMember>
 */
class TeamMemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $titles = [
            'Safari Guide', 'Wildlife Expert', 'Tour Coordinator', 'Adventure Specialist',
            'Cultural Guide', 'Photography Expert', 'Expedition Leader', 'Conservationist'
        ];

        return [
            'name' => $this->faker->name,
            'title' => $this->faker->randomElement($titles),
            'image' => 'team/team-' . $this->faker->numberBetween(1, 10) . '.jpg',
            'sort_order' => $this->faker->numberBetween(0, 100),
            'is_active' => $this->faker->boolean(90), // 90% chance of being active
        ];
    }
}
