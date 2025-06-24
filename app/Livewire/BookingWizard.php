<?php

namespace App\Livewire;

use Livewire\Component;

class BookingWizard extends Component
{
    public $currentStep = 1;
    public $totalSteps = 8; // Updated total steps to include traveler type and additional steps
    public $selectedDestination = '';
    public $selectedBudget = '';
    public $selectedTravelDate = '';
    public $selectedMonth = '';
    public $selectedDay = '';
    public $arrivalDate = '';
    public $departureDate = '';
    public $selectedDuration = '';
    public $travelingWith = ''; // Added for traveler type selection
    
    // Traveling with options
    public $travelingWithOptions = [
        'I TRAVEL SOLO',
        'MY PARTNER',
        'MY FAMILY',
        'MY FRIENDS'
    ];
    
    // Budget options
    public $budgetOptions = [
        'LESS THAN US$5,000',
        'US$5,000 - US$10,000',
        'US$10,000 - US$15,000',
        'US$15,000 +',
        'NOT SURE'
    ];
    
    // Travel date options
    public $travelDateOptions = [];
    public $months = [];
    public $days = [];
    public $durations = [
        '10 days',
        '1 week',
        '2 weeks',
        '2 weeks+'
    ];
    
    public function mount()
    {
        $currentYear = (int)date('Y');
        $this->travelDateOptions = [
            (string)$currentYear,
            (string)($currentYear + 1),
            (string)($currentYear + 2),
            'I am flexible',
            'I have specific dates'
        ];
        
        $this->months = [
            'January', 'February', 'March', 'April', 'May', 'June',
            'July', 'August', 'September', 'October', 'November', 'December'
        ];
    }
    
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
    
    public function selectBudget($budget)
    {
        $this->selectedBudget = $budget;
    }
    
    public function selectTravelDate($option)
    {
        $this->selectedTravelDate = $option;
        // If specific dates are selected, generate days for current month
        if ($option === 'I have specific dates') {
            $this->arrivalDate = '';
            $this->departureDate = '';
        } elseif ($option === 'I am flexible') {
            $this->selectedDuration = '';
        } else {
            // For year selection, reset month and day
            $this->selectedMonth = '';
            $this->selectedDay = '';
            // Generate days for current month if a month is selected
            if ($this->selectedMonth) {
                $this->updatedSelectedMonth();
            }
        }
    }

    public function goToNextStep()
    {
        // Validate current step before proceeding
        if (!$this->validateCurrentStep()) {
            return;
        }
        
        // Handle conditional step progression
        if ($this->currentStep === 3) {
            // After travel date selection, determine next step
            if (is_numeric($this->selectedTravelDate)) {
                $this->currentStep = 4; // Go to month selection
            } elseif ($this->selectedTravelDate === 'I have specific dates') {
                $this->currentStep = 6; // Skip to date range input
            } elseif ($this->selectedTravelDate === 'I am flexible') {
                $this->currentStep = 7; // Skip to duration selection
            }
        } elseif ($this->currentStep === 4) {
            // After month selection, go to day selection
            $this->currentStep = 5;
        } elseif ($this->currentStep === 5 || $this->currentStep === 6 || $this->currentStep === 7) {
            // After any date selection path, go to traveler type selection
            $this->currentStep = 8;
        } else {
            // Default step increment
            $this->currentStep++;
        }
    }
    
    public function goToPreviousStep()
    {
        if ($this->currentStep > 1) {
            // If going back from traveler type step, return to appropriate date selection
            if ($this->currentStep === 8) {
                if ($this->selectedTravelDate === 'I have specific dates') {
                    $this->currentStep = 6;
                } elseif ($this->selectedTravelDate === 'I am flexible') {
                    $this->currentStep = 7;
                } elseif (is_numeric($this->selectedTravelDate)) {
                    $this->currentStep = 5; // Go back to day selection
                }
            } 
            // If going back from date selection steps, return to travel date selection
            elseif ($this->currentStep >= 4 && $this->currentStep <= 7) {
                $this->currentStep = 3;
            } else {
                $this->currentStep--;
            }
        }
    }
    
    protected function validateCurrentStep()
    {
        switch ($this->currentStep) {
            case 1:
                return !empty($this->selectedDestination);
            case 2:
                return !empty($this->selectedBudget);
            case 3:
                return !empty($this->selectedTravelDate);
            case 4:
                return !empty($this->selectedMonth);
            case 5:
                return !empty($this->selectedDay);
            case 6:
                return !empty($this->arrivalDate) && !empty($this->departureDate);
            case 7:
                return !empty($this->selectedDuration);
            case 8:
                return !empty($this->travelingWith);
            default:
                return true;
        }
    }
    
    public function updatedSelectedMonth()
    {
        // Update days based on selected month and year
        $year = is_numeric($this->selectedTravelDate) ? (int)$this->selectedTravelDate : (int)date('Y');
        $month = array_search($this->selectedMonth, $this->months) + 1;
        $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
        
        $this->days = range(1, $daysInMonth);
        $this->selectedDay = ''; // Reset selected day when month changes
    }
}
