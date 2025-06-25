<div class="booking-wizard">
    <div class="wizard-container">
      
        <!-- Form Steps -->
        <div class="wizard-steps">
            <div style="margin: 1rem auto; display: flex; justify-content: center; align-items: center;">
                <a href="/" class="btn-home" style="display: inline-flex; align-items: center; justify-content: center; font-size: 0.7rem; gap: 4px;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 12H5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 19L5 12L12 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>Go Home</span>
                </a>
            </div>
            @if($currentStep === 1)
                <!-- Step 1: Destination Selection -->
                <div>
                    <h2 class="step-title">Where would you like to travel?</h2>
                    <div class="destinations-grid">
                        @php
                            $destinations = ['KENYA', 'TANZANIA', 'RWANDA', 'UGANDA', 'ZANZIBAR', 'OPEN TO IDEAS'];
                        @endphp

                        @foreach($destinations as $destination)
                            <button 
                                type="button"
                                wire:click="selectDestination('{{ $destination }}')"
                                class="destination-btn {{ $selectedDestination === $destination ? 'selected' : '' }}"
                            >
                                {{ $destination }}
                            </button>
                        @endforeach
                    </div>
                </div>
            @elseif($currentStep === 2)
                <!-- Step 2: Budget Selection -->
                <div>
                    <h2 class="step-title">What is your budget per person?</h2>
                    <div class="destinations-grid">
                        @foreach($budgetOptions as $option)
                            <button 
                                type="button"
                                wire:click="selectBudget('{{ $option }}')"
                                class="destination-btn {{ $selectedBudget === $option ? 'selected' : '' }}"
                            >
                                {{ $option }}
                            </button>
                        @endforeach
                    </div>
                </div>
            @elseif($currentStep === 3)
                <!-- Step 3: Travel Date Selection -->
                <div>
                    <h2 class="step-title">When would you like to travel?</h2>
                    <div class="destinations-grid">
                        @foreach($travelDateOptions as $option)
                            <button 
                                type="button"
                                wire:click="selectTravelDate('{{ $option }}')"
                                class="destination-btn {{ $selectedTravelDate === $option ? 'selected' : '' }}"
                            >
                                {{ $option }}
                            </button>
                        @endforeach
                    </div>
                </div>
                
            @elseif($currentStep === 4 && is_numeric($selectedTravelDate))
                <!-- Step 4: Month Selection (for specific year) -->
                <div>
                    <h2 class="step-title">Select Month for {{ $selectedTravelDate }}</h2>
                    <div class="destinations-grid">
                        @foreach($months as $month)
                            <button 
                                type="button"
                                wire:click="$set('selectedMonth', '{{ $month }}')"
                                class="destination-btn {{ $selectedMonth === $month ? 'selected' : '' }}"
                            >
                                {{ $month }}
                            </button>
                        @endforeach
                    </div>
                </div>
                
            @elseif($currentStep === 5 && is_numeric($selectedTravelDate) && $selectedMonth)
                <!-- Step 5: Day Selection (for specific month/year) -->
                <div>
                    <h2 class="step-title">Select Day for {{ $selectedMonth }} {{ $selectedTravelDate }}</h2>
                    <div class="destinations-grid">
                        @foreach($days as $day)
                            <button 
                                type="button"
                                wire:click="$set('selectedDay', '{{ $day }}')"
                                class="destination-btn {{ $selectedDay == $day ? 'selected' : '' }}"
                            >
                                {{ $day }}
                            </button>
                        @endforeach
                    </div>
                </div>
                            @elseif($currentStep === 6 && $selectedTravelDate === 'I have specific dates')
                <!-- Step 6: Date Selection -->
                <div class="date-selection-container">
                    <h2 class="step-title">Enter your travel dates</h2>
                    <div class="date-fields">
                        <div class="date-option">
                            <label for="arrivalDateInput" class="date-option-label">Arrival</label>
                            <div class="date-option-inner">
                                <input 
                                    type="date" 
                                    id="arrivalDateInput"
                                    class="date-option-input"
                                    wire:model.live="arrivalDate"
                                    min="{{ date('Y-m-d') }}"
                                    {{ !$arrivalDate ? 'required' : '' }}
                                >
                            </div>
                        </div>

                        <div class="date-option">
                            <label for="departureDateInput" class="date-option-label">Departure</label>
                            <div class="date-option-inner" {{ !$arrivalDate ? 'style="opacity: 0.6; pointer-events: none;"' : '' }}>
                                <input 
                                    type="date" 
                                    id="departureDateInput"
                                    class="date-option-input"
                                    wire:model.live="departureDate"
                                    min="{{ $arrivalDate ?? '' }}"
                                    {{ !$arrivalDate ? 'disabled' : 'required' }}
                                >
                            </div>
                        </div>
                    </div>
                </div>
                
                @push('scripts')
                <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
                <script>
                    document.addEventListener('livewire:initialized', () => {
                        // Format date from YYYY-MM-DD to DD/MM/YYYY
                        const formatDateForInput = (dateStr) => {
                            if (!dateStr) return '';
                            const [year, month, day] = dateStr.split('-');
                            return `${day}/${month}/${year}`;
                        };

                        // Parse date from DD/MM/YYYY to Date object
                        const parseDateInput = (dateStr) => {
                            if (!dateStr) return null;
                            const [day, month, year] = dateStr.split('/').map(Number);
                            if (day && month && year) {
                                return new Date(year, month - 1, day);
                            }
                            return null;
                        };

                        // Initialize date pickers
                        const initDatePickers = () => {
                            // Arrival date picker
                            const arrivalInput = document.getElementById('arrivalDateInput');
                            const arrivalPicker = flatpickr(arrivalInput, {
                                dateFormat: "d/m/Y",
                                minDate: "today",
                                allowInput: true,
                                clickOpens: true,
                                onOpen: function(selectedDates) {
                                    this.set('minDate', "today");
                                    if (selectedDates.length > 0) {
                                        this.setDate(selectedDates[0]);
                                    }
                                },
                                onChange: function(selectedDates, dateStr) {
                                    if (selectedDates.length > 0) {
                                        const formattedDate = this.formatDate(selectedDates[0], 'Y-m-d');
                                        @this.set('arrivalDate', formattedDate);
                                        
                                        // Enable and update departure date picker
                                        if (window.departurePicker) {
                                            window.departurePicker.set('minDate', selectedDates[0]);
                                            const departureContainer = document.getElementById('departureDateContainer');
                                            departureContainer.style.opacity = '1';
                                            departureContainer.style.pointerEvents = 'auto';
                                            
                                            // If departure date is before arrival, reset it
                                            if (window.departurePicker.selectedDates[0] && 
                                                window.departurePicker.selectedDates[0] <= selectedDates[0]) {
                                                window.departurePicker.clear();
                                                @this.set('departureDate', '');
                                                document.getElementById('departureDateInput').value = '';
                                            }
                                        }
                                    }
                                }
                            });
                            
                            // Set initial value if exists
                            if (@js($arrivalDate)) {
                                arrivalInput.value = formatDateForInput(@js($arrivalDate));
                            }

                            // Departure date picker
                            const departureInput = document.getElementById('departureDateInput');
                            const departurePicker = flatpickr(departureInput, {
                                dateFormat: "d/m/Y",
                                minDate: @js($arrivalDate) ? new Date(@js($arrivalDate)) : 'today',
                                allowInput: true,
                                clickOpens: true,
                                onOpen: function(selectedDates) {
                                    if (selectedDates.length > 0) {
                                        this.setDate(selectedDates[0]);
                                    }
                                },
                                onChange: function(selectedDates, dateStr) {
                                    if (selectedDates.length > 0) {
                                        const formattedDate = this.formatDate(selectedDates[0], 'Y-m-d');
                                        @this.set('departureDate', formattedDate);
                                    }
                                }
                            });
                            
                            // Set initial value if exists
                            if (@js($departureDate)) {
                                departureInput.value = formatDateForInput(@js($departureDate));
                            }

                            // Make departure picker available globally for arrival picker's onChange
                            window.departurePicker = departurePicker;
                            
                            return { arrivalPicker, departurePicker };
                        };
                        
                        // Initialize date pickers
                        const { arrivalPicker, departurePicker } = initDatePickers();
                        
                        // Handle manual date input
                        const handleManualDateInput = (input, picker) => {
                            const date = parseDateInput(input.value);
                            if (date && !isNaN(date.getTime())) {
                                picker.setDate(date);
                                const formattedDate = picker.formatDate(date, 'Y-m-d');
                                if (picker === arrivalPicker) {
                                    @this.set('arrivalDate', formattedDate);
                                } else {
                                    @this.set('departureDate', formattedDate);
                                }
                            }
                        };

                        // Add input event listeners for manual date entry
                        document.getElementById('arrivalDateInput').addEventListener('change', (e) => {
                            handleManualDateInput(e.target, arrivalPicker);
                        });

                        document.getElementById('departureDateInput').addEventListener('change', (e) => {
                            if (@this.arrivalDate) {
                                handleManualDateInput(e.target, departurePicker);
                            }
                        });
                        
                        // Update departure date picker when arrival date changes via Livewire
                        Livewire.hook('commit', ({ component, commit, respond, succeed, fail, params: [name, options] }) => {
                            if (name === '$set' && options.propertyName === 'arrivalDate') {
                                if (options.value) {
                                    const minDate = new Date(options.value);
                                    departurePicker.set('minDate', minDate);
                                    const departureContainer = document.getElementById('departureDateContainer');
                                    departureContainer.style.opacity = '1';
                                    departureContainer.style.pointerEvents = 'auto';
                                    
                                    // Format and set the arrival date in the input
                                    const arrivalDate = new Date(options.value);
                                    document.getElementById('arrivalDateInput').value = 
                                        arrivalDate.toLocaleDateString('en-GB');
                                } else {
                                    const departureContainer = document.getElementById('departureDateContainer');
                                    departureContainer.style.opacity = '0.6';
                                    departureContainer.style.pointerEvents = 'none';
                                    departurePicker.clear();
                                    @this.set('departureDate', '');
                                    document.getElementById('departureDateInput').value = '';
                                }
                            }
                            
                            // Update displayed dates when they change
                            if (name === '$set' && options.propertyName === 'departureDate') {
                                if (options.value) {
                                    const date = new Date(options.value);
                                    document.getElementById('departureDateInput').value = 
                                        date.toLocaleDateString('en-GB');
                                }
                            }
                        });
                        
                        // Reinitialize pickers on Livewire updates
                        document.addEventListener('livewire:navigated', () => {
                            initDatePickers();
                        });
                    });
                </script>
                @endpush
                
            @elseif($currentStep === 7 && $selectedTravelDate === 'I am flexible')
                <!-- Step 7: Duration Selection (for flexible dates) -->
                <div>
                    <h2 class="step-title">How long would you like to stay?</h2>
                    <div class="destinations-grid">
                        @foreach($durations as $duration)
                            <button 
                                type="button"
                                wire:click="$set('selectedDuration', '{{ $duration }}')"
                                class="destination-btn {{ $selectedDuration === $duration ? 'selected' : '' }}"
                            >
                                {{ $duration }}
                            </button>
                        @endforeach
                    </div>
                </div>
                
            @elseif($currentStep === 8)
                <!-- Step 8: Traveler Type Selection -->
                <div>
                    <h2 class="step-title">Who will you be travelling with?</h2>
                    <div class="destinations-grid">
                        @foreach($travelingWithOptions as $option)
                            <button 
                                type="button"
                                wire:click="$set('travelingWith', '{{ $option }}')"
                                class="destination-btn {{ $travelingWith === $option ? 'selected' : '' }}"
                            >
                                {{ $option }}
                            </button>
                        @endforeach
                    </div>
                </div>
                
            @elseif($currentStep === 9)
                <!-- Step 9: Contact Information -->
                <div class="contact-information-step">
                    <h2 class="step-title">Where can we send your trip details?</h2>
                    <p class="step-subtitle">We'll use this information to contact you about your safari plans.</p>
                    
                    <div class="contact-form">
                        <div class="form-row">
                            <div class="form-group half-width">
                                <label for="firstName">First Name*</label>
                                <input 
                                    type="text" 
                                    id="firstName" 
                                    wire:model.live="firstName"
                                    class="form-control"
                                    placeholder="Your first name"
                                >
                            </div>
                            <div class="form-group half-width">
                                <label for="lastName">Last Name*</label>
                                <input 
                                    type="text" 
                                    id="lastName" 
                                    wire:model.live="lastName"
                                    class="form-control"
                                    placeholder="Your last name"
                                >
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email Address*</label>
                            <input 
                                type="email" 
                                id="email" 
                                wire:model.live="email"
                                class="form-control"
                                placeholder="your.email@example.com"
                            >
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group half-width">
                                <label for="phone">Phone Number*</label>
                                <input 
                                    type="tel" 
                                    id="phone" 
                                    wire:model.live="phone"
                                    class="form-control"
                                    placeholder="+254 700 000000"
                                >
                            </div>
                            <div class="form-group half-width">
                                <label for="country">Country*</label>
                                <input 
                                    type="text" 
                                    id="country" 
                                    wire:model.live="country"
                                    class="form-control"
                                    placeholder="Your country of residence"
                                >
                            </div>
                        </div>
                        
                        <div class="form-group newsletter-option">
                            <div class="checkbox-container">
                                <input 
                                    type="checkbox" 
                                    id="subscribeToNewsletter" 
                                    wire:model.live="subscribeToNewsletter"
                                    class="checkbox-input"
                                >
                                <label for="subscribeToNewsletter" class="checkbox-label">
                                    Yes, I'd like to receive travel inspiration, special offers, and updates from Stan Safaris
                                </label>
                            </div>
                            <p class="newsletter-description">
                                Stay updated with the latest safari deals, travel tips, and exclusive offers. We respect your privacy and you can unsubscribe at any time.
                            </p>
                        </div>
                    </div>
                </div>
                
            @elseif($currentStep === 10)
                <!-- Step 10: Safari Preferences -->
                <div class="safari-preferences-step">
                    <h2 class="step-title">Tell us about your dream safari</h2>
                    <p class="step-subtitle">What would you like to see and experience on your safari?</p>
                    <div class="form-group">
                        <textarea 
                            class="form-control safari-preferences-textarea" 
                            wire:model.live="safariPreferences"
                            placeholder="For example: Must-see wildlife, special occasions, preferred activities, accommodation preferences, or any specific requirements you have..."
                            rows="6"
                        ></textarea>
                        <p class="hint-text">The more you tell us, the better we can tailor your perfect safari experience.</p>
                    </div>
                </div>
                
            @elseif($currentStep === 10)
                <!-- Step 10: Safari Preferences -->
                <div class="safari-preferences-step">
                    <h2 class="step-title">Tell us about your dream safari</h2>
                    <p class="step-subtitle">What would you like to see and experience on your safari?</p>
                    <div class="form-group">
                        <textarea 
                            class="form-control safari-preferences-textarea" 
                            wire:model.live="safariPreferences"
                            placeholder="For example: Must-see wildlife, special occasions, preferred activities, accommodation preferences, or any specific requirements you have..."
                            rows="6"
                        ></textarea>
                        <p class="hint-text">The more you tell us, the better we can tailor your perfect safari experience.</p>
                    </div>
                </div>
                
            @elseif($currentStep === 11)
                <!-- Final Step: Confirmation -->
                <div class="step-content">
                    <h2 class="step-title">Almost There!</h2>
                    <p class="step-description">Thank you for your information. Please review your details below and click 'Complete Booking' to proceed.</p>
                    
                    <!-- Display summary of selections -->
                    <div class="summary-container">
                        <h3>Your Trip Details</h3>
                        <div class="summary-section">
                            <h4>Trip Information</h4>
                            @if($package && $package->title)
                                <p><strong>Package:</strong> {{ $package->title }}</p>
                            @endif
                            <p><strong>Destination:</strong> {{ $selectedDestination }}</p>
                            <p><strong>Budget:</strong> {{ $selectedBudget }}</p>
                            <p>
                                <strong>Travel Dates:</strong> 
                                @if(is_numeric($selectedTravelDate))
                                    {{ $selectedDay }} {{ $selectedMonth }} {{ $selectedTravelDate }}
                                @elseif($selectedTravelDate === 'I have specific dates')
                                    {{ date('M d, Y', strtotime($arrivalDate)) }} to {{ date('M d, Y', strtotime($departureDate)) }}
                                @else
                                    Flexible - {{ $selectedDuration }}
                                @endif
                            </p>
                            @if($travelingWith)
                                <p><strong>Traveling With:</strong> {{ $travelingWith }}</p>
                            @endif
                            @if($safariPreferences)
                                <p><strong>Your Safari Preferences:</strong> {{ $safariPreferences }}</p>
                            @endif
                        </div>
                        
                        <div class="summary-section">
                            <h4>Contact Information</h4>
                            <p><strong>Name:</strong> {{ $firstName }} {{ $lastName }}</p>
                            <p><strong>Email:</strong> {{ $email }}</p>
                            <p><strong>Phone:</strong> {{ $phone }}</p>
                            <p><strong>Country:</strong> {{ $country }}</p>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Navigation Buttons -->
            <div class="navigation-buttons">
                @if($currentStep > 1 && !$isSubmitted)
                    <button 
                        type="button"
                        wire:click="goToPreviousStep"
                        class="btn-back"
                        @if($isSubmitting) disabled @endif
                    >
                        Back
                    </button>
                @elseif(!$isSubmitted)
                    <div></div> <!-- Empty div for flex spacing -->
                @endif
                
                @if($currentStep === $totalSteps && !$isSubmitted)
                    <!-- Submit Button for Final Step -->
                    <button 
                        type="button"
                        wire:click="submitBooking"
                        class="btn-next loading-button"
                        wire:loading.attr="disabled"
                        wire:loading.class="is-loading"
                    >
                        <span class="button-content">
                            <span class="button-text">Complete Booking</span>
                            <span class="loading-spinner">
                                <span class="spinner-dot"></span>
                                <span class="spinner-dot"></span>
                                <span class="spinner-dot"></span>
                            </span>
                        </span>
                    </button>
                @elseif(!$isSubmitted)
                    <!-- Regular Next Button -->
                    <button 
                        type="button"
                        wire:click="goToNextStep"
                        class="btn-next"
                        @if(($currentStep === 1 && !$selectedDestination) || 
                            ($currentStep === 2 && !$selectedBudget) ||
                            ($currentStep === 3 && !$selectedTravelDate) ||
                            ($currentStep === 4 && !$selectedMonth) ||
                            ($currentStep === 5 && !$selectedDay) ||
                            ($currentStep === 6 && (!$arrivalDate || !$departureDate)) ||
                            ($currentStep === 7 && !$selectedDuration) ||
                            ($currentStep === 8 && !$travelingWith)) disabled @endif
                    >
                        NEXT
                    </button>
                @endif
                
                @if($isSubmitted)
                    <div class="submission-success">
                        <div class="success-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h3>Booking Submitted Successfully!</h3>
                        <p>Thank you for your booking request. We've received your details and our team will contact you shortly to confirm your safari adventure.</p>
                        <div class="success-actions">
                            <a href="/" class="btn-home"  >
                                <svg xmlns="http://www.w3.org/2000/svg" class="home-icon" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                                </svg>
                                Go Home
                            </a>
                        </div>
                    </div>
                @endif
            </div>
            
            <!-- Error Message Display -->
            @if($submissionError)
                <div class="error-message">
                    <div class="alert alert-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                        </svg>
                        {{ $submissionError }}
                    </div>
                </div>
            @endif
            
            <!-- Progress Bar at Bottom -->
            <div class="progress-container bottom-progress">
                <div class="progress-header">
                    <span class="progress-label">PROGRESS</span>
                    
                </div>
                <div class="progress-bar">
                    <div class="progress-fill" style="width: {{ $progress }}%"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
<link href="{{ asset('css/booking-wizard.css') }}" rel="stylesheet">
@endpush
