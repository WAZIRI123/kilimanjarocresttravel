<?php

namespace App\Livewire\Package;

use App\Models\Package;
use App\Models\PackageActivities;
use App\Models\PackageReservation;
use App\Models\PackageReservationDetails;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\Reservation as MailReservation;
use Livewire\Component;

class Index extends Component
{
  public $package;
  public $prices;
  public $perperson;
  public $packageType;
  public $email;
  public $name;
  public $type = 1;
  public $accomodationPrice;
  public $sumAccomodationPrice;
  public $total_days;
  public $totalPrice;
  public $sumActivitiesPrice;
  public $arrivalPrice;
  public $departurePrice = 20;
  public $activityPrice = 0;
  public $minStart_date;
  public $minEnd_date;
  public $start_date;
  public $end_date;
  public $extraPacDescr;
  public $totalDays;
  public function mount(Package $package)
  {

    $this->prices=[
        //no ///type ////perperson

        //package1
      1=>[
        1=>[
            580, 390, 320,300
        ],

        2=>[
            620, 435,370,350
        ],

        3=>[
            900, 850,820,785
        ]

        ],

         //package2
      2=>[
        1=>[
            860, 580, 480,420
        ],

        2=>[
            920, 650,550,490
        ],

        3=>[
            1450, 1320,1250,1170
        ]

        ],

         //package3
      3=>[
        1=>[
            1090, 725, 610,570
        ],

        2=>[
            1250, 865,710,640
        ],

        3=>[
            3230, 1905,1470,1320
        ]

        ],

         //package4
      4=>[
        1=>[
            1140, 925, 760,710
        ],

        2=>[
            1620, 1100,895,855
        ],

        3=>[
            4085, 2395,1840,1650
        ]

        ],

         //package5
      5=>[
        1=>[
            1670, 1085, 1050,1020
        ],

        2=>[
            2270, 1445,1150,1100
        ],

        3=>[
            5720, 3875,3550,3250
        ]

        ],

         //package6
      6=>[
        1=>[
            1950, 1275, 1235,1200
        ],

        2=>[
            2650, 1695,1355,1300
        ],

        3=>[
            6150, 4530,4200,73950
        ]

        ],
    ];
     $this->extraPacDescr=[
      '1'=>[
      'PACKAGE INCLUDES:'=>[
          ' All Excursions shown in the package',
          'Hotels accommodation:'=>
          [
              'Budget: Shoki Shoki on Breakfast only' ,
              'Standard: Tembo hotel on Breakfast only',
              'Luxury: Zanzi resort on Breakfast and dinner'
      
          ],
       
          ' Airport/ferry pick up and drop off from your Hotel',
          ' Experienced Professional Tour guide',
          ' Soft Drinks, Fresh Fruits & Sea Food BBQ Lunch at Safari Blue',
          ' All swimming, snorkelling and safety gears',
          ' All Entrance fees & Dhow Boat charges',
         ' Transfers & Transport waiting charges',
          ' Infrastructure Tax at the hotel'
      ],
      
      'PACKAGE EXCLUDES:'=>[
          ' Medical insurance',
          ' International flights',
          ' Domestic flights',
          ' Expenses of a personal nature',
          ' Gratuities for guide/driver',
          ' VISA'
      ]
      ,
      'TERMS AND CONDITIONS'=>[
      'BOOKING POLICY'=>[
          'Your reservation will be confirmed upon a deposit of 30% of the sum shown 
      on the package price.', 
      'The remaining 70% should be paid in full amount 7 days before arrival.',
      'We encourage FULL PAYMENT (100%) to avoid inconveniences.',
      'Reservations made without deposit are subject to cancellation without prior 
      notice.',
      'Last minute bookings should pay full amount of 100% within 48hrs before 
      arrival.'
      ],
      'CANCELLATION POLICY:'=>[
          ' 15- 30 days: 50% of booking value',
          ' Within 15 days: 100% of booking value'
      ]
      
      ],
          ],
// 2
          '2'=>[
            'PACKAGE INCLUDES:'=>[
                ' All Excursions shown in the package',
                'Hotels accommodation:'=>
                [
                    'Budget: Shoki Shoki on Breakfast only' ,
                    'Standard: Tembo hotel on Breakfast only',
                    'Luxury: Zanzi resort on Breakfast and dinner'
            
                ],
             
                ' Airport/ferry pick up and drop off from your Hotel',
                ' Experienced Professional Tour guide',
                ' Soft Drinks, Fresh Fruits & Sea Food BBQ Lunch at Safari Blue',
                ' All swimming, snorkelling and safety gears',
                ' All Entrance fees & Dhow Boat charges',
               ' Transfers & Transport waiting charges',
                ' Infrastructure Tax at the hotel'
            ],
            
            'PACKAGE EXCLUDES:'=>[
                ' Medical insurance',
                ' International flights',
                ' Domestic flights',
                ' Expenses of a personal nature',
                ' Gratuities for guide/driver',
                ' VISA'
            ]
            ,
            'TERMS AND CONDITIONS'=>[
            'BOOKING POLICY'=>[
                'Your reservation will be confirmed upon a deposit of 30% of the sum shown 
            on the package price.', 
            'The remaining 70% should be paid in full amount 7 days before arrival.',
            'We encourage FULL PAYMENT (100%) to avoid inconveniences.',
            'Reservations made without deposit are subject to cancellation without prior 
            notice.',
            'Last minute bookings should pay full amount of 100% within 48hrs before 
            arrival.'
            ],
            'CANCELLATION POLICY:'=>[
                ' 15- 30 days: 50% of booking value',
                ' Within 15 days: 100% of booking value'
            ]
            
            ],
                ],

                // 3

                 '3'=>[
      'PACKAGE INCLUDES:'=>[
          ' All Excursions shown in the package',
          'Hotels accommodation:'=>
          [
              'Budget:  New Teddy`s on the beach - Breakfast only' ,
              'Standard: The Loop Hotel - Breakfast only',
              'Luxury: : Le Mersenne Beach Resort – Breakfast only'
      
          ],
       
          ' Airport/ferry pick up and drop off from your Hotel',
          ' Experienced Professional Tour guide',
          ' Soft Drinks, Fresh Fruits & Sea Food BBQ Lunch at Safari Blue',
          ' All swimming, snorkelling and safety gears',
          ' All Entrance fees & Dhow Boat charges',
         ' Transfers & Transport waiting charges',
          ' Infrastructure Tax at the hotel'
      ],
      
      'PACKAGE EXCLUDES:'=>[
          ' Medical insurance',
          ' International flights',
          ' Domestic flights',
          ' Expenses of a personal nature',
          ' Gratuities for guide/driver',
          ' VISA'
      ]
      ,
      'TERMS AND CONDITIONS'=>[
      'BOOKING POLICY'=>[
          'Your reservation will be confirmed upon a deposit of 30% of the sum shown 
      on the package price.', 
      'The remaining 70% should be paid in full amount 7 days before arrival.',
      'We encourage FULL PAYMENT (100%) to avoid inconveniences.',
      'Reservations made without deposit are subject to cancellation without prior 
      notice.',
      'Last minute bookings should pay full amount of 100% within 48hrs before 
      arrival.'
      ],
      'CANCELLATION POLICY:'=>[
          ' 15- 30 days: 50% of booking value',
          ' Within 15 days: 100% of booking value'
      ]
      
      ],
          ],

          // 4

          '4'=>[
            'PACKAGE INCLUDES:'=>[
                ' All Excursions shown in the package',
                'Hotels accommodation:'=>
                [
                  'Budget:  New Teddy`s on the beach - Breakfast only' ,
                  'Standard: The Loop Hotel - Breakfast only',
                  'Luxury: : Le Mersenne Beach Resort – Breakfast only'
          
              ],
             
                ' Airport/ferry pick up and drop off from your Hotel',
                ' Experienced Professional Tour guide',
                ' Soft Drinks, Fresh Fruits & Sea Food BBQ Lunch at Safari Blue',
                ' All swimming, snorkelling and safety gears',
                ' All Entrance fees & Dhow Boat charges',
               ' Transfers & Transport waiting charges',
                ' Infrastructure Tax at the hotel'
            ],
            
            'PACKAGE EXCLUDES:'=>[
                ' Medical insurance',
                ' International flights',
                ' Domestic flights',
                ' Expenses of a personal nature',
                ' Gratuities for guide/driver',
                ' VISA'
            ]
            ,
            'TERMS AND CONDITIONS'=>[
            'BOOKING POLICY'=>[
                'Your reservation will be confirmed upon a deposit of 30% of the sum shown 
            on the package price.', 
            'The remaining 70% should be paid in full amount 7 days before arrival.',
            'We encourage FULL PAYMENT (100%) to avoid inconveniences.',
            'Reservations made without deposit are subject to cancellation without prior 
            notice.',
            'Last minute bookings should pay full amount of 100% within 48hrs before 
            arrival.'
            ],
            'CANCELLATION POLICY:'=>[
                ' 15- 30 days: 50% of booking value',
                ' Within 15 days: 100% of booking value'
            ]
            
            ],
                ],
          // 5
          '5'=>[
            'PACKAGE INCLUDES:'=>[
                ' All Excursions shown in the package',
                'Hotels accommodation:'=>
                [
                    'Budget: Vanilla Bed & Breakfast' ,
                    'Standard: Amaan Beach Bungalows on Breakfast only',
                    'Luxury: Zuri Zanzibar on Breakfast and Dinner'
            
                ],
             
                ' Airport/ferry pick up and drop off from your Hotel',
                ' Experienced Professional Tour guide',
                ' Soft Drinks, Fresh Fruits & Sea Food BBQ Lunch at Safari Blue',
                ' All swimming, snorkelling and safety gears',
                ' All Entrance fees & Dhow Boat charges',
               ' Transfers & Transport waiting charges',
                ' Infrastructure Tax at the hotel'
            ],
            
            'PACKAGE EXCLUDES:'=>[
                ' Medical insurance',
                ' International flights',
                ' Domestic flights',
                ' Expenses of a personal nature',
                ' Gratuities for guide/driver',
                ' VISA'
            ]
            ,
            'TERMS AND CONDITIONS'=>[
            'BOOKING POLICY'=>[
                'Your reservation will be confirmed upon a deposit of 30% of the sum shown 
            on the package price.', 
            'The remaining 70% should be paid in full amount 7 days before arrival.',
            'We encourage FULL PAYMENT (100%) to avoid inconveniences.',
            'Reservations made without deposit are subject to cancellation without prior 
            notice.',
            'Last minute bookings should pay full amount of 100% within 48hrs before 
            arrival.'
            ],
            'CANCELLATION POLICY:'=>[
                ' 15- 30 days: 50% of booking value',
                ' Within 15 days: 100% of booking value'
            ]
            
            ],
                ],

                
          // 6
          '6'=>[
            'PACKAGE INCLUDES:'=>[
                ' All Excursions shown in the package',
                'Hotels accommodation:'=>
                [
                    'Budget: Vanilla Bed & Breakfast' ,
                    'Standard: Amaan Beach Bungalows on Breakfast only',
                    'Luxury: Zuri Zanzibar on Breakfast and Dinner'
            
                ],
             
                ' Airport/ferry pick up and drop off from your Hotel',
                ' Experienced Professional Tour guide',
                ' Soft Drinks, Fresh Fruits & Sea Food BBQ Lunch  at Mnemba Island & 
                Nakupenda Sandbank & Safari Blue',
                ' All swimming, snorkelling and safety gears',
                ' All Entrance fees & Dhow Boat charges',
               ' Transfers & Transport waiting charges',
                ' Infrastructure Tax at the hotel'
            ],
            
            'PACKAGE EXCLUDES:'=>[
                ' Medical insurance',
                ' International flights',
                ' Domestic flights',
                ' Expenses of a personal nature',
                ' Gratuities for guide/driver',
                ' VISA'
            ]
            ,
            'TERMS AND CONDITIONS'=>[
            'BOOKING POLICY'=>[
                'Your reservation will be confirmed upon a deposit of 30% of the sum shown 
            on the package price.', 
            'The remaining 70% should be paid in full amount 7 days before arrival.',
            'We encourage FULL PAYMENT (100%) to avoid inconveniences.',
            'Reservations made without deposit are subject to cancellation without prior 
            notice.',
            'Last minute bookings should pay full amount of 100% within 48hrs before 
            arrival.'
            ],
            'CANCELLATION POLICY:'=>[
                ' 15- 30 days: 50% of booking value',
                ' Within 15 days: 100% of booking value'
            ]
            
            ],
                ],
                
                // 7
          '7'=>[
            'PACKAGE INCLUDES:'=>[
     'Airport pick-up and drop-off',
    'All activities shown in the package',
    'Accommodation on full board',
    'Park fees and concession fees',
    'Lunch box with bottles of mineral water',
    'Experienced Professional Tour guide',
    'Boat Safari',
    'Village tour',
    'Safari 4x4 vehicle',
    'All transfers & Transport waiting charges',
    'Domestic flights'

            ],
            
            'PACKAGE EXCLUDES:'=>[
                ' Medical insurance',
                ' Expenses of a personal nature',
                ' Tips/Gratuities for guide/driver'
            ],
            
            'TERMS AND CONDITIONS'=>[
            'BOOKING POLICY'=>[
                'Your reservation will be confirmed upon a deposit of 30% of the sum shown 
            on the package price.', 
            'The remaining 70% should be paid in full amount 7 days before arrival.',
            'We encourage FULL PAYMENT (100%) to avoid inconveniences.',
            'Reservations made without deposit are subject to cancellation without prior 
            notice.',
            'Last minute bookings should pay full amount of 100% within 48hrs before 
            arrival.'
            ],
            'CANCELLATION POLICY:'=>[
                ' 15- 30 days: 50% of booking value',
                ' Within 15 days: 100% of booking value'
            ]
            
            ],
                ],
                
         // 8
          '8'=>[
            'PACKAGE INCLUDES:'=>[
     'Airport pick-up and drop-off',
    'All activities shown in the package',
    'Accommodation on full board',
    'Park fees and concession fees',
    'Lunch box with bottles of mineral water',
    'Experienced Professional Tour guide',
    'Boat Safari',
    'Village tour',
    'Safari 4x4 vehicle',
    'All transfers & Transport waiting charges',
    'Domestic flights'

            ],
            
            'PACKAGE EXCLUDES:'=>[
                ' Medical insurance',
                ' International flights',
                ' Domestic flights',
                ' Expenses of a personal nature',
                ' Gratuities for guide/driver',
                ' VISA'
            ]
            ,
            'TERMS AND CONDITIONS'=>[
            'BOOKING POLICY'=>[
                'Your reservation will be confirmed upon a deposit of 30% of the sum shown 
            on the package price.', 
            'The remaining 70% should be paid in full amount 7 days before arrival.',
            'We encourage FULL PAYMENT (100%) to avoid inconveniences.',
            'Reservations made without deposit are subject to cancellation without prior 
            notice.',
            'Last minute bookings should pay full amount of 100% within 48hrs before 
            arrival.'
            ],
            'CANCELLATION POLICY:'=>[
                ' 15- 30 days: 50% of booking value',
                ' Within 15 days: 100% of booking value'
            ]
            
            ],
                ], 
                
        // 9
        '9'=>[
            'PACKAGE INCLUDES:'=>[
     'Airport pick-up and drop-off',
    'All activities shown in the package',
    'Accommodation on full board',
    'Park fees and concession fees',
    'Lunch box with bottles of mineral water',
    'Experienced Professional Tour guide',
    'Boat Safari',
    'Walking Safari',
    'Safari 4x4 vehicle',
    'All transfers & Transport waiting charges',
    'Domestic flights'

            ],
            
            'PACKAGE EXCLUDES:'=>[
                ' Medical insurance',
                ' Expenses of a personal nature',
                ' Tips/Gratuities for guide/driver'
            ],
            
            'TERMS AND CONDITIONS'=>[
            'BOOKING POLICY'=>[
                'Your reservation will be confirmed upon a deposit of 30% of the sum shown 
            on the package price.', 
            'The remaining 70% should be paid in full amount 7 days before arrival.',
            'We encourage FULL PAYMENT (100%) to avoid inconveniences.',
            'Reservations made without deposit are subject to cancellation without prior 
            notice.',
            'Last minute bookings should pay full amount of 100% within 48hrs before 
            arrival.'
            ],
            'CANCELLATION POLICY:'=>[
                ' 15- 30 days: 50% of booking value',
                ' Within 15 days: 100% of booking value'
            ]
            
            ],
                ],

                        // 10
        '10'=>[
            'PACKAGE INCLUDES:'=>[
                'Airport transfers',
                'Return flight Zanzibar – Mikumi – Zanzibar',
                'Professional driver/guide',
                'Full day game drive',
                'Entry fees',
                'Tourism development levy',
                'Packed lunch',
                'Bottles of Mineral water'
            ],
            
            'PACKAGE EXCLUDES:'=>[
                'Soft drinks and Beverages',
                'Medical and luggage insurance',
                'Tips and other personal expenses'
            ],
            
            'TERMS AND CONDITIONS'=>[
            'BOOKING POLICY'=>[
                'Your reservation will be confirmed upon a deposit of 30% of the sum shown 
            on the package price.', 
            'The remaining 70% should be paid in full amount 7 days before arrival.',
            'We encourage FULL PAYMENT (100%) to avoid inconveniences.',
            'Reservations made without deposit are subject to cancellation without prior 
            notice.',
            'Last minute bookings should pay full amount of 100% within 48hrs before 
            arrival.'
            ],
            'CANCELLATION POLICY:'=>[
                ' 15- 30 days: 50% of booking value',
                ' Within 15 days: 100% of booking value'
            ]
            
            ],
                ],


                 // 11
        '11'=>[
            'PACKAGE INCLUDES:'=>[
                'Airport transfers',
                'Domestic flights',
                'Jeep 4x4 and guide',
                '1 night full board accommodation in Mikumi',
                'Park fees',
                'Game drive',
                'All reserve entries',
                'Tourism development levy',
                'Lunch on the Road',
                'Bottles of mineral water'
            ],
            
            'PACKAGE EXCLUDES:'=>[
                'Soft drinks and Beverages',
                'Laundry',
                'Medical and luggage insurance'
                ],
            
            'TERMS AND CONDITIONS'=>[
            'BOOKING POLICY'=>[
                'Your reservation will be confirmed upon a deposit of 30% of the sum shown 
            on the package price.', 
            'The remaining 70% should be paid in full amount 7 days before arrival.',
            'We encourage FULL PAYMENT (100%) to avoid inconveniences.',
            'Reservations made without deposit are subject to cancellation without prior 
            notice.',
            'Last minute bookings should pay full amount of 100% within 48hrs before 
            arrival.'
            ],
            'CANCELLATION POLICY:'=>[
                ' 15- 30 days: 50% of booking value',
                ' Within 15 days: 100% of booking value'
            ]
            
            ],
                ],


                 // 12
        '12'=>[
            'PACKAGE INCLUDES:'=>[
                'Airport transfers',
                'Domestic flights',
                'Jeep 4x4 and guide',
                '2 nights full board accommodation in Mikumi',
                'Park fees',
                'Game drive',
                'All reserve entries',
                'Tourism development levy',
                'Lunch on the Road',
                'Bottles of mineral water'
            ],
            
            'PACKAGE EXCLUDES:'=>[
                'Soft drinks and Beverages',
                'Laundry',
                'Medical and luggage insurance'
                ],
            
            'TERMS AND CONDITIONS'=>[
            'BOOKING POLICY'=>[
                'Your reservation will be confirmed upon a deposit of 30% of the sum shown 
            on the package price.', 
            'The remaining 70% should be paid in full amount 7 days before arrival.',
            'We encourage FULL PAYMENT (100%) to avoid inconveniences.',
            'Reservations made without deposit are subject to cancellation without prior 
            notice.',
            'Last minute bookings should pay full amount of 100% within 48hrs before 
            arrival.'
            ],
            'CANCELLATION POLICY:'=>[
                ' 15- 30 days: 50% of booking value',
                ' Within 15 days: 100% of booking value'
            ]
            
            ],
                ],


                // 13
        '13'=>[
            'PACKAGE INCLUDES:'=>[
                'All activities shown in the package',
                'Park fees and concession fees',
                'Accommodation (Lodging, FB)',
                'Experienced Professional Tour guide',
                'Safari Vehicle 4X4',
                'Water every day during the safari',
                'All transfers & transport waiting charges'
            ],
            'PACKAGE EXCLUDES:'=>[
                'Medical insurance',
                'Visa',
                'Expenses of a personal nature',
                'Gratuities for guide/driver'
            ],
            
            'TERMS AND CONDITIONS'=>[
            'BOOKING POLICY'=>[
                'Your reservation will be confirmed upon a deposit of 30% of the sum shown 
            on the package price.', 
            'The remaining 70% should be paid in full amount 7 days before arrival.',
            'We encourage FULL PAYMENT (100%) to avoid inconveniences.',
            'Reservations made without deposit are subject to cancellation without prior 
            notice.',
            'Last minute bookings should pay full amount of 100% within 48hrs before 
            arrival.'
            ],
            'CANCELLATION POLICY:'=>[
                ' 15- 30 days: 50% of booking value',
                ' Within 15 days: 100% of booking value'
            ]
            
            ],
                ],


                 // 14
        '14'=>[
            'PACKAGE INCLUDES:'=>[
                'All activities shown in the package',
                'Park fees and concession fees',
                'Accommodation (Lodging, FB)',
                'Experienced Professional Tour guide',
                'Safari Vehicle 4X4',
                'Water every day during the safari',
                'All transfers & transport waiting charges'
            ],
            'PACKAGE EXCLUDES:'=>[
                'Medical insurance',
                'Visa',
                'Expenses of a personal nature',
                'Gratuities for guide/driver'
            ],
            
            'TERMS AND CONDITIONS'=>[
            'BOOKING POLICY'=>[
                'Your reservation will be confirmed upon a deposit of 30% of the sum shown 
            on the package price.', 
            'The remaining 70% should be paid in full amount 7 days before arrival.',
            'We encourage FULL PAYMENT (100%) to avoid inconveniences.',
            'Reservations made without deposit are subject to cancellation without prior 
            notice.',
            'Last minute bookings should pay full amount of 100% within 48hrs before 
            arrival.'
            ],
            'CANCELLATION POLICY:'=>[
                ' 15- 30 days: 50% of booking value',
                ' Within 15 days: 100% of booking value'
            ]
            
            ],
                ],


                 // 15
        '15'=>[
            'PACKAGE INCLUDES:'=>[
                'All activities shown in the package',
                'Park fees and concession fees',
                'Accommodation (Lodging, FB)',
                'Experienced Professional Tour guide',
                'Safari Vehicle 4X4',
                'Water every day during the safari',
                'All transfers & transport waiting charges'
            ],
            'PACKAGE EXCLUDES:'=>[
                'Medical insurance',
                'Visa',
                'Expenses of a personal nature',
                'Gratuities for guide/driver'
            ],
            
            'TERMS AND CONDITIONS'=>[
            'BOOKING POLICY'=>[
                'Your reservation will be confirmed upon a deposit of 30% of the sum shown 
            on the package price.', 
            'The remaining 70% should be paid in full amount 7 days before arrival.',
            'We encourage FULL PAYMENT (100%) to avoid inconveniences.',
            'Reservations made without deposit are subject to cancellation without prior 
            notice.',
            'Last minute bookings should pay full amount of 100% within 48hrs before 
            arrival.'
            ],
            'CANCELLATION POLICY:'=>[
                ' 15- 30 days: 50% of booking value',
                ' Within 15 days: 100% of booking value'
            ]
            
            ],
                ],

                 // 16
        '16'=>[
            'PACKAGE INCLUDES:'=>[
                'All activities shown in the package',
                'Park fees and concession fees',
                'Accommodation (Lodging, FB)',
                'Experienced Professional Tour guide',
                'Safari Vehicle 4X4',
                'Water every day during the safari',
                'All transfers & transport waiting charges'
            ],
            'PACKAGE EXCLUDES:'=>[
                'Medical insurance',
                'Visa',
                'Expenses of a personal nature',
                'Gratuities for guide/driver'
            ],
            
            'TERMS AND CONDITIONS'=>[
            'BOOKING POLICY'=>[
                'Your reservation will be confirmed upon a deposit of 30% of the sum shown 
            on the package price.', 
            'The remaining 70% should be paid in full amount 7 days before arrival.',
            'We encourage FULL PAYMENT (100%) to avoid inconveniences.',
            'Reservations made without deposit are subject to cancellation without prior 
            notice.',
            'Last minute bookings should pay full amount of 100% within 48hrs before 
            arrival.'
            ],
            'CANCELLATION POLICY:'=>[
                ' 15- 30 days: 50% of booking value',
                ' Within 15 days: 100% of booking value'
            ]
            
            ],
                ],
 
  // 17
  '17'=>[
    'PACKAGE INCLUDES:'=>[
        'All activities shown in the package',
        'Park fees and concession fees',
        'Accommodation (Lodging, FB)',
        'Experienced Professional Tour guide',
        'Safari Vehicle 4X4',
        'Water every day during the safari',
        'All transfers & transport waiting charges'
    ],
    'PACKAGE EXCLUDES:'=>[
        'Medical insurance',
        'Visa',
        'Expenses of a personal nature',
        'Gratuities for guide/driver'
    ],
    
    'TERMS AND CONDITIONS'=>[
    'BOOKING POLICY'=>[
        'Your reservation will be confirmed upon a deposit of 30% of the sum shown 
    on the package price.', 
    'The remaining 70% should be paid in full amount 7 days before arrival.',
    'We encourage FULL PAYMENT (100%) to avoid inconveniences.',
    'Reservations made without deposit are subject to cancellation without prior 
    notice.',
    'Last minute bookings should pay full amount of 100% within 48hrs before 
    arrival.'
    ],
    'CANCELLATION POLICY:'=>[
        ' 15- 30 days: 50% of booking value',
        ' Within 15 days: 100% of booking value'
    ]
    
    ],
        ],
          
      ];

    $this->packageActivities = PackageActivities::all();
    $this->package = $package;
    $this->total_days = intval($package->total_days);
    $this->minStart_date = date('Y-m-d');
  }
  public function reservation()
  {
    if ($this->package->id>7) {
       
    }
    $this->setTotalPrice();
    $rules = [
      'start_date' => ['required', 'date', 'after:' . Carbon::parse($this->minStart_date)->yesterday()->toDateString()],
      'packageType' => ['required'],
      'email' => ['required','email'],
      'name' => ['required']
    ];
    $this->packageType=1;
    $validatedData = $this->validate($rules);
    $validatedData['package_id'] = $this->package->id;
    $validatedData['end_date'] = Carbon::parse($this->start_date)->addDay($this->totalDays)->toDateString();
    $validatedData['total_price'] = $this->totalPrice;
    $validatedData['no_of_visitors'] = $this->perperson;
    $validatedData['user_id'] = auth()->id();
    $validatedData['code'] = str(uniqid('Grandezza-') . date('Ymd'))->upper();
    $reserveId = PackageReservation::updateOrCreate(['package_id' => $this->package->id, 'start_date' => $this->start_date], $validatedData);
    Mail::to('info@grandezzazanzibar.co.tz')->send(new MailReservation($this->email,$reserveId->packages?->name,$this->name,$this->start_date,$this->perperson, $this->totalPrice ));
    $this->dispatch('reservation:created');
  }

