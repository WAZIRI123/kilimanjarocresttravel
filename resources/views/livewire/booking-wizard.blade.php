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
            @endif

            <!-- Add more steps here -->
            @if($currentStep > 1)
                <div class="step-content">
                    <h2 class="step-title">Step {{ $currentStep }}</h2>
                    <p class="step-description">Content for step {{ $currentStep }} will go here.</p>
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
                    @if(!$selectedDestination) disabled @endif
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
