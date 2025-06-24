<div class="booking-wizard">
    <div class="wizard-container">
        <!-- Form Steps -->
        <div class="wizard-steps">
            <div style="margin:1rem auto; text-align:center;">
                <a href="/" style="display:inline-flex; align-items:center; text-decoration:none; color:black; font-size:12px;">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-right:4px;">
                        <path d="M19 12H5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 19L5 12L12 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Go Home
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
                <!-- Step 9: Safari Preferences -->
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
                <!-- Final Step -->
                <div class="step-content">
                    <h2 class="step-title">Almost There!</h2>
                    <p class="step-description">Thank you for your information. Click 'Complete Booking' to proceed.</p>
                    
                    <!-- Display summary of selections -->
                    <div class="summary-container">
                        <h3>Your Selections:</h3>
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
                    </div>
                </div>
            @endif

            <!-- Navigation Buttons -->
            <div class="navigation-buttons">
                @if($currentStep > 1)
                    <button 
                        type="button"
                        wire:click="goToPreviousStep"
                        class="btn-back"
                    >
                        Back
                    </button>
                @else
                    <div></div> <!-- Empty div for flex spacing -->
                @endif
                
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
                    {{ $currentStep === $totalSteps ? 'Complete Booking' : 'NEXT' }}
                </button>
            </div>
            
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
