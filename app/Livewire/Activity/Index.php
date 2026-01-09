<?php


namespace App\Livewire\Activity;

use App\Enums\ReservationStatus;
use App\Mail\Reservation as MailReservation;
use Carbon\Carbon;
use App\Models\Activity;
use App\Models\Reservation;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Index extends Component
{
  public $activity;
  public $price;
  public $check_in;
  public $minCheckIn ;
  public $email;
  public $name;
  public $totalPrice;
  public  $perperson = 1;
  public function mount(Activity $activity)
  {
      $this->activity = $activity;
      $this->minCheckIn = date('Y-m-d');
      $this->setTotalPrice();
  }
  public function reservation()
  {
    $rules = [
      'check_in' => ['required', 'date', 'after:' . Carbon::parse($this->minCheckIn)->yesterday()->toDateString()],
      'price' => ['required', 'numeric'],
      'email' => ['required','email'],
      'name' => ['required']
  ];
  $validatedData = $this->validate($rules);
  $validatedData['activity_id'] = $this->activity->id;
  $validatedData['date'] = date('Y-m-d');
  $validatedData['total_price'] = $this->totalPrice;
  $validatedData['no_of_visitors'] = $this->perperson;
  $validatedData['user_id'] = auth()->id();
  $validatedData['code'] = str(uniqid('Grandezza-') . date('Ymd'))->upper();
  $reserveId=Reservation::updateOrCreate(['activity_id'=>$this->activity->id,'check_in'=>$this->check_in],$validatedData);
  $this->dispatch('reservation:created');
  
   Mail::to('info@grandezzazanzibar.co.tz')->send(new MailReservation($this->email,$reserveId->activities?->name,$this->name,$this->check_in,$this->perperson, $this->totalPrice));
  }

  public function setPrice()
  {
      $prices = [
        //SAFARIBLUE
          1 => [
              1 => 190,
              2 => 150,
              3 => 130,
              4 => 105,
              5 => 85,
          ],

//PRISON ISLAND TOUR
        3 => [
          1 => 150,
          2 => 115,
          3 => 90,
          4 => 75,
          5 => 70,
      ],
//MNEMBAISLAND

      4 => [
        1 => 170,
        2 => 130,
        3 =>110,
        4 => 90,
        5 => 70,
    ],
//SPICE TOUR
    5 => [
      1 => 100,
      2 => 85,
      3 =>75,
      4 => 65,
      5 => 55,
  ],

  //NAKUPENDA ISLAND
  6 => [
    1 => 170,
    2 => 140,
    3 =>105,
    4 => 95,
    5 => 85,
],

  //Clear kayak
  7 => [
    1 => 120,
    2 => 150,
    3 =>120,
    4 => 120,
    5 => 120,
],

// JETskI
  8 => [
    1 => 140,
    2 => 180,
    3 =>180,
    4 => 180,
    5 => 180,
],
// JETCAR
  9 => [
    1 => 200,
    2 => 230,
    3 =>230,
    4 => 230,
    5 => 230,
],


 //PARASAILING
 10 => [
  1 => 220,
  2 => 250,
  3 => 250,
  4 => 250,
  5 => 250,
],

 //SWIMMING WITH THE TURTLES
 11 => [
  1 => 115,
  2 => 95,
  3 => 85,
  4 => 75,
  5 => 65,
],

 //STONE TOWN TOUR
 12 => [
  1 => 120,
  2 => 90,
  3 => 85,
  4 => 80,
  5 => 65,
],

 //Jozani TOUR
 13 => [
  1 => 130,
  2 => 100,
  3 => 85,
  4 => 70,
  5 => 60,
],

 //MNEMBA ISLAND
 14 => [
  1 => 170,
  2 => 130,
  3 => 110,
  4 => 90,
  5 => 70,
],

 //Rock Restaurent
 15 => [
  1 => 140,
  2 => 270,
  3 => 270,
  4 => 270,
  5 => 270,
],

 //cooking
 16 => [
  1 => 160,
  2 => 130,
  3 => 120,
  4 => 115,
  5 => 110,
],

 //sunsitdhow
 2 => [
  1 => 115,
  2 => 90,
  3 => 80,
  4 => 70,
  5 => 60,
],

 //kuza
 17 => [
  1 => 115,
  2 => 95,
  3 => 85,
  4 => 75,
  5 => 65,
],
 //m
//  18 => [
//   1 => 115,
//   2 => 95,
//   3 => 85,
//   4 => 75,
//   5 => 65,
// ],

 //MAALUM CAVE
 18 => [
  1 => 125,
  2 => 100,
  3 => 90,
  4 => 80,
  5 => 70,
],

 //QUAD BIKE ADVENTURE
 19 => [
  1 => 230,
  2 => 260,
  3 => 260,
  4 => 260,
  5 => 260,
],


 //swim horse
 20 => [
  1 => 165,
  2 => 165,
  3 => 165,
  4 => 165,
  5 => 165,
],

 //sea walking
 21 => [
  1 => 150,
  2 => 150,
  3 => 150,
  4 => 150,
  5 => 150,
],

 //yatch cruise
 22 => [
  1 => 2000,
  2 => 2000,
  3 => 2000,
  4 => 2000,
  5 => 2000,
],


 //sky dive
 23 => [
  1 => 550,
  2 => 550,
  3 => 550,
  4 => 550,
  5 => 550,
],

 //SCUBA DIVING FOR CERTIFIED DIVERS
 24 => [
  1 => 185,
  2 => 210,
  3 => 205,
  4 => 205,
  5 => 205,
],


 //SEMI-SUBMARINE

 25 => [
  1 => 230,
  2 => 250,
  3 => 160,
  4 => 160,
  5 => 160,
],

 //NGALAWA BOAT EXPERIENCE
 26 => [
  1 => 130,
  2 => 90,
  3 => 80,
  4 => 70,
  5 => 60,
],

 //ZIPLINE EXPERIENCE
 28 => [
  1 => 170,
  2 => 170,
  3 => 170,
  4 => 170,
  5 => 170,
]
      ];
  
      $activityId = $this->activity->id;
      $numPersons = $this->perperson;
  
      if (!isset($prices[$activityId])) {
          // handle unknown activity ID
          $this->price = 0;
      } elseif ($numPersons == 1) {
          $this->price = $prices[$activityId][1];
      } 
      elseif ($numPersons == 2) {
        $this->price = $prices[$activityId][2];
    }

    elseif ($numPersons == 3) {
        $this->price = $prices[$activityId][3];
    }

    elseif ($numPersons == 4) {
        $this->price = $prices[$activityId][4];
    }

    else {
          $this->price = $prices[$activityId][5];
      }
  
  }
  
  public function lastpage(){

    session(['activity' => $this->activity->slug]);
  }
  public function setTotalPrice(){
    $this->setPrice();
    if (is_numeric($this->perperson)) {
      
      $this->totalPrice=$this->price*$this->perperson;
    }else {
      $this->totalPrice=$this->price;
    }
   
  }
  public function render()
  {
    return view('livewire.activity.index')->layout('layouts.main');
  }
}
