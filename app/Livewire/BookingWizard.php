<?php

namespace App\Livewire;

use Livewire\Component;

class BookingWizard extends Component
{
    public $currentStep = 1;
    public $totalSteps = 3; // Adjust based on your total steps
    public $selectedDestination = '';
    
    protected $listeners = ['goToNextStep', 'goToPreviousStep'];

    public function render()
    {
        return view('livewire.booking-wizard', [
            'progress' => ($this->currentStep / $this->totalSteps) * 100
        ]);
    }

    public function selectDestination($destination)
    {
        $this->selectedDestination = $destination;
    }

    public function goToNextStep()
    {
        if ($this->currentStep < $this->totalSteps) {
            $this->currentStep++;
        }
    }

    public function goToPreviousStep()
    {
        if ($this->currentStep > 1) {
            $this->currentStep--;
        }
    }
}
