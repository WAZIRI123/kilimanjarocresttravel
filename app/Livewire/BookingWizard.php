<?php

namespace App\Livewire;

use App\Models\Booking;
use App\Mail\AdminBookingNotification;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class BookingWizard extends Component
{
    public $currentStep = 1;
    public $totalSteps = 11; // Total steps including contact info and confirmation
    
    // Form submission state
    public $isSubmitting = false;
    public $isSubmitted = false;
    public $submissionError = null;
    
    // Contact Information
    public $firstName = '';
    public $lastName = '';
    public $email = '';
    public $phone = '';
    public $country = '';
    public $subscribeToNewsletter = false;
    
    // Safari Preferences
    public $safariPreferences = '';
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
        } elseif ($this->currentStep === 8) {
            // After traveler type, go to contact information
            $this->currentStep = 9;
        } elseif ($this->currentStep === 9) {
            // After contact information, go to safari preferences
            $this->currentStep = 10;
        } elseif ($this->currentStep === 10) {
            // After safari preferences, go to confirmation
            $this->currentStep = 11;
        } else {
            // Default step increment
            $this->currentStep++;
        }
    }
    
    public function goToPreviousStep()
    {
        if ($this->currentStep > 1) {
            // If going back from confirmation, go to safari preferences
            if ($this->currentStep === 11) {
                $this->currentStep = 10;
            }
            // If going back from safari preferences, go to contact information
            elseif ($this->currentStep === 10) {
                $this->currentStep = 9;
            }
            // If going back from contact information, go to traveler type
            elseif ($this->currentStep === 9) {
                $this->currentStep = 8;
            }
            // If going back from traveler type step, return to appropriate date selection
            elseif ($this->currentStep === 8) {
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
            case 9: // Contact Information
                return !empty($this->firstName) && 
                       !empty($this->lastName) && 
                       !empty($this->email) && 
                       filter_var($this->email, FILTER_VALIDATE_EMAIL) &&
                       !empty($this->phone) &&
                       !empty($this->country);
            case 10: // Safari Preferences
                return !empty($this->safariPreferences);
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
    
    /**
     * Submit the booking form
     */
    public function submitBooking()
    {
        // Prevent multiple submissions
        if ($this->isSubmitting) {
            return;
        }
        
        // Final validation before submission
        if (!$this->validateAllSteps()) {
            return;
        }
        
        $this->isSubmitting = true;
        $this->submissionError = null;
        
        Log::info('Starting booking submission', [
            'email' => $this->email,
            'destination' => $this->selectedDestination,
            'step' => $this->currentStep
        ]);
        
        // Ensure the UI updates to show loading state
        $this->dispatch('$refresh');
        
        try {
            // Create new booking
            $bookingData = [
                'first_name' => $this->firstName,
                'last_name' => $this->lastName,
                'email' => $this->email,
                'phone' => $this->phone,
                'country' => $this->country,
                'subscribe_to_newsletter' => $this->subscribeToNewsletter ? 1 : 0,
                'destination' => $this->selectedDestination,
                'budget' => $this->selectedBudget,
                'travel_date_option' => $this->selectedTravelDate,
                'selected_month' => $this->selectedMonth,
                'selected_day' => $this->selectedDay,
                'arrival_date' => $this->arrivalDate ?: null,
                'departure_date' => $this->departureDate ?: null,
                'selected_duration' => $this->selectedDuration,
                'traveling_with' => $this->travelingWith,
                'safari_preferences' => $this->safariPreferences,
                'status' => 'pending',
            ];
            
            Log::info('Attempting to create booking', $bookingData);
            
            $booking = new Booking($bookingData);
            
            // Save the booking
            $saved = $booking->save();
            
            if (!$saved) {
                throw new \Exception('Failed to save booking to database');
            }
            
            Log::info('Booking saved successfully', ['booking_id' => $booking->id]);
            
            // Send email notification to admin
            try {
                $adminEmail = config('mail.admin_email', 'admin@stansafaris.com');
                Log::info('Sending email notification to admin: ' . $adminEmail);
                
                Mail::to($adminEmail)->send(new AdminBookingNotification($booking));
                Log::info('Admin email notification sent successfully');
                
            } catch (\Exception $adminEmailException) {
                Log::error('Failed to send admin email notification', [
                    'error' => $adminEmailException->getMessage(),
                    'trace' => $adminEmailException->getTraceAsString()
                ]);
                // Continue even if admin email fails
            }
            
            // Send confirmation email to user
            try {
                Log::info('Sending confirmation email to user: ' . $this->email);
                
                Mail::to($this->email)->send(new \App\Mail\BookingConfirmation($booking));
                Log::info('User confirmation email sent successfully');
                
            } catch (\Exception $userEmailException) {
                Log::error('Failed to send user confirmation email', [
                    'error' => $userEmailException->getMessage(),
                    'trace' => $userEmailException->getTraceAsString()
                ]);
                // Continue even if user email fails
            }
            
            // Mark as submitted
            $this->isSubmitted = true;
            $this->isSubmitting = false;
            
            // Reset form state if needed
            // $this->resetExcept(['isSubmitted']);
            
        } catch (\Exception $e) {
            $errorMessage = 'Booking submission failed: ' . $e->getMessage();
            Log::error($errorMessage, [
                'exception' => get_class($e),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString()
            ]);
            
            $this->submissionError = 'An error occurred while submitting your booking. Please try again later.';
            $this->isSubmitting = false;
            
            // Log the full error to the browser console for debugging
            $this->dispatchBrowserEvent('console-error', [
                'message' => $errorMessage,
                'file' => $e->getFile(),
                'line' => $e->getLine()
            ]);
            
            // Ensure UI updates to enable the button again
            $this->dispatch('$refresh');
        } finally {
            $this->isSubmitting = false;
        }
    }
    
    /**
     * Validate all form steps
     */
    protected function validateAllSteps()
    {
        // Check all required steps
        $stepsToValidate = [
            1 => !empty($this->selectedDestination),
            2 => !empty($this->selectedBudget),
            3 => !empty($this->selectedTravelDate),
            4 => is_numeric($this->selectedTravelDate) ? !empty($this->selectedMonth) : true,
            5 => (is_numeric($this->selectedTravelDate) && $this->selectedMonth) ? !empty($this->selectedDay) : true,
            6 => ($this->selectedTravelDate === 'I have specific dates') ? (!empty($this->arrivalDate) && !empty($this->departureDate)) : true,
            7 => ($this->selectedTravelDate === 'I am flexible') ? !empty($this->selectedDuration) : true,
            8 => !empty($this->travelingWith),
            9 => !empty($this->firstName) && 
                 !empty($this->lastName) && 
                 !empty($this->email) && 
                 filter_var($this->email, FILTER_VALIDATE_EMAIL) &&
                 !empty($this->phone) &&
                 !empty($this->country),
            10 => !empty($this->safariPreferences),
        ];
        
        // If any step is invalid, return false
        return !in_array(false, $stepsToValidate, true);
    }
    
    /**
     * Reset the form
     */
    public function resetForm()
    {
        $this->reset([
            'currentStep',
            'firstName',
            'lastName',
            'email',
            'phone',
            'country',
            'subscribeToNewsletter',
            'safariPreferences',
            'selectedDestination',
            'selectedBudget',
            'selectedTravelDate',
            'selectedMonth',
            'selectedDay',
            'arrivalDate',
            'departureDate',
            'selectedDuration',
            'travelingWith',
            'isSubmitted',
            'isSubmitting',
            'submissionError',
        ]);
        
        $this->currentStep = 1;
    }
}
