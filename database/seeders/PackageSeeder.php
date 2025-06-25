<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $packages = [
            [
                'title' => 'Great Migration Safari',
                'duration' => '7 Days',
                'overview' => 'Experience the spectacular Great Migration in Serengeti National Park, one of the most incredible wildlife events on the planet.',
                'short_description' => 'Witness the Great Migration in Serengeti and explore the Ngorongoro Crater on this 7-day safari adventure.',
                'category' => 'safari',
                'country' => 'Tanzania',
                'featured_image' => 'safari/great-migration.jpg',
                'price' => 2950,
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 1,
                'meta_title' => 'Great Migration Safari - 7 Days',
                'meta_description' => 'Experience the Great Migration in Serengeti National Park on this 7-day safari adventure.',
                'included_items' => json_encode([
                    'All park fees and conservation fees',
                    'Full board accommodation',
                    'Professional English-speaking guide',
                    '4x4 safari vehicle with pop-up roof',
                    'All game drives as per itinerary'
                ]),
                'excluded_items' => json_encode([
                    'International flights',
                    'Visa fees',
                    'Travel insurance',
                    'Tips and gratuities'
                ]),
                'best_time_to_visit' => 'June to October',
                'itineraries' => json_encode([
                    [
                        'day' => 'Day 1',
                        'title' => 'Arrival in Arusha',
                        'description' => 'Arrive at Kilimanjaro International Airport and transfer to your lodge in Arusha for dinner and overnight.',
                        'image' => 'safari/arusha-arrival.jpg'
                    ],
                    [
                        'day' => 'Day 2-3',
                        'title' => 'Serengeti National Park',
                        'description' => 'Two full days exploring Serengeti and witnessing the Great Migration. Game drives at dawn and dusk.',
                        'image' => 'safari/serengeti-migration.jpg'
                    ]
                ])
            ],
            [
                'title' => 'Kilimanjaro Climb - Machame Route',
                'duration' => '8 Days',
                'overview' => 'Conquer Africa\'s highest peak via the scenic Machame Route, also known as the "Whiskey Route".',
                'short_description' => '8-day trek to the summit of Mount Kilimanjaro via the beautiful Machame Route.',
                'category' => 'trekking',
                'country' => 'Tanzania',
                'featured_image' => 'trekking/kilimanjaro-machame.jpg',
                'price' => 2450,
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 2,
                'meta_title' => 'Kilimanjaro Climb - Machame Route 8 Days',
                'meta_description' => 'Climb Mount Kilimanjaro via the scenic Machame Route on this 8-day trekking adventure.',
                'included_items' => json_encode([
                    'All park fees and rescue fees',
                    'Professional mountain guides and porters',
                    'All meals during the climb',
                    'Mountain tents and sleeping mats',
                    'Airport transfers'
                ]),
                'excluded_items' => json_encode([
                    'International flights',
                    'Visa fees',
                    'Personal climbing gear',
                    'Tips for guides and porters'
                ]),
                'best_time_to_visit' => 'January to March, June to October',
                'itineraries' => json_encode([
                    [
                        'day' => 'Day 1',
                        'title' => 'Machame Gate to Machame Camp',
                        'description' => 'Hike through the rainforest to Machame Camp (3,000m).',
                        'image' => 'trekking/machame-gate.jpg'
                    ],
                    [
                        'day' => 'Day 2',
                        'title' => 'Machame Camp to Shira Camp',
                        'description' => 'Ascend through the heath and moorland to Shira Camp (3,840m).',
                        'image' => 'trekking/shira-camp.jpg'
                    ]
                ])
                ],
                
                    [
                        'title' => 'Kilimanjaro Climb - Machame Route',
                        'duration' => '8 Days',
                        'overview' => 'Conquer Africa\'s highest peak via the scenic Machame Route, also known as the "Whiskey Route".',
                        'short_description' => '8-day trek to the summit of Mount Kilimanjaro via the beautiful Machame Route.',
                        'category' => 'trekking',
                        'country' => 'Tanzania',
                        'featured_image' => 'trekking/kilimanjaro-machame.jpg',
                        'price' => 2450,
                        'is_featured' => true,
                        'is_active' => true,
                        'sort_order' => 2,
                        'meta_title' => 'Kilimanjaro Climb - Machame Route 8 Days',
                        'meta_description' => 'Climb Mount Kilimanjaro via the scenic Machame Route on this 8-day trekking adventure.',
                        'included_items' => json_encode([
                            'All park fees and rescue fees',
                            'Professional mountain guides and porters',
                            'All meals during the climb',
                            'Mountain tents and sleeping mats',
                            'Airport transfers'
                        ]),
                        'excluded_items' => json_encode([
                            'International flights',
                            'Visa fees',
                            'Personal climbing gear',
                            'Tips for guides and porters'
                        ]),
                        'best_time_to_visit' => 'January to March, June to October',
                        'itineraries' => json_encode([
                            [
                                'day' => 'Day 1',
                                'title' => 'Machame Gate to Machame Camp',
                                'description' => 'Hike through the rainforest to Machame Camp (3,000m).',
                                'image' => 'trekking/machame-gate.jpg'
                            ],
                            [
                                'day' => 'Day 2',
                                'title' => 'Machame Camp to Shira Camp',
                                'description' => 'Ascend through the heath and moorland to Shira Camp (3,840m).',
                                'image' => 'trekking/shira-camp.jpg'
                            ]
                        ])
                    ]
        ];


        foreach ($packages as $packageData) {
            // Generate slug from title
            $packageData['slug'] = Str::slug($packageData['title']);
            
            // Create the package
            Package::create($packageData);
        }
    }
}
