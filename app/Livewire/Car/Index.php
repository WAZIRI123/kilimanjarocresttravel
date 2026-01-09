<?php

namespace App\Livewire\Car;

use App\Mail\Reservation as MailReservation;
use App\Models\Transfer;
use App\Models\CarReservation;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use Livewire\Component;

class Index extends Component
{
    public $car;
    public $totalPrice;
    public $price;
    public $seaters;
    public $minStart_date;
    public $minEnd_date;
    public $start_date;
    public $email;
    public $name;
    public $end_date ;
    public $totalDays;

    public function mount(Transfer $car)
    {
      $this->car = $car;
      $this->price = 0;
      $this->minStart_date = date('Y-m-d');
      $this->minEnd_date =Carbon::parse(date('Y-m-d'))->add(1, 'day')->toDateString();
     
    }
    public function reservation()
    {
      $rules = [
        'start_date' => ['required', 'date', 'after:' . Carbon::parse($this->minStart_date)->yesterday()->toDateString()],
        'end_date' => ['required', 'date', 'after:' . Carbon::parse($this->minEnd_date)->yesterday()->toDateString()],
        'email' => ['required','email'],
        'name' => ['required']
    ];
    $validatedData = $this->validate($rules);
    $validatedData['car_id'] = $this->car->id;
    $validatedData['total_price'] = $this->totalPrice;
    $validatedData['user_id'] = auth()->id();
    $validatedData['code'] = str(uniqid('Grandezza-') . date('Ymd'))->upper();
    $reserveId=CarReservation::updateOrCreate(['car_id'=>$this->car->id,'start_date'=>$this->start_date,'end_date'=>$this->end_date],$validatedData);
    $this->dispatch('reservation:created');
    
   Mail::to('info@grandezzazanzibar.co.tz')->send(new MailReservation($this->email,$reserveId->cars?->name,$this->name,$this->start_date));
  
    }

    public function setPrice(){
      
     $price = [
          1=>[
            1=>20,
            2=>60,
            3=>80,
          ],
          2=>[
            1=>50,
            2=>130,
            3=>150,
          ],

          3=>[
            1=>35,
            2=>80,
            3=>100,
          ],

          4=>[
            1=>50,
            2=>130,
            3=>150,
          ],

          5=>[
            1=>50,
            2=>130,
            3=>150,
          ],

          6=>[
            1=>60,
            2=>150,
            3=>170,
          ]
     ];

     $carId=$this->car->id;
     $seaters=$this->seaters;
     if ($carId && $seaters) {
   
      $this->price = $price[$carId][$seaters];
     }

     if (!isset($price[$carId][$seaters])) {
      $this->price = 0;
     }


    }
      
    public function setTotalPrice(){

      $this->setPrice();
      if ($this->start_date >= $this->end_date) { 
        $this->reset('end_date');
    }

     $this->totalDays = Carbon::parse($this->start_date)->diffInDays($this->end_date);
      if ($this->totalDays !=null) {
        $this->totalPrice=$this->price*$this->totalDays;
      }else {
        $this->totalPrice=$this->price;
      }
 

    }
    public function lastpage(){

      session(['car' => $this->car->slug]);
    }
    public function render()
    {
        return view('livewire.car.index')->layout('layouts.main');
    }
}
