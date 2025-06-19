<?php

use Illuminate\Support\Facades\Route;
use App\Models\Package;

// Test route for package with sample itinerary data
Route::get('/test/package/itinerary', function () {
    // Create a sample package with itinerary data
    $package = new Package([
        'title' => 'Sample Safari Adventure',
        'duration' => '5 Days',
        'short_description' => 'Experience the best of African wildlife',
        'description' => 'A thrilling 5-day safari adventure through the most beautiful national parks in Africa.',
        'price' => 2500.00,
        'is_featured' => true,
        'is_active' => true,
        'included_items' => [
            ['item' => 'Park fees'],
            ['item' => 'All meals'],
            ['item' => 'Professional guide']
        ],
        'excluded_items' => [
            ['item' => 'International flights'],
            ['item' => 'Travel insurance'],
            ['item' => 'Personal expenses']
        ],
        'itineraries' => [
            [
                'title' => 'Arrival and Welcome',
                'image' => 'sample-image-1.jpg',
                'descriptions' => [
                    ['content' => '<p>Arrive at the airport and transfer to your luxury lodge. Enjoy a welcome drink and briefing about your safari adventure.</p>'],
                    ['content' => '<p>Evening game drive in the nearby reserve to spot nocturnal animals.</p>']
                ],
                'tips' => [
                    'Pack warm clothing for evening game drives',
                    'Have your camera ready for wildlife sightings'
                ],
                'meta' => [
                    ['icon' => 'hotel', 'text' => 'Luxury Lodge'],
                    ['icon' => 'utensils', 'text' => 'Lunch & Dinner']
                ]
            ],
            [
                'title' => 'Full Day Game Drive',
                'image' => 'sample-image-2.jpg',
                'descriptions' => [
                    ['content' => '<p>Early morning game drive to spot the Big Five. Return to the lodge for brunch and some leisure time.</p>'],
                    ['content' => '<p>Afternoon game drive followed by a sundowner at a scenic viewpoint.</p>']
                ],
                'tips' => 'Bring binoculars, Stay hydrated, Wear neutral colors',
                'meta' => [
                    ['icon' => 'binoculars', 'text' => 'Game Drives'],
                    ['icon' => 'sun', 'text' => 'Full Day']
                ]
            ]
        ]
    ]);

    return view('package', [
        'package' => $package,
        'relatedPackages' => []
    ]);
})->name('test.package.itinerary');
