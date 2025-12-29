<section class="mt-28 mb-10">
    <div class="container px-8 mx-auto grid lg:grid-cols-12 gap-10">
        <main class="w-full space-y-6 lg:col-span-8">
            <div class="aspect-[16/9] overflow-hidden rounded-tl-2xl rounded-br-2xl relative z-10">
                <img src="{{ asset("$car->image") }}" class="w-full block hover:scale-110 transition-all duration-300" alt="{{ $car->name }}">
            </div>
            <div class="bg-gray-200 text-sm text-gray-600 flex gap-x-4 gap-y-2 justify-center rounded-tr-lg rounded-bl-lg py-2 px-4">
                <div class="flex items-center gap-1 text-gray-800">
                    <i class='bx bx-show'></i>
                    <span class="text-sm capitalize"></span>
                </div>
                <div class="flex items-center gap-1 text-gray-800">
                    <i class='bx bx-star'></i>
                    <span class="text-sm capitalize"></span>
                </div>
                <div class="flex items-center gap-1 text-gray-800">
                    <i class='bx bx-chat'></i>
                    <span class="text-sm capitalize"></span>
                </div>
                <div class="flex items-center gap-1 text-gray-800">
                    <i class='bx bx-money'></i>
                    <span class="text-sm capitalize">${{ $car->price }}</span>
                </div>
            </div>
            <div class="prose sm:prose-base prose max-w-none prose-img:rounded-tr-xl prose-img:rounded-bl-xl prose-img:w-full">
                <h1>{{ $car->name }}</h1>

            </div>

        </main>
        <aside class="relative  lg:col-span-4 space-y-4 ">
            <div class="space-y-2">
                <h2 class="text-2xl text-gray-800 font-bold">Reservation</h2>
                <p class="tracking-wide text-gray-600 sm:text-base text-sm">
                    {{ __("Interested in this car? Hurry up and book before it's too late! ") }}<span class="font-bold">{{ __(' cars available.') }}</span>
                </p>
            </div>
            <hr>
            <form action="#" method="POST" wire:submit.prevent='reservation' class="grid gap-4">
                <div class="grid lg:grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="form-control">
                        <label for="start_date" class="label">{{ __('Start Date') }}</label>
                        <input class="w-full input" type="date" name="start_date" min="{{$minStart_date}}"  wire:change='setTotalPrice' wire:model.live='start_date' id="start_date" />
                        @error('start_date')
                        <span class="invalid">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-control">
                        <label for="end_date" class="label">{{ __('End Date') }}</label>
                        <input class="w-full input" type="date" name="end_date" min="{{$minEnd_date}}" wire:change='setTotalPrice' wire:model.live='end_date' id="end_date" />
                        @error('end_date')
                        <span class="invalid">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-control">
                        <label for="name" class="label">Name</label>
                        <input class="w-full input" type="text" name="name"  wire:model='name' id="name" />
                        @error('name')
                        <span class="invalid">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-control">
                        <label for="email" class="label">Email</label>
                        <input class="w-full input" type="text" name="email"  wire:model='email' id="email" />
                        @error('email')
                        <span class="invalid">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-control">
    <label for="seaters" class="label">Package Type</label>
    <select class="w-full input" name="seaters" wire:change='setTotalPrice' id="seaters" wire:model.live="seaters">
        <option value="">Select Package Type</option>
            <option value="1">Number of seaters                                                             
 ((1-5)</option>
            <option value="2">Number of seaters                                                             
 ((6-10)</option>
            <option value="3">Number of seaters                                                             
 ((11-20)</option>
    </select>
</div>
                    <div class="form-control">
                        <label for="total_cars" class="label">{{ __('Price') }} </label>
                         <input class="w-full input" type="text" name="price" id="price" value="@convert($price)" readonly />
                    </div>
                </div>
                @if ($start_date && $end_date && $totalPrice)
                <p class="tracking-wide text-gray-600 sm:text-base text-sm">Total price to pay for rental of <span class="font-bold">{{ $car->name }}</span>
                    for total days of <span class="font-bold">{{$totalDays}}</span> is <span class="font-bold"></span> <span class="font-bold">${{$totalPrice}}</span></p>
                @endif
                  <button class="btn cursor-pointer"><span wire:loading>loading...</span><span wire:loading.remove>confirm</span></button>
            </form>
            <div x-data="{ open: false }">
                <div x-show="open" @reservation:created.window="open = true" style="display: none" x-on:keydown.escape.prevent.stop="open = false" role="dialog" aria-modal="true" x-id="['modal-title']" :aria-labelledby="$id('modal-title')" class="fixed inset-0 overflow-y-auto z-50">
                    <div x-show="open" x-transition.duration.300ms.opacity class="fixed inset-0 bg-black/50"></div>
                    <div x-show="open" x-transition.duration.300ms x-on:click="open = false" class="relative min-h-screen flex items-center justify-center p-4">
                        <div x-on:click.stop x-trap.noscroll.inert="open" class="relative max-w-md w-full bg-white rounded-xl p-10 overflow-y-auto space-y-4">
                            <div class="text-center space-y-4">
                                <i class='bx bx-check-circle text-8xl text-green-600'></i>
                                <h2 class="text-3xl font-bold text-gray-800" :id="$id('modal-title')">Reservation Successfully</h2>
                                <p class="tracking-wide text-gray-600 sm:text-base text-sm">
                                Your reservation will be confirmed upon a deposit of 30% of the sum shown on the package price.
The remaining 70% should be paid in full amount 7 days before arrival.
We encourage FULL PAYMENT (100%) to avoid inconveniences.
Reservations made without deposit are subject to cancellation without prior notice.
Last minute bookings should pay full amount of 100% within 48hrs before arrival.
                                </p>
                            </div>
                            <div class="flex space-x-2 justify-center">
                                <a href="https://payments.pesapal.com/grandezzatoursandtravel" class="btn">
                                    pay now
                                </a>
                                <button type="button" x-on:click="open = false" class="btn btn-outline">
                                    later
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</section>