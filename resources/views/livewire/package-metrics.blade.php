<div class="package-metrics flex items-center space-x-6 mt-4">
    <div class="flex items-center text-gray-600">
        <i class="fas fa-eye mr-2"></i>
        <span class="text-sm font-medium">{{ number_format($views) }}</span>
    </div>
    <div class="flex items-center text-gray-600 relative">
        <button type="button" wire:click="toggleLike" class="flex items-center focus:outline-none relative z-10 p-2 -m-2">
            @if($hasLiked)
               <i class="fas fa-heart" style="color: #ff8787;"></i>
                <span class="text-sm font-medium text-red-500 ml-1">{{ number_format($likes) }}</span>
            @else
                <i class="far fa-heart text-base" style="color: #555;"></i>
                <span class="text-sm font-normal ml-1" style="color: #555;">{{ number_format($likes) }}</span>
            @endif
        </button>
    </div>
</div>

@push('styles')
<style>
    .package-metrics {
        display: flex;
        align-items: center;
        gap: 1.5rem;
        margin-top: 1rem;
    }
    .package-metrics i {
        font-size: 1.1rem;
        transition: all 0.2s ease;
        position: relative;
        z-index: 5;
    }
    .package-metrics .fa-heart:hover {
        transform: scale(1.1);
        color: #ef4444;
    }
    .package-metrics span {
        font-size: 0.9rem;
        font-weight: 500;
    }
</style>
@endpush
