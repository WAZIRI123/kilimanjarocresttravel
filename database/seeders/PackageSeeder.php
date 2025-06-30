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
                'title' => '7 Days: Wild & Peaceful Southern Tanzania\'s Best Safari Experience',
                'slug' => '7-days-wild-peaceful-southern-tanzania-safari',
                'duration' => '7 Days',
                'subtitle' => 'A Taste of Tanzania\'s Luxury Southern Safari – Discover Africa\'s Untouched Wilderness',
                'short_description' => 'Experience the untouched wilderness of Southern Tanzania with visits to Ruaha National Park, Nyerere National Park, and a relaxing beach stay in Zanzibar.',
                'overview' => '<p>Get ready for an unforgettable luxury safari experience in Southern Tanzania, where you\'ll explore some of the most untouched and wild landscapes in Africa. This safari combines exclusive game viewing, semi-luxury lodges, and peaceful beach moments, offering you the best of both adventure and relaxation in one unforgettable trip.</p>',
                'best_time_to_visit' => '<p><strong>June-October (Best for wildlife viewing)</strong></p>',
                'featured_image' => 'images/packages/sourthern safaris.webp',
                'price' => 3200,
                'sale_price' => null,
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 2,
                'category' => 'safari',
                'country' => 'Tanzania',
                'views' => 0,
                'likes' => 0,
                'meta_title' => '7 Days Wild & Peaceful Southern Tanzania Safari',
                'meta_description' => 'Experience the best of Southern Tanzania with this 7-day luxury safari, featuring Ruaha National Park, Nyerere National Park, and Zanzibar beach relaxation.',
                'meta_keywords' => ['tanzania safari', 'southern tanzania', 'ruaha national park', 'nyerere national park', 'zanzibar beach', 'luxury safari'],
                'itineraries' => [
                    [
                        'title' => 'Day 1 & 2: Nyerere National Park',
                        'image' => 'packages/Arrival-at-Kili-Airport.webp',
                        'descriptions' => [
                            ['content' => '<p>Fly into Nyerere National Park (formerly Selous Game Reserve), one of the largest protected wildlife areas in Africa. This hidden gem offers a truly authentic safari experience with its diverse landscapes, from miombo woodlands and savannahs to swamps and riverine forests, all teeming with life.</p>'],
                            ['content' => '<p>Enjoy game drives in this unspoiled wilderness, home to elephants, lions, hippos, crocodiles, and over 400 bird species. The park\'s low visitor numbers and off-road game drives ensure an up-close and personal wildlife experience.</p>']
                        ],
                        'tips' => 'Accommodation: Selous Kinga Lodge | Meal Plan: Game Package'
                    ],
                    [
                        'title' => 'Day 3 & 4: Ruaha National Park',
                        'image' => 'packages/Tarangire-NP-1.jpeg',
                        'descriptions' => [
                            ['content' => '<p>Travel to Ruaha National Park, Tanzania\'s largest national park and home to the highest concentration of African elephants in East Africa. The dramatic landscape of semi-arid savannahs, baobab trees, acacias, and lush riverine forests creates a stunning backdrop for your safari.</p>'],
                            ['content' => '<p>Enjoy game drives along the Great Ruaha and Mzombe Rivers, where wildlife gathers during the dry season. The park is a haven for over 570 species of birds and offers excellent opportunities to spot lions, leopards, and other predators in action.</p>']
                        ],
                        'tips' => 'Meal Plan: Game Package'
                    ],
                    [
                        'title' => 'Day 5 & 6: Zanzibar Island',
                        'image' => 'packages/zanzibar02.jpg',
                        'descriptions' => [
                            ['content' => '<p>Fly to the beautiful island of Zanzibar for some well-deserved relaxation. Unguja, commonly known as Zanzibar, is the largest and most developed island in the Zanzibar Archipelago, offering a perfect blend of beach relaxation and cultural experiences.</p>'],
                            ['content' => '<p>Explore Stone Town, a UNESCO World Heritage Site, with its narrow winding streets, ancient architecture, and vibrant markets that showcase the unique mix of Swahili, Arab, Indian, and European influences. Enjoy the pristine white-sand beaches and crystal-clear waters of the Indian Ocean.</p>']
                        ],
                        'tips' => 'Accommodation: Beach Resort | Meal Plan: Breakfast & Dinner'
                    ],
                    [
                        'title' => 'Day 7: Departure',
                        'image' => null,
                        'descriptions' => [
                            ['content' => '<p>After breakfast, enjoy some final moments on the beach before being transferred to the airport for your departure flight. Take with you unforgettable memories of Tanzania\'s wild landscapes, incredible wildlife, and the warm hospitality of its people.</p>']
                        ],
                        'tips' => 'Transfer to Zanzibar International Airport (ZNZ)'
                    ]
                ],
                'included_items' => [
                    ['item' => 'All park entry and conservation fees'],
                    ['item' => 'All meals as specified in the itinerary'],
                    ['item' => 'Accommodation as per the program'],
                    ['item' => 'Professional English-speaking safari guide'],
                    ['item' => 'All game drives in 4x4 safari vehicles'],
                    ['item' => 'Domestic flights as per itinerary'],
                    ['item' => 'All transfers as per the program'],
                    ['item' => 'Bottled drinking water during game drives'],
                    ['item' => 'All government taxes and levies']
                ],
                'excluded_items' => [
                    ['item' => 'International flights'],
                    ['item' => 'Travel insurance'],
                    ['item' => 'Visa fees'],
                    ['item' => 'Tips and gratuities'],
                    ['item' => 'Alcoholic and non-alcoholic drinks'],
                    ['item' => 'Personal expenses'],
                    ['item' => 'Optional activities not mentioned in the program'],
                    ['item' => 'Any other items not mentioned as included']
                ],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => '7 Days Marangu Route',
                'slug' => '7-days-marangu-route',
                'duration' => '7 Days',
                'subtitle' => '',
                'short_description' => 'Many hikers believe that the Marangu route is the easiest route to Uhuru peak, since it is the only route which can be hiked in 5 days (making it the cheapest option)',
                'overview' => '<p>Also known as the "Coca Cola route" the Marangu route is one of the most popular routes leading to the summit of Mount Kilimanjaro. Many hikers believe that the Marangu route is the easiest route to Uhuru peak, since it is the only route which can be hiked in 5 days (making it the cheapest option). However, we strongly recommend hiking the route over 6 days to increase your chances of reaching the summit successfully. Note that this is the only route that provides communal sleeping huts, equipped with beds and mattresses at every overnight site. Some basic goods such as mineral water, beer and chocolates are also sold at most sites. The Marangu route takes the same route for both ascend and descend.</p>',
                'best_time_to_visit' => '<p><strong>Dec-Mid-March / Mid-June-October</strong></p>',
                'featured_image' => 'packages/01JYVM861EZS7543BM04KRGXXN.jpg',
                'price' => 1700,
                'sale_price' => null,
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 1,
                'category' => 'kilimanjaro',
                'country' => 'Tanzania',
                'views' => 1,
                'likes' => 0,
                'meta_title' => '7 Days Marangu Route - Kilimanjaro Climb',
                'meta_description' => 'Climb Mount Kilimanjaro via the Marangu Route, also known as the "Coca Cola Route". Experience the beauty of Kilimanjaro with our expert guides.',
                'meta_keywords' => ['kilimanjaro', 'marangu route', 'mount kilimanjaro', 'tanzania', 'hiking', 'trekking'],
                'itineraries' => [
                    [
                        'title' => 'Day 1 - Airport pick-up- Drop off at hotel',
                        'image' => 'itineraries/01JYVM8644CQQ1D6M0WDKDH5VE.jpg',
                        'descriptions' => [
                            ['content' => '<p>You will be picked up by the staff of Stan Safaris from Kilimanjaro International Airport (JRO) and driven to your accommodation in Moshi. Participants will be given a short briefing for the climb the next day. Kits and the necessary equipment will be checked as well.</p>']
                        ],
                        'tips' => null
                    ],
                    [
                        'title' => 'Day 2 - Marangu Gate (1860m) – Mandara hut (2715m)',
                        'image' => 'itineraries/01JYVM864CA6XVCQZFD5WQ6FH2.jpg',
                        'descriptions' => [
                            ['content' => '<p>The drive from Moshi to the Kilimanjaro National Park gate takes about 50 minutes. The journey passes through the village of Marangu, which is located on the lower slopes of the mountain. Once you reach the park gate, all hikers are requested to sign in at the Park office and make their final preparations for the climb. Porters will be seen arranging and loading their packs, containing the food, water, cooking gas as well as most of your equipment.</p><p>From the park gate, we ascend on a cleared ridge trail through the rain forest where you will see most of Kilimanjaro\'s animals. An alternative and more scenic parallel forest trail branches off to the left a few minutes after the gate. This trail follows the edge of a stream through the undergrowth and offers you the option to rejoin the main trail either after 1.5 hours hiking, or 1 hour before Mandara hut where you will spend the night.</p><p>Mandara hut consists of a group of wooden A-framed huts in a forest clearing. Each hut features 6-8 sleeping bunks with solar generated lighting. The total capacity of the camp is 60 climbers. Water is piped into the camp from springs above and there are flush toilets behind the main hut.</p>']
                        ],
                        'tips' => 'Hiking time: 5hrs,Distance: Approximately 8.1 km,Habitat: Montane Forest'
                    ],
                    // Add other days here...
                ],
                'included_items' => [
                    ['item' => 'All Taxes/VAT'],
                    ['item' => 'All Meals (as specified in the day-by-day section)'],
                    ['item' => 'Park fees'],
                    ['item' => 'All activities (unless labeled as optional)'],
                    ['item' => 'All accommodation as stated in the itinerary'],
                    ['item' => 'A professional driver/guide'],
                    ['item' => 'All transportation (unless labeled as optional)'],
                    ['item' => 'Roundtrip airport transfer'],
                    ['item' => 'Camping Equipment'],
                    ['item' => 'Drinking water on all days'],
                    ['item' => 'Porterage']
                ],
                'excluded_items' => [
                    ['item' => 'International flights (from/to home)'],
                    ['item' => 'Sleeping Bag'],
                    ['item' => 'Additional accommodation before and at the end of the tour'],
                    ['item' => 'Tips (tipping guideline US$20.00 pp per day)'],
                    ['item' => 'Personal items (souvenirs, travel insurance, visa fees, etc.)'],
                    ['item' => 'Government imposed increase of taxes and/or park fees'],
                    ['item' => 'Alcoholic drinks'],
                    ['item' => 'Rescue Fee'],
                    ['item' => 'Climbing Gear']
                ],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => '7 Days Zanzibar Honeymoon Holiday',
                'slug' => '7-days-zanzibar-honeymoon-holiday',
                'duration' => '7 Days',
                'subtitle' => 'Create unforgettable memories with your loved one on a romantic Zanzibar beach holiday',
                'short_description' => 'A romantic getaway to Zanzibar featuring cultural tours, spice experiences, and beach relaxation at Ocean Paradise Resort.',
                'overview' => '<p>Create unforgettable memories with your loved one on a romantic Zanzibar beach holiday - a once-in-a-lifetime getaway you\'ll cherish for years to come. This carefully curated trip offers the perfect blend of relaxation, adventure, and cultural discovery, all set against the breathtaking backdrop of Zanzibar\'s white-sand beaches and turquoise waters.</p>',
                'best_time_to_visit' => '<p><strong>June-October & December-February (Best weather conditions)</strong></p>',
                'featured_image' => 'packages/zanzibar-1-7-days.webp',
                'price' => 2800,
                'sale_price' => null,
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 3,
                'category' => 'honeymoon',
                'country' => 'Tanzania',
                'views' => 0,
                'likes' => 0,
                'meta_title' => '7 Days Zanzibar Honeymoon Holiday - Romantic Getaway',
                'meta_description' => 'Experience the ultimate romantic escape with our 7-day Zanzibar honeymoon package, featuring cultural tours, spice experiences, and beachfront luxury.',
                'meta_keywords' => ['zanzibar honeymoon', 'romantic getaway', 'beach holiday', 'honeymoon package', 'zanzibar beach', 'ocean paradise resort'],
                'itineraries' => [
                    [
                        'title' => 'Day 1: Arrival in Zanzibar',
                        'image' => 'packages/Arrival-in-Zanzibar.webp',
                        'descriptions' => [
                            ['content' => '<p>Upon arrival at Zanzibar International Airport, you will be warmly welcomed and transferred to Stone Town, the historic heart and soul of the island. A designated UNESCO World Heritage Site, Zanzibar Stone Town is a living museum that has remained largely unchanged for over 200 years.</p>'],
                            ['content' => '<p>Wander through its winding alleys, explore bustling bazaars, and admire the ornate mosques and grand Arab mansions, each echoing the island\'s rich Swahili, Arab, Indian, and European influences.</p>']
                        ],
                        'tips' => 'Accommodation: Stone Town Hotel | Meal Plan: Half Board'
                    ],
                    [
                        'title' => 'Day 2: Stone Town Tour & Changuu Island',
                        'image' => 'packages/Stone Town Tour.png',
                        'descriptions' => [
                            ['content' => '<p>Immerse yourself in the rich history and culture of Zanzibar with a guided tour of Stone Town, visiting the former slave market site, Anglican Cathedral, Sultan\'s Palace, House of Wonders, Arab Fort, and Natural History Museum.</p>'],
                            ['content' => '<p>In the afternoon, take a traditional wooden boat to Changuu Island (Prison Island) to see giant Aldabra tortoises and enjoy swimming and snorkeling in the crystal-clear waters.</p>']
                        ],
                        'tips' => 'Meal Plan: Breakfast | Lunch at local restaurant (own expense)'
                    ],
                    [
                        'title' => 'Day 3: Jozani Forest & Cultural Visit',
                        'image' => 'packages/jozani forest.jpg',
                        'descriptions' => [
                            ['content' => '<p>Visit Jozani Forest, home to the rare Zanzibar Red Colobus Monkey, followed by a cultural tour of Jambiani Village. Experience traditional Swahili culture, visit a local herbalist, and learn about seaweed farming.</p>']
                        ],
                        'tips' => 'Meal Plan: Breakfast & Dinner'
                    ],
                    [
                        'title' => 'Day 4: Spice Tour & Beach Transfer',
                        'image' => 'packages/Zanzibar-Spice-Farm-Tree-Climbing-Sky.jpg',
                        'descriptions' => [
                            ['content' => '<p>Embark on a sensory journey through Kizimbani Village with the famous Zanzibar Spice Tour. Discover over 40 exotic tropical spices and fruits, including cardamom, cinnamon, cloves, and nutmeg.</p>'],
                            ['content' => '<p>In the afternoon, transfer to Pwani Mchangani Beach for your beach resort stay at Ocean Paradise Resort Zanzibar.</p>']
                        ],
                        'tips' => 'Meal Plan: Breakfast & Dinner | Accommodation: Ocean Paradise Resort'
                    ],
                    [
                        'title' => 'Day 5 & 6: Beach Relaxation',
                        'image' => 'packages/zanzibar02.jpg',
                        'descriptions' => [
                            ['content' => '<p>Spend two full days relaxing at the beautiful Pwani Mchangani Beach. Enjoy the resort\'s facilities, including the largest swimming pool in Zanzibar, or participate in optional water sports like snorkeling, kayaking, and windsurfing (at extra cost).</p>'],
                            ['content' => '<p>For a special romantic experience, arrange for a beachside candlelit dinner (additional cost).</p>']
                        ],
                        'tips' => 'Meal Plan: Breakfast & Dinner | Optional activities available at extra cost'
                    ],
                    [
                        'title' => 'Day 7: Departure',
                        'image' => 'packages/Flight-home-from-Zanzibar-2.webp',
                        'descriptions' => [
                            ['content' => '<p>After breakfast, enjoy some final moments by the beach before being transferred to Zanzibar International Airport for your departure flight, taking with you unforgettable memories of your romantic Zanzibar getaway.</p>']
                        ],
                        'tips' => 'Check-out time is usually 10:00 AM | Airport transfer included'
                    ]
                ],
                'included_items' => [
                    ['item' => '6 nights accommodation in selected hotels/resorts'],
                    ['item' => 'Meal plan as specified in the itinerary'],
                    ['item' => 'All airport and inter-hotel transfers'],
                    ['item' => 'Stone Town historical tour'],
                    ['item' => 'Boat trip to Changuu Island'],
                    ['item' => 'Jozani Forest tour'],
                    ['item' => 'Spice tour in Kizimbani Village'],
                    ['item' => 'All entrance fees to mentioned sites'],
                    ['item' => 'Professional English-speaking guide'],
                    ['item' => 'All government taxes and service charges']
                ],
                'excluded_items' => [
                    ['item' => 'International flights to/from Zanzibar'],
                    ['item' => 'Airport/Seaport tax'],
                    ['item' => 'Visa fees'],
                    ['item' => 'Travel insurance'],
                    ['item' => 'Tips and gratuities'],
                    ['item' => 'Alcoholic and non-alcoholic drinks'],
                    ['item' => 'Optional activities and water sports'],
                    ['item' => 'Personal expenses'],
                    ['item' => 'Any other items not mentioned as included']
                ],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => '8 Days Mt. Kilimanjaro Climbing Summit – Machame Route',
                'slug' => '8-days-machame-route-kilimanjaro',
                'duration' => '8 Days',
                'subtitle' => 'Kilimanjaro\'s Scenic and Challenging Adventure',
                'short_description' => 'Experience the "Whiskey Route" - one of the most scenic and rewarding paths to the summit of Mount Kilimanjaro.',
                'overview' => '<p>The Machame Route, often called the "Whiskey Route", is one of the most popular and scenic paths to climb Mount Kilimanjaro. This route is ideal for adventurous hikers seeking a more challenging and rewarding experience. Unlike the easier Marangu Route, the Machame Route features longer hiking days and steeper trails, making it best suited for climbers with some trekking or backpacking experience and a good level of fitness.</p>',
                'best_time_to_visit' => '<p><strong>Dec-Mid-March / Mid-June-October</strong></p>',
                'featured_image' => 'packages/machame-gate.webp',
                'price' => 3200,
                'sale_price' => null,
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 4,
                'category' => 'kilimanjaro',
                'country' => 'Tanzania',
                'views' => 0,
                'likes' => 0,
                'meta_title' => '8 Days Machame Route - Kilimanjaro Climb',
                'meta_description' => 'Climb Mount Kilimanjaro via the scenic Machame Route, also known as the "Whiskey Route". Experience diverse landscapes and high success rates with our expert guides.',
                'meta_keywords' => ['kilimanjaro', 'machame route', 'mount kilimanjaro', 'tanzania', 'hiking', 'trekking', 'whiskey route'],
                'itineraries' => [
                    [
                        'title' => 'Day 1: Arrival in Moshi',
                        'image' => 'packages/Arrival-at-Kili-Airport.webp',
                        'descriptions' => [
                            ['content' => '<p>Upon your arrival at Kilimanjaro International Airport (JRO), a friendly representative from Stan Safaris will be there to welcome you. You\'ll then be transferred comfortably to your hotel in Moshi, where you can relax and recover from your journey.</p>'],
                            ['content' => '<p>Attend a pre-climb briefing led by our experienced guides. During this session, we will review the Kilimanjaro trekking itinerary, discuss important safety tips, and ensure you are well-prepared for the adventure ahead.</p>']
                        ],
                        'tips' => 'Accommodation: Hotel in Moshi | Meal Plan: Dinner'
                    ],
                    [
                        'title' => 'Day 2: Machame Gate to Machame Camp',
                        'image' => 'packages/machame-gate-kilimanjaro-compressed.jpg',
                        'descriptions' => [
                            ['content' => '<p>After breakfast, drive to Machame Gate (10,000 ft) for registration. Begin your trek through lush rainforest, home to colobus monkeys and various bird species. The 6-7 hour hike covers approximately 11km to reach Machame Camp (9,840 ft).</p>']
                        ],
                        'tips' => 'Hiking: 6-7 hours | Elevation: +3,840 ft | Habitat: Rainforest'
                    ],
                    [
                        'title' => 'Day 3: Machame Camp to Shira Camp',
                        'image' => 'packages/Shira-I-26-II-Camp-sign-1.jpg',
                        'descriptions' => [
                            ['content' => '<p>Today\'s 4-6 hour hike takes you through heather and moorland zones. The trail becomes steeper as you ascend to Shira Camp (12,500 ft), offering your first clear views of Kibo Peak.</p>']
                        ],
                        'tips' => 'Hiking: 4-6 hours | Elevation: +2,660 ft | Habitat: Moorland'
                    ],
                    [
                        'title' => 'Day 4: Shira Camp to Barranco Camp via Lava Tower',
                        'image' => 'packages/Lava-Tower3ABarranco-sign-2.jpg',
                        'descriptions' => [
                            ['content' => '<p>Hike east towards Lava Tower (15,190 ft) for lunch, then descend to Barranco Camp (13,044 ft). This \'hike high, sleep low\' strategy helps with acclimatization.</p>']
                        ],
                        'tips' => 'Hiking: 6-8 hours | Elevation: +2,350 ft / -2,150 ft | Habitat: Alpine Desert'
                    ],
                    [
                        'title' => 'Day 5: Barranco Camp to Karanga Camp',
                        'image' => 'packages/karanga-camp-08-3.webp',
                        'descriptions' => [
                            ['content' => '<p>Start with a challenging scramble up the Barranco Wall, then trek through valleys and ridges to Karanga Camp (13,106 ft). This shorter day helps with acclimatization.</p>']
                        ],
                        'tips' => 'Hiking: 4-5 hours | Elevation: +62 ft | Habitat: Alpine Desert'
                    ],
                    [
                        'title' => 'Day 6: Karanga Camp to Barafu Camp',
                        'image' => 'packages/Barafu-Camp-sign-1.webp',
                        'descriptions' => [
                            ['content' => '<p>Hike to Barafu Camp (15,331 ft), your base for the summit attempt. Rest, prepare your gear, and try to get some sleep before the midnight start.</p>']
                        ],
                        'tips' => 'Hiking: 3-4 hours | Elevation: +2,225 ft | Habitat: Alpine Desert'
                    ],
                    [
                        'title' => 'Day 7: Summit Day - Barafu Camp to Uhuru Peak to Mweka Camp',
                        'image' => 'packages/01JY6HTZ1ANHVZK5VY31RJ0JB6.jpg',
                        'descriptions' => [
                            ['content' => '<p>Begin the summit attempt around midnight, reaching Stella Point (18,885 ft) at sunrise. Continue to Uhuru Peak (19,341 ft), then descend to Mweka Camp (10,065 ft).</p>']
                        ],
                        'tips' => 'Hiking: 12-16 hours | Elevation: +4,010 ft / -9,276 ft | Habitat: Arctic to Rainforest'
                    ],
                    [
                        'title' => 'Day 8: Mweka Camp to Mweka Gate',
                        'image' => 'packages/Mweka-Gate-1.webp',
                        'descriptions' => [
                            ['content' => '<p>Descend through the rainforest to Mweka Gate (5,380 ft), receive your summit certificates, and transfer back to your hotel in Moshi for celebration and rest.</p>']
                        ],
                        'tips' => 'Hiking: 3-4 hours | Elevation: -4,685 ft | Meal Plan: Breakfast & Lunch'
                    ]
                ],
                'included_items' => [
                    ['item' => 'All park entry and conservation fees'],
                    ['item' => 'Professional mountain guides, cooks, and porters'],
                    ['item' => '3 meals daily while on the mountain'],
                    ['item' => 'Pre & post-climb accommodation in Moshi'],
                    ['item' => 'Quality mountain tents and sleeping mats'],
                    ['item' => 'Emergency oxygen and first aid kit'],
                    ['item' => 'All ground transfers as per itinerary'],
                    ['item' => 'Clean, purified drinking water'],
                    ['item' => 'All government taxes and levies'],
                    ['item' => 'Summit certificate']
                ],
                'excluded_items' => [
                    ['item' => 'International flights'],
                    ['item' => 'Travel insurance'],
                    ['item' => 'Tanzania visa'],
                    ['item' => 'Personal trekking gear'],
                    ['item' => 'Tips for guides and porters'],
                    ['item' => 'Items of personal nature'],
                    ['item' => 'Alcoholic and soft drinks'],
                    ['item' => 'Additional accommodation before/after climb'],
                    ['item' => 'Sleeping bag and personal equipment']
                ],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => '7 Days Shira Route Kilimanjaro',
                'slug' => '7-days-shira-route-kilimanjaro',
                'duration' => '7 Days',
                'subtitle' => 'A Scenic High-Altitude Start to Your Kilimanjaro Trek',
                'short_description' => 'Experience the Shira Plateau, one of the most scenic and geologically fascinating areas on Mount Kilimanjaro.',
                'overview' => '<p>The Shira Plateau is one of the most scenic and geologically fascinating areas on Mount Kilimanjaro. Located on the western side of the mountain, this expansive plateau offers panoramic views of Mount Meru, the Great Rift Valley, and the surrounding highlands. Known for its dramatic landscapes and unique vegetation, Shira is a hidden gem for trekkers seeking a remote and rewarding experience.</p><p>The Shira Route is recommended only for hikers who are already acclimatized to 4,000 meters, as the journey begins at a high elevation. Depending on weather and trail conditions, trekkers may either hike or drive by 4×4 vehicle for about 30 minutes to 1 hour to reach Shira Hut (4,000 m), the first campsite on this route.</p>',
                'best_time_to_visit' => '<p><strong>Dec-Mid-March / Mid-June-October</strong></p>',
                'featured_image' => 'packages/machame-route-2.png',
                'price' => 3100,
                'sale_price' => null,
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 5,
                'category' => 'kilimanjaro',
                'country' => 'Tanzania',
                'views' => 0,
                'likes' => 0,
                'meta_title' => '7 Days Shira Route Kilimanjaro Climb - Stan Safaris',
                'meta_description' => 'Climb Kilimanjaro via the scenic Shira Route. Experience the breathtaking Shira Plateau and enjoy panoramic views of Mount Meru and the Great Rift Valley.',
                'meta_keywords' => ['kilimanjaro', 'shira route', 'mount kilimanjaro', 'tanzania', 'trekking', 'hiking', 'shira plateau'],
                'itineraries' => [
                    [
                        'title' => 'Day 1: Airport pick-up - Drop off at hotel',
                        'image' => 'packages/Arrival-at-Kili-Airport.webp',
                        'descriptions' => [
                            ['content' => '<p>You will be picked up by the staff of Stan Safaris from Kilimanjaro International Airport (JRO) and driven to your accommodation in Moshi. Participants will be given a short briefing for the climb the next day. Kits and the necessary equipment will be checked as well.</p>']
                        ],
                        'tips' => 'Accommodation: Moshi Hotel | Meal Plan: Dinner'
                    ],
                    [
                        'title' => 'Day 2: Lodge to Shira Two Camp',
                        'image' => 'packages/on-the-shira-plateau-by-brigitte-djajasasmita-in-mount-kilimanjaro_6152691_l-2.webp',
                        'descriptions' => [
                            ['content' => '<p>After breakfast, we start a long drive to Lemosho Gate where you will complete the necessary registration. Afterwards, we continue our travel up the Shira Plateau to the trailhead. You will have a short hike through the rain forest to Shira Two Camp where your tent will be pitched.</p>']
                        ],
                        'tips' => 'Hiking: 1 hour | Elevation: 1,500m to 3,850m | Habitat: Rain Forest'
                    ],
                    [
                        'title' => 'Day 3: Shira Two Camp to Barranco Camp via Lava Tower',
                        'image' => 'packages/Lava-Tower3ABarranco-sign-1.jpg',
                        'descriptions' => [
                            ['content' => '<p>From Shira Camp, the route turns east towards Kibo and you will find yourself hiking through semi-desert up to the fairly rocky conditions that surround Lava Tower at 4,600 meters (15,100 ft). After lunch, we descend approximately 650 meters to Barranco Camp. Along the way, you will have good views overlooking Western Breach and Breach Wall.</p>']
                        ],
                        'tips' => 'Hiking: 7 hours | Distance: 14-15km | Habitat: Semi-desert and rocky terrain'
                    ],
                    [
                        'title' => 'Day 4: Barranco Camp to Karanga Camp',
                        'image' => 'packages/karanga-camp-08-3.webp',
                        'descriptions' => [
                            ['content' => '<p>This is a short day meant for acclimatization. We take on a route that heads down through the Karanga Valley over intervening ridges and valleys, and then joins up with the Mweka route. The last water stop on the route is the Karranga Valley, as there is no water available at Barafu camp.</p>']
                        ],
                        'tips' => 'Hiking: 4-5 hours | Elevation: 13,000ft to 13,100ft | Habitat: Alpine Desert'
                    ],
                    [
                        'title' => 'Day 5: Karanga Camp to Barafu Camp',
                        'image' => 'packages/Barafu-Camp-sign-1.webp',
                        'descriptions' => [
                            ['content' => '<p>After breakfast, we leave Karanga and hit the junction which connects with the Mweka Trail. We continue up to the Barafu Hut. At this point, you have completed the South Circuit, which offers views of the summit from many different angles. Here we make camp, rest, enjoy dinner, and prepare for the summit day.</p>']
                        ],
                        'tips' => 'Hiking: 4-5 hours | Elevation: 13,100ft to 15,300ft | Habitat: Alpine Desert'
                    ],
                    [
                        'title' => 'Day 6: Summit Day - Barafu Camp to Uhuru Peak to Mweka Camp',
                        'image' => 'packages/Kilimanjaro-04.webp',
                        'descriptions' => [
                            ['content' => '<p>At 2am, we start our way to the summit between the Rebmann and Ratzel glaciers. We head in a northwest and ascend through heavy scree towards Stella Point on the crater rim. At Stella Point (18,600 ft), you will stop for a short rest and will be rewarded with the most magnificent sunrise (weather permitting). From Stella Point, you may encounter snow all the way on your 1-hour ascent to the summit.</p>']
                        ],
                        'tips' => 'Hiking: 7-8 hours ascent / 4-6 hours descent | Elevation: 15,300ft to 19,345ft to 10,000ft | Habitat: Arctic'
                    ],
                    [
                        'title' => 'Day 7: Mweka Camp to Arusha',
                        'image' => 'packages/Mweka-Gate-1.webp',
                        'descriptions' => [
                            ['content' => '<p>After breakfast, we continue the descent down to Mweka Park Gate to receive your summit certificates. At lower elevations, it can be wet and muddy. Gaiters and trekking poles will help. From the gate, we continue another hour to Mweka Village where our vehicle awaits to drive us back to the Hotel in Arusha.</p>']
                        ],
                        'tips' => 'Hiking: 3-4 hours | Elevation: 10,000ft to 5,400ft | Meal Plan: Breakfast & Lunch'
                    ]
                ],
                'included_items' => [
                    ['item' => 'All park entry and conservation fees'],
                    ['item' => 'Professional mountain guides, cooks, and porters'],
                    ['item' => '3 meals daily while on the mountain'],
                    ['item' => 'Pre & post-climb accommodation in Moshi'],
                    ['item' => 'Quality mountain tents and sleeping mats'],
                    ['item' => 'Emergency oxygen and first aid kit'],
                    ['item' => 'All ground transfers as per itinerary'],
                    ['item' => 'Clean, purified drinking water'],
                    ['item' => 'All government taxes and levies'],
                    ['item' => 'Summit certificate']
                ],
                'excluded_items' => [
                    ['item' => 'International flights'],
                    ['item' => 'Travel insurance'],
                    ['item' => 'Tanzania visa'],
                    ['item' => 'Personal trekking gear'],
                    ['item' => 'Tips for guides and porters'],
                    ['item' => 'Items of personal nature'],
                    ['item' => 'Alcoholic and soft drinks'],
                    ['item' => 'Additional accommodation before/after climb'],
                    ['item' => 'Sleeping bag and personal equipment']
                ],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => '8 Days/7 Nights: CLASSIC GREAT MIGRATION SAFARI TANZANIA',
                'slug' => '8-days-classic-great-migration-safari',
                'duration' => '8 Days / 7 Nights',
                'subtitle' => 'Follow the Path of the Great Migration (July - October)',
                'short_description' => 'A classic eight-day safari tour through Tanzania\'s most iconic wildlife destinations, designed to follow the path of the Great Migration as it unfolds across the region.',
                'overview' => '<p>Experience the ultimate African safari adventure with our 8-day Classic Great Migration Safari. Stay at handpicked classic safari camps known for comfort, authenticity, and breathtaking views. Each day, join expert guides and trackers on thrilling game drives, where you\'ll have the chance to encounter majestic bull elephants, elusive black rhinos, zebras, hippos, and powerful lion prides alongside countless other species in their natural habitat.</p><p>This safari combines luxury, adventure, and unbeatable wildlife viewing in some of Tanzania\'s most celebrated national parks, including the world-famous Serengeti and Ngorongoro Crater.</p>',
                'best_time_to_visit' => '<p><strong>Best Time: July - October</strong> (Great Migration Season)</p>',
                'featured_image' => 'packages/Serengetei-NP-41.webp',
                'price' => 4500,
                'sale_price' => null,
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 6,
                'category' => 'safari',
                'country' => 'Tanzania',
                'views' => 0,
                'likes' => 0,
                'meta_title' => '8 Days Classic Great Migration Safari Tanzania | Stan Safaris',
                'meta_description' => 'Experience the Great Migration on this 8-day luxury safari through Tanzania\'s most iconic parks. Witness millions of wildebeest, zebras, and predators in action during peak season.',
                'meta_keywords' => ['great migration', 'safari tanzania', 'serengeti', 'ngorongoro', 'wildebeest migration', 'african safari', 'tanzania wildlife'],
                'itineraries' => [
                    [
                        'title' => 'Day 1: Arrival at Kilimanjaro International Airport',
                        'image' => 'packages/Arrival-at-Kili-Airport.webp',
                        'descriptions' => [
                            ['content' => '<p>Upon arrival at Kilimanjaro International Airport (JRO), after finishing with customs clearance you\'ll be met by our company representative who will assist you with your luggage and transfer to your charming lodge in Arusha, where your private chalet awaits.</p>'],
                            ['content' => '<p>Arusha, known as the safari capital of Tanzania, lies at the foot of Mount Meru and serves as the ideal launch point for exploring the Northern Safari Circuit, including world-renowned destinations like the Serengeti National Park and Ngorongoro Crater.</p>']
                        ],
                        'tips' => 'Accommodation: Arusha Lodge | Meal Plan: Dinner'
                    ],
                    [
                        'title' => 'Day 2: Arusha to Ngorongoro Conservation Area',
                        'image' => 'packages/ngorongorothree.jpg',
                        'descriptions' => [
                            ['content' => '<p>Embark on a full-day private tour of the Ngorongoro Crater, a UNESCO World Heritage Site and one of Africa\'s most iconic safari destinations. This breathtaking natural wonder boasts spectacular scenery, lush landscapes, and some of the highest densities of wildlife in Africa.</p>'],
                            ['content' => '<p>Experience a vibrant wildlife paradise, where the legendary Big Five—lion, leopard, elephant, rhino, and buffalo—roam freely. Watch zebras and wildebeest graze across the open plains, and marvel at flamingos on the shimmering soda lake.</p>']
                        ],
                        'tips' => 'Accommodation: Ngorongoro Lodge | Meal Plan: Full Board'
                    ],
                    [
                        'title' => 'Day 3: Ngorongoro to Central Serengeti',
                        'image' => 'packages/01JY65ZPXZQW5BHZ3FBKF3J5RQ.png',
                        'descriptions' => [
                            ['content' => '<p>Journey to the world-famous Serengeti National Park, home to the awe-inspiring Great Migration. Over 1.5 million wildebeest and 250,000 zebra thunder across the plains each year, following the rains in search of fresh grazing.</p>'],
                            ['content' => '<p>With the guidance of experienced safari experts, explore the Serengeti\'s untamed beauty on immersive game drives, spotting lions, elephants, cheetahs, and countless bird species in their natural habitat.</p>']
                        ],
                        'tips' => 'Accommodation: Serengeti Tented Camp | Meal Plan: Full Board'
                    ],
                    [
                        'title' => 'Day 4: Full Day Game Drives in Central Serengeti',
                        'image' => 'packages/serengeti-game-drive.jpg',
                        'descriptions' => [
                            ['content' => '<p>Spend a full day exploring the Central Serengeti, known for its abundant wildlife and stunning landscapes. Enjoy morning and afternoon game drives with a break for lunch at your camp.</p>'],
                            ['content' => '<p>As night falls, gaze up at the sparkling African sky and unwind under a canopy of stars—a magical end to an unforgettable day in the wild.</p>']
                        ],
                        'tips' => 'Accommodation: Serengeti Tented Camp | Meal Plan: Full Board'
                    ],
                    [
                        'title' => 'Day 5: Central Serengeti to Northern Serengeti',
                        'image' => 'packages/serengeti-central.jpg',
                        'descriptions' => [
                            ['content' => '<p>After breakfast, check out from your lodge and drive to the northern region of Serengeti National Park, where the Great Migration will be at its peak during this season.</p>'],
                            ['content' => '<p>Spend the day on game drives, following the massive herds of wildebeest and zebra as they cross the Mara River, facing crocodile-infested waters and hungry predators in one of nature\'s most dramatic spectacles.</p>']
                        ],
                        'tips' => 'Accommodation: Northern Serengeti Camp | Meal Plan: Full Board'
                    ],
                    [
                        'title' => 'Day 6 & 7: Game Drives in Northern Serengeti',
                        'image' => 'packages/wildebeest-river-crossing-1.jpg',
                        'descriptions' => [
                            ['content' => '<p>Two full days to witness the Great Migration in the northern Serengeti. Watch in awe as thousands of wildebeest and zebras make their dramatic river crossings, while crocodiles lurk below and big cats wait on the other side.</p>'],
                            ['content' => '<p>Your expert guide will take you to the best viewing spots, sharing insights into animal behavior and the delicate ecosystem of the Serengeti.</p>']
                        ],
                        'tips' => 'Accommodation: Northern Serengeti Camp | Meal Plan: Full Board'
                    ],
                    [
                        'title' => 'Day 8: Final Game Drive & Departure',
                        'image' => 'packages/Transfer-from-NP-to-airport.webp',
                        'descriptions' => [
                            ['content' => '<p>Your last day on safari begins with an early morning game drive in the Serengeti, giving you one final opportunity to spot the Big Five and other wildlife.</p>'],
                            ['content' => '<p>After breakfast, transfer to Kogatende airstrip for your scheduled domestic flight to Kilimanjaro International Airport for your departure flight home, taking with you unforgettable memories of your African safari adventure.</p>']
                        ],
                        'tips' => 'Meal Plan: Breakfast | Transfer to Kilimanjaro International Airport'
                    ]
                ],
                'included_items' => [
                    ['item' => 'All park entry and conservation fees'],
                    ['item' => 'Professional English-speaking safari guide'],
                    ['item' => 'All game drives in 4x4 safari vehicle'],
                    ['item' => '7 nights\' accommodation in luxury lodges/tented camps'],
                    ['item' => 'All meals as specified in the itinerary'],
                    ['item' => 'Bottled water during game drives'],
                    ['item' => 'All ground transfers as per itinerary'],
                    ['item' => 'Domestic flight from Serengeti to Arusha'],
                    ['item' => 'Airport transfers on first and last day'],
                    ['item' => 'All government taxes and service charges']
                ],
                'excluded_items' => [
                    ['item' => 'International flights'],
                    ['item' => 'Tanzania visa fees'],
                    ['item' => 'Travel and medical insurance'],
                    ['item' => 'Alcoholic and soft drinks'],
                    ['item' => 'Tips for guides and camp staff'],
                    ['item' => 'Personal expenses'],
                    ['item' => 'Optional activities and excursions'],
                    ['item' => 'Items of personal nature']
                ],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => '7 Days 6 Nights Northern Tanzania Safari',
                'slug' => '7-days-northern-tanzania-safari',
                'duration' => '7 Days / 6 Nights',
                'subtitle' => 'Explore Northern Tanzania\'s Top Safari Parks',
                'short_description' => 'Embark on an unforgettable journey through Northern Tanzania\'s iconic safari destinations: Serengeti, Ngorongoro Crater, Tarangire, and the mystical Lake Natron.',
                'overview' => '<p>Experience the ultimate Tanzanian safari adventure as you witness the Great Migration, spot the Big Five, and marvel at breathtaking landscapes. This adventure offers the perfect mix of wildlife, nature, and culture, with plenty of time to explore the Serengeti, descend into the Ngorongoro Crater, roam elephant-rich Tarangire, and experience the unique beauty of Lake Natron.</p>',
                'best_time_to_visit' => '<p><strong>Best Time: Year-round, with Great Migration viewable June-October</strong></p>',
                'featured_image' => 'packages/nothern circuit.jpg',
                'price' => 3850,
                'sale_price' => null,
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 7,
                'category' => 'safari',
                'country' => 'Tanzania',
                'views' => 0,
                'likes' => 0,
                'meta_title' => '7 Days Northern Tanzania Safari | Stan Safaris',
                'meta_description' => 'Explore the best of Northern Tanzania on this 7-day safari featuring Serengeti, Ngorongoro Crater, Tarangire, and Lake Natron. Witness the Great Migration and Big Five in their natural habitat.',
                'meta_keywords' => ['tanzania safari', 'northern circuit', 'serengeti', 'ngorongoro', 'tarangire', 'lake natron', 'great migration', 'african safari'],
                'itineraries' => [
                    [
                        'title' => 'Day 1: Arrival in Arusha',
                        'image' => 'packages/Arrival-at-Kili-Airport.webp',
                        'descriptions' => [
                            ['content' => '<p>Upon arrival at Kilimanjaro International Airport and finishing with international customs, you will be picked by our representative and transferred to your hotel in Arusha for Dinner & Overnight.</p>']
                        ],
                        'tips' => 'Accommodation: Arusha Hotel | Meal Plan: Half Board'
                    ],
                    [
                        'title' => 'Day 2: Tarangire National Park',
                        'image' => 'packages/tarangire-3.webp',
                        'descriptions' => [
                            ['content' => '<p>Your safari adventure begins with a pick-up from your hotel in Arusha from there, you will drive to the stunning Tarangire National Park, known for its massive elephant herds, ancient baobab trees, and rich wildlife diversity.</p>'],
                            ['content' => '<p>As we explore the park, you\'ll have the chance to see lions, leopards, giraffes, zebras, buffaloes, antelopes, and over 500 bird species across its varied landscapes.</p>']
                        ],
                        'tips' => 'Accommodation: Tarangire Safari Lodge | Meal Plan: Full Board'
                    ],
                    [
                        'title' => 'Day 3: Lake Natron',
                        'image' => 'packages/lake natro.jpg',
                        'descriptions' => [
                            ['content' => '<p>After a hearty breakfast, begin your scenic journey to the breathtaking Lake Natron, located about four hours away in the remote northern Ngorongoro district. This striking soda lake is rich in minerals and dramatic landscapes.</p>'],
                            ['content' => '<p>In the afternoon, take part in a guided flamingo walk and bird-watching experience, where you\'ll explore the lake\'s shores and learn about its rare ecosystem.</p>']
                        ],
                        'tips' => 'Accommodation: Lake Natron Camp | Meal Plan: Full Board'
                    ],
                    [
                        'title' => 'Day 4: Central Serengeti',
                        'image' => 'packages/Serengeti-National-Park-11-1.webp',
                        'descriptions' => [
                            ['content' => '<p>After breakfast, set off to the Central Serengeti. As you enter the park, enjoy an exciting en-route game drive, offering chances to witness the legendary Big Five.</p>'],
                            ['content' => '<p>Depending on the season, you may also catch a glimpse of the awe-inspiring Great Wildebeest Migration as herds move through the Northern Serengeti toward the central plains.</p>']
                        ],
                        'tips' => 'Accommodation: Serengeti Tented Camp | Meal Plan: Full Board'
                    ],
                    [
                        'title' => 'Day 5: Full Day in Serengeti',
                        'image' => 'packages/safari.webp',
                        'descriptions' => [
                            ['content' => '<p>Enjoy a full-day game drive through the wildlife-rich Central Serengeti. Your private safari experience is fully flexible—your expert guide will customize the day based on your preferences.</p>'],
                            ['content' => '<p>Midday, you\'ll pause for a scenic picnic lunch in the bush, surrounded by the sights and sounds of nature.</p>']
                        ],
                        'tips' => 'Accommodation: Serengeti Tented Camp | Meal Plan: Full Board'
                    ],
                    [
                        'title' => 'Day 6: Ngorongoro Crater',
                        'image' => 'packages/ngorongorocrater.jpeg',
                        'descriptions' => [
                            ['content' => '<p>Begin your day early with an unforgettable visit to the Ngorongoro Crater, often called the "Eighth Wonder of the World." This ancient volcanic caldera forms a natural enclosure for an extraordinary array of wildlife.</p>'],
                            ['content' => '<p>During your Ngorongoro safari, you\'ll encounter elephants, lions, buffaloes, hippos, and with luck, the rare and endangered black rhino.</p>']
                        ],
                        'tips' => 'Accommodation: Ngorongoro Wildlife Lodge | Meal Plan: Full Board'
                    ],
                    [
                        'title' => 'Day 7: Lake Manyara & Departure',
                        'image' => 'packages/lake manyara.jpg',
                        'descriptions' => [
                            ['content' => '<p>On your final day, enjoy a morning game drive in Lake Manyara National Park, famous for its rare tree-climbing lions and vibrant pink flamingos.</p>'],
                            ['content' => '<p>After the game drive, begin your scenic drive back to Kilimanjaro International Airport for your international flight home, taking with you unforgettable memories of your Tanzanian safari adventure.</p>']
                        ],
                        'tips' => 'Meal Plan: Breakfast | Transfer to Kilimanjaro International Airport'
                    ]
                ],
                'included_items' => [
                    ['item' => 'All park entry and conservation fees'],
                    ['item' => 'Professional English-speaking safari guide'],
                    ['item' => 'All game drives in 4x4 safari vehicle'],
                    ['item' => '6 nights\' accommodation in lodges/tented camps'],
                    ['item' => 'All meals as specified in the itinerary'],
                    ['item' => 'Bottled water during game drives'],
                    ['item' => 'All ground transfers as per itinerary'],
                    ['item' => 'Airport transfers on first and last day'],
                    ['item' => 'All government taxes and service charges']
                ],
                'excluded_items' => [
                    ['item' => 'International flights'],
                    ['item' => 'Tanzania visa fees'],
                    ['item' => 'Travel and medical insurance'],
                    ['item' => 'Alcoholic and soft drinks'],
                    ['item' => 'Tips for guides and camp staff'],
                    ['item' => 'Personal expenses'],
                    ['item' => 'Optional activities and excursions'],
                    ['item' => 'Items of personal nature']
                ],
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => '7-Day Off-Peak Tanzania Safari',
                'slug' => '7-day-off-peak-tanzania-safari',
                'duration' => '7 Days / 6 Nights',
                'subtitle' => 'Explore Tanzania\'s Iconic Parks Without the Crowds',
                'short_description' => 'Discover the magic of Tanzania on a budget-friendly safari during the serene low season, featuring Tarangire, Serengeti, Ngorongoro Crater, and Lake Manyara.',
                'overview' => '<p>Embark on an unforgettable 7-day low-season safari in Tanzania, crafted for travelers seeking incredible value, fewer crowds, and up-close wildlife encounters. This carefully curated itinerary takes you through four of Tanzania\'s most iconic national parks: Tarangire, Serengeti, Ngorongoro Crater, and Lake Manyara.</p><p>Discover diverse landscapes, from vast savannahs to lush highlands, while enjoying intimate game drives, expert-guided tours, and stays at handpicked lodges and camps that blend comfort with authentic safari charm.</p>',
                'best_time_to_visit' => '<p><strong>Best Time: April, May & November</strong> (Low season with excellent wildlife viewing and fewer crowds)</p>',
                'featured_image' => 'packages/off-peak-safari.jpg',
                'price' => 3500,
                'sale_price' => 3150,
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 8,
                'category' => 'safari',
                'country' => 'Tanzania',
                'views' => 0,
                'likes' => 0,
                'meta_title' => '7-Day Off-Peak Tanzania Safari | Stan Safaris',
                'meta_description' => 'Experience Tanzania\'s iconic parks without the crowds on this 7-day low-season safari. Enjoy intimate wildlife encounters in Serengeti, Ngorongoro, Tarangire & Lake Manyara at budget-friendly rates.',
                'meta_keywords' => ['tanzania safari', 'off-peak safari', 'serengeti', 'ngorongoro', 'tarangire', 'lake manyara', 'budget safari', 'low season travel'],
                'itineraries' => [
                    [
                        'title' => 'Day 1: Arrival in Arusha',
                        'image' => 'packages/Arrival-at-Kili-Airport.webp',
                        'descriptions' => [
                            ['content' => '<p>Upon arrival in Kilimanjaro International Airport, you\'ll be warmly welcomed by our professional safari driver-guide for a comfortable transfer to Arusha for your first overnight stay. This peaceful town at the foot of Mount Meru serves as the perfect starting point for your Tanzania safari adventure.</p>']
                        ],
                        'tips' => 'Accommodation: Arusha Hotel | Meal Plan: Half Board | Transfer: 55 km, 1 hour'
                    ],
                    [
                        'title' => 'Day 2: Tarangire National Park',
                        'image' => 'packages/tarangire-3.webp',
                        'descriptions' => [
                            ['content' => '<p>Begin your adventure with a scenic drive to Tarangire National Park, famous for its massive elephant herds and stunning landscapes dotted with ancient baobab trees.</p>'],
                            ['content' => '<p>Enjoy incredible sightings of wildebeest, zebras, impalas, and giraffes, with your camera ready for possible encounters with majestic lions and elusive leopards.</p>']
                        ],
                        'tips' => 'Accommodation: Karatu Lodge | Meal Plan: Half Board | Drive: 120 km, 2 hours'
                    ],
                    [
                        'title' => 'Day 3: Southern Serengeti',
                        'image' => 'packages/Serengeti-National-Park-11-1.webp',
                        'descriptions' => [
                            ['content' => '<p>Depart for the legendary Serengeti National Park, home to one of the world\'s most spectacular ecosystems. Enjoy a thrilling en-route game drive with up-close encounters with buffalo, elephants, giraffes, and various antelope species.</p>'],
                            ['content' => '<p>This scenic drive sets the stage for unforgettable moments as you make your way to your carefully selected safari lodge or tented camp nestled within the park.</p>']
                        ],
                        'tips' => 'Accommodation: Serengeti Tented Camp | Meal Plan: Full Board | Drive: 280 km, 6 hours'
                    ],
                    [
                        'title' => 'Day 4: Full Day in Southern Serengeti',
                        'image' => 'packages/safari.webp',
                        'descriptions' => [
                            ['content' => '<p>Spend an unforgettable full day on safari in the world-famous Serengeti National Park, renowned for its rich wildlife diversity and vast, golden plains.</p>'],
                            ['content' => '<p>Experience the thrill of spotting large predators such as lions, cheetahs, and possibly leopards in action, alongside thriving herds of zebras, gazelles, and wildebeest.</p>']
                        ],
                        'tips' => 'Accommodation: Serengeti Tented Camp | Meal Plan: Full Board'
                    ],
                    [
                        'title' => 'Day 5: Full Day in Serengeti',
                        'image' => 'packages/serengeti-lion.jpg',
                        'descriptions' => [
                            ['content' => '<p>Enjoy another exciting full day of game drives in the heart of Serengeti National Park, offering endless opportunities to track diverse wildlife and soak in the breathtaking beauty of the African savannah.</p>'],
                            ['content' => '<p>From majestic big cats to roaming elephant herds, every moment brings the chance to witness nature in its purest form.</p>']
                        ],
                        'tips' => 'Accommodation: Serengeti Tented Camp | Meal Plan: Full Board'
                    ],
                    [
                        'title' => 'Day 6: Ngorongoro Crater',
                        'image' => 'packages/ngorongoro-crater.jpg',
                        'descriptions' => [
                            ['content' => '<p>Journey to the breathtaking Ngorongoro Crater for a full-day wildlife safari in one of Africa\'s most unique natural wonders, a UNESCO World Heritage Site.</p>'],
                            ['content' => '<p>Spot the critically endangered black rhino and enjoy some of the highest predator concentrations in Africa, with frequent lion, cheetah, hyena, and jackal sightings against a dramatic volcanic backdrop.</p>']
                        ],
                        'tips' => 'Accommodation: Karatu Lodge | Meal Plan: Full Board | Drive: 170 km, 4 hours'
                    ],
                    [
                        'title' => 'Day 7: Lake Manyara & Departure',
                        'image' => 'packages/lake-manyara.jpg',
                        'descriptions' => [
                            ['content' => '<p>Enjoy a captivating morning game drive in Lake Manyara National Park, renowned for its tree-climbing lions, vibrant flamingos, and large pods of hippos.</p>'],
                            ['content' => '<p>Later, drive back to Arusha, bringing your unforgettable Tanzania safari adventure to a close with memories that will last a lifetime.</p>']
                        ],
                        'tips' => 'Meal Plan: Breakfast | Transfer to Arusha | Drive: Varies'
                    ]
                ],
                'included_items' => [
                    ['item' => 'All park entry and conservation fees'],
                    ['item' => 'Professional English-speaking safari guide'],
                    ['item' => 'All game drives in 4x4 safari vehicle'],
                    ['item' => '6 nights\' accommodation in lodges/tented camps'],
                    ['item' => 'All meals as specified in the itinerary'],
                    ['item' => 'Bottled water during game drives'],
                    ['item' => 'All ground transfers as per itinerary'],
                    ['item' => 'Airport transfers on first and last day'],
                    ['item' => 'All government taxes and service charges']
                ],
                'excluded_items' => [
                    ['item' => 'International flights'],
                    ['item' => 'Tanzania visa fees'],
                    ['item' => 'Travel and medical insurance'],
                    ['item' => 'Alcoholic and soft drinks'],
                    ['item' => 'Tips for guides and camp staff'],
                    ['item' => 'Personal expenses'],
                    ['item' => 'Optional activities and excursions'],
                    ['item' => 'Items of personal nature']
                ],
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        foreach ($packages as $package) {
            // Generate slug from title if not set
            if (!isset($package['slug']) || empty($package['slug'])) {
                $package['slug'] = Str::slug($package['title']);
            }
            
            // Create the package
            Package::create($package);
        }
    }
}
