<section class="mt-28 mb-10">
    <div class="container px-8 mx-auto grid lg:grid-cols-12 gap-10">
        <main class="w-full space-y-6 lg:col-span-8">
            <div class="aspect-[16/9] overflow-hidden rounded-tl-2xl rounded-br-2xl relative z-10">
                <img src="{{ asset("$activity->image") }}" class="w-full block hover:scale-110 transition-all duration-300" alt="{{ $activity->name }}">
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
                    <span class="text-sm capitalize"></span>
                </div>
            </div>
            <div class="prose sm:prose-base prose max-w-none prose-img:rounded-tr-xl prose-img:rounded-bl-xl prose-img:w-full">
                <h1>{{ $activity->name }}</h1>
                <blockquote>
                    {{ $activity->description }}
                </blockquote>
                <div class="px-2 mb-12">
                    <!-- start::Bottom Margin Tabs -->
                    <div x-data="{ activeTab: 1 }">
                        <div class="flex flex-wrap justify-center gap-2 sm:gap-4">
                            <button @click="activeTab = 1" class="flex-1 py-1 rounded" :class="activeTab == 1 ? 'bg-primary text-gray-100' : 'bg-gray-300 hover:text-primary'">
                                Description
                            </button>
                            <button @click="activeTab = 2" class="flex-1 py-1 rounded" :class="activeTab == 2 ? 'bg-primary text-gray-100' : 'bg-gray-300 hover:text-primary'">
                                Price
                            </button>
                            <button @click="activeTab = 3" class="flex-1 py-1 rounded" :class="activeTab == 3 ? 'bg-primary text-gray-100' : 'bg-gray-300 hover:text-primary'">
                                Includes
                            </button>
                            <button @click="activeTab = 4" class="flex-1 py-1 rounded" :class="activeTab == 4 ? 'bg-primary text-gray-100' : 'bg-gray-300 hover:text-primary'">
                                Not Included
                            </button>
                        </div>
                        <div class="p-3">
                            <div :class="activeTab === 1 ? 'block' : 'hidden'">
                                {!! $activity->explanation !!}
                            </div>
                            <div :class="activeTab === 2 ? 'block' : 'hidden'" >
                                <ul class="border border-gray-300">
                                    <li>{{$activity->price0}}</li>
                                    <li>{{$activity->price1}}</li>
                                    <li>{{$activity->price2}}</li>
                                    <li>{{$activity->price3}}</li>
                                </ul>
                            </div>
                            <div :class="activeTab === 3 ? 'block' : 'hidden'" >
                                <ul class="border border-gray-300">
                                    <li>{{$activity->include0}}</li>
                                    <li>{{$activity->include1}}</li>
                                    <li>{{$activity->include2}}</li>
                                    @if ($activity->include3)
                                    <li>{{$activity->include3}}</li>
                                    @endif
                                    @if ($activity->include4)
                                    <li>{{$activity->include4}}</li>
                                    @endif
                                   
                                </ul>
                            </div>
                            <div :class="activeTab === 4 ? 'block' : 'hidden'" >
                                <ul class="border border-gray-300">
                                    <li>{{$activity->notInclude0}}</li>

                                    @if ($activity->notInclude1)
                                    <li>{{$activity->notInclude1}}</li>
                                    @endif
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end::Background Color Tabs -->
                </div>
            </div>

        </main>
        <aside class="relative  lg:col-span-4 space-y-4 ">
            <div class="space-y-2">
                <h2 class="text-2xl text-gray-800 font-bold">Reservation</h2>
                <p class="tracking-wide text-gray-600 sm:text-base text-sm">
                    {{ __("Interested in this activity? Hurry up and book before it's too late! ") }}<span class="font-bold">{{ __(' activities available.') }}</span>
                </p>
            </div>
            <hr>
            <form action="#" method="POST" wire:submit.prevent='reservation' class="grid gap-4">
                <div class="grid lg:grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="form-control">
                        <label for="check_in" class="label">{{ __('Check In') }}</label>
                        <input class="w-full input" type="date" name="check_in" min="{{$minCheckIn}}"  wire:model.live='check_in' id="check_in" />
                        @error('check_in')
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
                        <label for="total_activities" class="label">{{ __('no of people') }}</label>
                        <input class="w-full input" type="number" min="1" wire:keyup='setTotalPrice' wire:model.live="perperson" id="perperson" />
                    </div>
                    <div class="form-control">
                        <label for="total_activities" class="label">{{ __('PRICE PER PERSON') }} </label>
                        <input class="w-full input" type="text" name="price" id="price" value="@convert($price)" readonly />
                    </div>
                </div>
                @if ($check_in  && $totalPrice  && $perperson)
                <p class="tracking-wide text-gray-600 sm:text-base text-sm">Total price to pay for <span class="font-bold">{{ $activity->name }}</span> 
                for total visitor of <span class="font-bold">{{$perperson}}</span>  is <span class="font-bold"></span> <span class="font-bold">${{$totalPrice}}</span></p>
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