  public function  setActivitiPrice()
  {
    if ($this->package->id < 7 && $this->packageType) {
        
        switch ($this->package->id) {
            case 1:
                   switch ($this->perperson) {
                    case (1):
                        $this->sumActivitiesPrice = $this->prices[1][$this->packageType][0];
                        break;
                    case (2):
                        $this->sumActivitiesPrice = $this->prices[1][$this->packageType][1];
                        break;
                     case (3):
                        $this->sumActivitiesPrice = $this->prices[1][$this->packageType][2];
                        break;
                    
                    default:
                         $this->sumActivitiesPrice = $this->prices[1][$this->packageType][3];
                        break;
                   }
                break;
            case 2:
                   switch ($this->perperson) {
                    case (1):
                        $this->sumActivitiesPrice = $this->prices[2][$this->packageType][0];
                        break;
                    case (2):
                        $this->sumActivitiesPrice = $this->prices[2][$this->packageType][1];
                        break;
                     case (3):
                        $this->sumActivitiesPrice = $this->prices[2][$this->packageType][2];
                        break;
                    
                    default:
                         $this->sumActivitiesPrice = $this->prices[2][$this->packageType][3];
                        break;
                   }
                break;
            case 3:
                   switch ($this->perperson) {
                    case (1):
                        $this->sumActivitiesPrice = $this->prices[3][$this->packageType][0];
                        break;
                    case (2):
                        $this->sumActivitiesPrice = $this->prices[3][$this->packageType][1];
                        break;
                     case (3):
                        $this->sumActivitiesPrice = $this->prices[3][$this->packageType][2];
                        break;
                    
                    default:
                         $this->sumActivitiesPrice = $this->prices[3][$this->packageType][3];
                        break;
                   }
                break;
            case 4:
                   switch ($this->perperson) {
                    case (1):
                        $this->sumActivitiesPrice = $this->prices[4][$this->packageType][0];
                        break;
                    case (2):
                        $this->sumActivitiesPrice = $this->prices[4][$this->packageType][1];
                        break;
                     case (3):
                        $this->sumActivitiesPrice = $this->prices[4][$this->packageType][2];
                        break;
                    
                    default:
                         $this->sumActivitiesPrice = $this->prices[4][$this->packageType][3];
                        break;
                   }
                break;  
            case 5:
                   switch ($this->perperson) {
                    case (1):
                        $this->sumActivitiesPrice = $this->prices[5][$this->packageType][0];
                        break;
                    case (2):
                        $this->sumActivitiesPrice = $this->prices[5][$this->packageType][1];
                        break;
                     case (3):
                        $this->sumActivitiesPrice = $this->prices[5][$this->packageType][2];
                        break;
                    
                    default:
                         $this->sumActivitiesPrice = $this->prices[5][$this->packageType][3];
                        break;
                   }
                break; 
             case 6:
                   switch ($this->perperson) {
                    case (1):
                        $this->sumActivitiesPrice = $this->prices[6][$this->packageType][0];
                        break;
                    case (2):
                        $this->sumActivitiesPrice = $this->prices[6][$this->packageType][1];
                        break;
                     case (3):
                        $this->sumActivitiesPrice = $this->prices[6][$this->packageType][2];
                        break;
                    
                    default:
                         $this->sumActivitiesPrice = $this->prices[6][$this->packageType][3];
                        break;
                   }
                break;     
        }
        
    }else{
        $this->sumActivitiesPrice = $this->package->price;
    }
    
  }
 

  public function setTotalPrice()
  {
    
    $this->sumActivitiesPrice = 0;
    $this->sumAccomodationPrice = 0;
    $this->setActivitiPrice();
    if ($this->perperson > 0 && is_numeric($this->perperson)) {
      $this->totalPrice =
        ($this->sumActivitiesPrice) * $this->perperson;
    }
  }
  public function lastpage()
  {

    session(['package' => $this->package->slug]);
  }
 
  public function render()
  {
    return view('livewire.package.index')->layout('layouts.main');
  }
}
