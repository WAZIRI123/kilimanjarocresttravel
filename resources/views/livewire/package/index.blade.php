@push('jquery')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@endpush
<section class="mt-28 mb-10">
    <div class="container px-8 mx-auto grid lg:grid-cols-12 gap-10">
        <main class="w-full space-y-6 lg:col-span-7">
            <div class="aspect-[16/9] overflow-hidden rounded-tl-2xl rounded-br-2xl relative z-10">
                <img src="{{ asset("$package->image") }}" class="w-full block hover:scale-110 transition-all duration-300" alt="{{ $package->name }}">
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
                <h1>{{ $package->name }}</h1>

                <blockquote>
                    explore {{ $package->name }}
                </blockquote>

                <div class="px-2 mb-12">
                   <!-- start::Bottom Margin Tabs -->
                   <div x-data="{ activeTab: 1 }">
            <div class="flex flex-wrap justify-center gap-2 sm:gap-4">
    <button @click="activeTab = 1" class="flex-1 py-1 rounded" :class="activeTab == 1 ? 'bg-primary text-gray-100' : 'bg-gray-300 hover:text-primary'">
        Description
    </button>
    <button @click="activeTab = 2" class="flex-1 py-1 rounded" :class="activeTab == 2 ? 'bg-primary text-gray-100' : 'bg-gray-300 hover:text-primary'">
        Includes
    </button>
    <button @click="activeTab = 3" class="flex-1 py-1 rounded" :class="activeTab == 3 ? 'bg-primary text-gray-100' : 'bg-gray-300 hover:text-primary'">
        Excludes
    </button>
    <button @click="activeTab = 4" class="flex-1 py-1 rounded" :class="activeTab == 4 ? 'bg-primary text-gray-100' : 'bg-gray-300 hover:text-primary'">
        Booking Policy
    </button>
    <button @click="activeTab = 5" class="flex-1 py-1 rounded" :class="activeTab == 5 ? 'bg-primary text-gray-100' : 'bg-gray-300 hover:text-primary'">
        Cancellation Policy
    </button>
</div>

                    <div class="p-3">
                        <div :class="activeTab === 1 ? 'block' : 'hidden'">
                            @if(ceil ($package->id)==1)
                            <div x-data="{ accordion1: false, accordion2: false, accordion3: false }">
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                 accordion1 = !accordion1
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion1 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 1: ARRIVAL
                                    </button>
                                    <div x-show="accordion1" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day1 !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion3 = false,
                                                 accordion2 = !accordion2
                                             " class="w-full text-left px-4  py-2 hover:text-primary" :class="accordion2 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 2: STONE TOWN + PRISON ISLAND + SPICE TOUR
                                    </button>
                                    <div x-show="accordion2" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day2 !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion2 = false,
                                                 accordion3 = !accordion3
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion3 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 3: DEPARTURE
                                    </button>
                                    <div x-show="accordion3" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day3 !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <!-- 4 days -->
                            @elseif(ceil ($package->id)==2)
                            <div x-data="{ accordion1: false, accordion2: false, accordion3: false ,accordion4: false}">
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                 accordion4 = false,
                                                 accordion1 = !accordion1
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion1 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 1: ARRIVAL
                                    </button>
                                    <div x-show="accordion1" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day1 !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion3 = false,
                                                 accordion4 = false,
                                                 accordion2 = !accordion2
                                             " class="w-full text-left px-4  py-2 hover:text-primary" :class="accordion2 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 2: STONE TOWN + PRISON ISLAND + SPICE TOUR
                                    </button>
                                    <div x-show="accordion2" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day2 !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion2 = false,
                                                 accordion4 = false,
                                                 accordion3 = !accordion3
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion3 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 3: FULL DAY SAFARI BLUE TOUR
                                    </button>
                                    <div x-show="accordion3" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day3 !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- more -->
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                 accordion4 = !accordion4
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion3 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 4: DEPARTURE
                                    </button>
                                    <div x-show="accordion4" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day4 !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 5 days -->
                            @elseif(ceil ($package->id)==3)
                            <div x-data="{ accordion1: false, accordion2: false, accordion3: false,accordion4: false,accordion5: false }">
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion1 = !accordion1
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion1 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 1: ARRIVAL
                                    </button>
                                    <div x-show="accordion1" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day1 !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion3 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion2 = !accordion2
                                             " class="w-full text-left px-4  py-2 hover:text-primary" :class="accordion2 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 2: SWIM WITH THE TURTLES + SPICE TOUR
                                    </button>
                                    <div x-show="accordion2" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day2 !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray-300">
                                    <button @click="
                                             accordion2 = false,
                                                 accordion1 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion3 = !accordion3
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion3 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 3: MNEMBA ISLAND TOUR
                                    </button>
                                    <div x-show="accordion3" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day3 !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- more -->
                                <div class="border border-gray-300">
                                    <button @click="
                                             accordion5 = false,
                                                 accordion1 = false,
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                 accordion4 = !accordion4
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion4 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 4: STONE TOWN + PRISON ISLAND TOUR
                                    </button>
                                    <div x-show="accordion4" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day4 !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- more -->
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                 accordion4 = false,
                                                 accordion5 = !accordion5
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion5 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 5: DEPARTURE
                                    </button>
                                    <div x-show="accordion5" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day5 !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 6 -->
                            @elseif(ceil ($package->id)==4)
                            <div x-data="{ accordion1: false, accordion2: false, accordion3: false,accordion4: false,accordion5: false, accordion6: false}">
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion6 = false,
                                                 accordion1 = !accordion1
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion1 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 1: ARRIVAL
                                    </button>
                                    <div x-show="accordion1" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day1 !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion3 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion6 = false,
                                                 accordion2 = !accordion2
                                             " class="w-full text-left px-4  py-2 hover:text-primary" :class="accordion2 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 2: KUZA CAVE + THE ROCK RESTAURANT
                                    </button>
                                    <div x-show="accordion2" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day2 !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray-300">
                                    <button @click="
                                             accordion2 = false,
                                                 accordion1 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion6 = false,
                                                 accordion3 = !accordion3
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion3 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 3: SWIM WITH THE TURTLES + SPICE TOUR
                                    </button>
                                    <div x-show="accordion3" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day3 !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- more -->
                                <div class="border border-gray-300">
                                    <button @click="
                                             accordion5 = false,
                                                 accordion1 = false,
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                 accordion6 = false,
                                                 accordion4 = !accordion4
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion4 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 4:  MNEMBA ISLAND TOUR
                                    </button>
                                    <div x-show="accordion4" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day4 !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- more -->
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                 accordion6 = false,
                                                 accordion4 = false,
                                                 accordion5 = !accordion5
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion5 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 5: STONE TOWN + PRISON ISLAND TOUR
                                    </button>
                                    <div x-show="accordion5" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day5 !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- more -->
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion6 = !accordion6
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion6 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 6: DEPARTURE
                                    </button>
                                    <div x-show="accordion6" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day6 !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 7 -->
                            @elseif(ceil ($package->id)==5)
                            <div x-data="{ accordion1: false, accordion2: false, accordion3: false,accordion4: false,accordion5: false, accordion6: false,accordion7: false}">
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                 accordion7 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion6 = false,
                                                 accordion1 = !accordion1
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion1 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 1: ARRIVAL
                                    </button>
                                    <div x-show="accordion1" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day1 !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion3 = false,
                                                 accordion4 = false,
                                                 accordion7 = false,
                                                 accordion5 = false,
                                                 accordion6 = false,
                                                 accordion2 = !accordion2
                                             " class="w-full text-left px-4  py-2 hover:text-primary" :class="accordion2 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 2: SWIMMING WITH TURTLES + DHOW SUNSET CRUISE
                                    </button>
                                    <div x-show="accordion2" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day2 !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray-300">
                                    <button @click="
                                             accordion2 = false,
                                                 accordion1 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion7 = false,
                                                 accordion6 = false,
                                                 accordion3 = !accordion3
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion3 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 3:  MNEMBA ISLAND TOUR
                                    </button>
                                    <div x-show="accordion3" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day3 !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- more -->
                                <div class="border border-gray-300">
                                    <button @click="
                                             accordion5 = false,
                                                 accordion1 = false,
                                                 accordion2 = false,
                                                 accordion7 = false,
                                                 accordion3 = false,
                                                 accordion6 = false,
                                                 accordion4 = !accordion4
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion4 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 4: STONE TOWN + JOZANI FOREST
                                    </button>
                                    <div x-show="accordion4" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day4 !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- more -->
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion2 = false,
                                                 accordion7 = false,
                                                 accordion3 = false,
                                                 accordion6 = false,
                                                 accordion4 = false,
                                                 accordion5 = !accordion5
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion5 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 5: PRISON ISLAND + NAKUPENDA SANDBANK
                                    </button>
                                    <div x-show="accordion5" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day5 !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- more -->
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                 accordion7 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion6 = !accordion6
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion6 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 6: REST DAY
                                    </button>
                                    <div x-show="accordion6" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day6 !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- more -->
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                 accordion6 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion7 = !accordion7
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion7 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 7: DEPARTURE
                                    </button>
                                    <div x-show="accordion7" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day7 !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end::Background Color On Active -->
                            @elseif(ceil ($package->id)==6)
                            <div x-data="{ accordion1: false, accordion2: false, accordion3: false,accordion4: false,accordion5: false, accordion6: false,accordion7: false,accordion8: false}">
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                 accordion8 = false,
                                                 accordion7 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion6 = false,
                                                 accordion1 = !accordion1
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion1 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 1: ARRIVAL
                                    </button>
                                    <div x-show="accordion1" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day1 !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion3 = false,
                                                 accordion4 = false,
                                                 accordion8 = false,
                                                 accordion7 = false,
                                                 accordion5 = false,
                                                 accordion6 = false,
                                                 accordion2 = !accordion2
                                             " class="w-full text-left px-4  py-2 hover:text-primary" :class="accordion2 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 2: SWIMMING WITH TURTLES + DHOW SUNSET CRUISE
                                    </button>
                                    <div x-show="accordion2" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day2 !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray-300">
                                    <button @click="
                                             accordion2 = false,
                                                 accordion1 = false,
                                                 accordion4 = false,
                                                 accordion8 = false,
                                                 accordion5 = false,
                                                 accordion7 = false,
                                                 accordion6 = false,
                                                 accordion3 = !accordion3
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion3 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 3:  MNEMBA ISLAND TOUR
                                    </button>
                                    <div x-show="accordion3" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day3 !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- more -->
                                <div class="border border-gray-300">
                                    <button @click="
                                             accordion5 = false,
                                                 accordion1 = false,
                                                 accordion2 = false,
                                                 accordion7 = false,
                                                 accordion8 = false,
                                                 accordion3 = false,
                                                 accordion6 = false,
                                                 accordion4 = !accordion4
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion4 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 4: STONE TOWN + JOZANI FOREST
                                    </button>
                                    <div x-show="accordion4" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day4 !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- more -->
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion2 = false,
                                                 accordion7 = false,
                                                 accordion8 = false,
                                                 accordion3 = false,
                                                 accordion6 = false,
                                                 accordion4 = false,
                                                 accordion5 = !accordion5
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion5 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 5: PRISON ISLAND + NAKUPENDA SANDBANK
                                    </button>
                                    <div x-show="accordion5" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day5 !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- more -->
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                 accordion7 = false,
                                                 accordion8 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion6 = !accordion6
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion6 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 6: FULL DAY SAFARI BLUE TOUR
                                    </button>
                                    <div x-show="accordion6" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day6 !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- more -->
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                 accordion6 = false,
                                                 accordion8 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion7 = !accordion7
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion7 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 7: REST DAY
                                    </button>
                                    <div x-show="accordion7" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day7 !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- more -->
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                 accordion6 = false,
                                                 accordion7 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion8 = !accordion8
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion8 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 8: DEPARTURE
                                    </button>
                                    <div x-show="accordion8" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day8 !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- NEW PACKAGES -->
                           @elseif(ceil ($package->id)==7)
                            <div x-data="{ accordion1: false, accordion2: false, accordion3: false ,accordion4: false}">
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                 accordion4 = false,
                                                 accordion1 = !accordion1
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion1 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                      SELOUS DAY TRIP
                                    </button>
                                    <div x-show="accordion1" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day1 !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                    <!-- package 8 -->

                    @elseif(ceil ($package->id)==8)
                            <div x-data="{ accordion1: false, accordion2: false, accordion3: false,accordion4: false,accordion5: false }">
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion1 = !accordion1
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion1 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                Day 1: Fly to Selous Game Reserve + Full day game drive
                                    </button>
                                    <div x-show="accordion1" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day1 !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion3 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion2 = !accordion2
                                             " class="w-full text-left px-4  py-2 hover:text-primary" :class="accordion2 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                    Day 2: Boat Safari + Village tour + Return to Zanzibar
                                    </button>
                                    <div x-show="accordion2" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day2 !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <!-- package 9-->
                        @elseif(ceil ($package->id)==9)
                            <div x-data="{ accordion1: false, accordion2: false, accordion3: false,accordion4: false,accordion5: false }">
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion1 = !accordion1
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion1 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                Day 1: Transfer to Selous Game Reserve + Boat Safari
                                    </button>
                                    <div x-show="accordion1" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day1 !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion3 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion2 = !accordion2
                                             " class="w-full text-left px-4  py-2 hover:text-primary" :class="accordion2 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                Day 2: Full day game drive
                                    </button>
                                    <div x-show="accordion2" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day2 !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray-300">
                                    <button @click="
                                             accordion2 = false,
                                                 accordion1 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion3 = !accordion3
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion3 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                             Day 3: Walking Safari & Return Zanzibar
                                    </button>
                                    <div x-show="accordion3" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day3 !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                    <!-- package 10 -->
                    @elseif(ceil ($package->id)==10)
                            <div x-data="{ accordion1: false, accordion2: false, accordion3: false ,accordion4: false}">
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                 accordion4 = false,
                                                 accordion1 = !accordion1
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion1 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                             MIKUMI DAYTRIP
                                    </button>
                                    <div x-show="accordion1" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day1 !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <!-- package 11 -->

                             @elseif(ceil ($package->id)==11)
                            <div x-data="{ accordion1: false, accordion2: false, accordion3: false,accordion4: false,accordion5: false }">
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion1 = !accordion1
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion1 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                      DAY 1: PICK UP AND FLY TO MIKUMI NATIONAL PARK
                                    </button>
                                    <div x-show="accordion1" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day1 !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion3 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion2 = !accordion2
                                             " class="w-full text-left px-4  py-2 hover:text-primary" :class="accordion2 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 2: MAASAI VILLAGE TOUR AND DEPARTURE
                                    </button>
                                    <div x-show="accordion2" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day2 !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                                    <!-- package 12 -->

                                    @elseif(ceil ($package->id)==12)
                            <div x-data="{ accordion1: false, accordion2: false, accordion3: false,accordion4: false,accordion5: false }">
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion1 = !accordion1
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion1 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                    DAY 1: PICK UP AND FLY TO MIKUMI NATIONAL PARK
                                    </button>
                                    <div x-show="accordion1" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day1 !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion3 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion2 = !accordion2
                                             " class="w-full text-left px-4  py-2 hover:text-primary" :class="accordion2 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                    Day 2: FULL DAY GAME DRIVE
                                    </button>
                                    <div x-show="accordion2" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day2 !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray-300">
                                    <button @click="
                                             accordion2 = false,
                                                 accordion1 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion3 = !accordion3
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion3 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                     Day 3: MAASAI VILLAGE TOUR AND DEPARTURE 
                                    </button>
                                    <div x-show="accordion3" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day3 !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                    <!-- package 13 -->

                    @elseif(ceil ($package->id)==13)
                            <div x-data="{ accordion1: false, accordion2: false, accordion3: false,accordion4: false,accordion5: false }">
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion1 = !accordion1
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion1 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 1: ARRIVAL
                                    </button>
                                    <div x-show="accordion1" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day1 !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion3 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion2 = !accordion2
                                             " class="w-full text-left px-4  py-2 hover:text-primary" :class="accordion2 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                    DAY 2: TARANGIRE NATIONAL PARK
                                    </button>
                                    <div x-show="accordion2" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day2 !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray-300">
                                    <button @click="
                                             accordion2 = false,
                                                 accordion1 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion3 = !accordion3
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion3 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                    DAY 3: NGORONGORO CRATER GAME DRIVE
                                    </button>
                                    <div x-show="accordion3" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day3 !!}
                                        </div>
                                    </div>
                                </div>

                                <!-- more -->
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                 accordion4 = false,
                                                 accordion5 = !accordion5
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion5 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 4: DEPARTURE
                                    </button>
                                    <div x-show="accordion5" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day4 !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- package 14 -->


                            @elseif(ceil ($package->id)==14)
                            <div x-data="{ accordion1: false, accordion2: false, accordion3: false,accordion4: false,accordion5: false }">
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion1 = !accordion1
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion1 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 1: ARRIVAL JRO
                                    </button>
                                    <div x-show="accordion1" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day1 !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion3 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion2 = !accordion2
                                             " class="w-full text-left px-4  py-2 hover:text-primary" :class="accordion2 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                     DAY 2: NGORONGORO CRATER GAME DRIVE
                                    </button>
                                    <div x-show="accordion2" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day2 !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray-300">
                                    <button @click="
                                             accordion2 = false,
                                                 accordion1 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion3 = !accordion3
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion3 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                  DAY 3: SERENGETI NATIONAL PARK FULL DAY GAME DRIVE
                                    </button>
                                    <div x-show="accordion3" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day3 !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- more -->
                                <div class="border border-gray-300">
                                    <button @click="
                                             accordion5 = false,
                                                 accordion1 = false,
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                 accordion4 = !accordion4
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion4 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                         DAY 4: SERENGETI NATIONAL PARK HALF DAY GAME DRIVE AND TRANSIT
TO KARATU
                                    </button>
                                    <div x-show="accordion4" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day4 !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- more -->
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                 accordion4 = false,
                                                 accordion5 = !accordion5
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion5 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 5: DEPARTURE
                                    </button>
                                    <div x-show="accordion5" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day5 !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                               <!-- package 15 -->

                               @elseif(ceil ($package->id)==15)
                            <div x-data="{ accordion1: false, accordion2: false, accordion3: false,accordion4: false,accordion5: false, accordion6: false}">
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion6 = false,
                                                 accordion1 = !accordion1
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion1 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 1: ARRIVAL JRO
                                    </button>
                                    <div x-show="accordion1" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day1 !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion3 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion6 = false,
                                                 accordion2 = !accordion2
                                             " class="w-full text-left px-4  py-2 hover:text-primary" :class="accordion2 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                    DAY 2: TARANGIRE NATIONAL PARK
                                    </button>
                                    <div x-show="accordion2" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day2 !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray-300">
                                    <button @click="
                                             accordion2 = false,
                                                 accordion1 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion6 = false,
                                                 accordion3 = !accordion3
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion3 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                     DAY 3: LAKE MANYARA NATIONAL PARK
                                    </button>
                                    <div x-show="accordion3" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day3 !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- more -->
                                <div class="border border-gray-300">
                                    <button @click="
                                             accordion5 = false,
                                                 accordion1 = false,
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                 accordion6 = false,
                                                 accordion4 = !accordion4
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion4 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                     DAY 4: NGORONGORO CRATER GAME DRIVE
                                    </button>
                                    <div x-show="accordion4" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day4 !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- more -->
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                 accordion6 = false,
                                                 accordion4 = false,
                                                 accordion5 = !accordion5
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion5 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                     DAY 5: MAASAI CULTURAL VILLAGE DAY TOUR
                                    </button>
                                    <div x-show="accordion5" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day5 !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- more -->
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion6 = !accordion6
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion6 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 6: DEPARTURE
                                    </button>
                                    <div x-show="accordion6" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day6 !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <!-- package 16 -->

                            @elseif(ceil ($package->id)==16)
                            <div x-data="{ accordion1: false, accordion2: false, accordion3: false,accordion4: false,accordion5: false, accordion6: false,accordion7: false}">
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                 accordion7 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion6 = false,
                                                 accordion1 = !accordion1
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion1 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 1: ARRIVAL
                                    </button>
                                    <div x-show="accordion1" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day1 !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion3 = false,
                                                 accordion4 = false,
                                                 accordion7 = false,
                                                 accordion5 = false,
                                                 accordion6 = false,
                                                 accordion2 = !accordion2
                                             " class="w-full text-left px-4  py-2 hover:text-primary" :class="accordion2 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                    DAY 2: TARANGIRE NATIONAL PARK
                                    </button>
                                    <div x-show="accordion2" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day2 !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray-300">
                                    <button @click="
                                             accordion2 = false,
                                                 accordion1 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion7 = false,
                                                 accordion6 = false,
                                                 accordion3 = !accordion3
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion3 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                DAY 3: SERENGETI NATIONAL PARK FULL DAY GAME DRIVE
                                    </button>
                                    <div x-show="accordion3" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day3 !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- more -->
                                <div class="border border-gray-300">
                                    <button @click="
                                             accordion5 = false,
                                                 accordion1 = false,
                                                 accordion2 = false,
                                                 accordion7 = false,
                                                 accordion3 = false,
                                                 accordion6 = false,
                                                 accordion4 = !accordion4
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion4 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                             DAY 4: SERENGETI NATIONAL PARK HALF DAY GAME DRIVE AND TRANSIT
TO NGORONGORO
                                    </button>
                                    <div x-show="accordion4" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day4 !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- more -->
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion2 = false,
                                                 accordion7 = false,
                                                 accordion3 = false,
                                                 accordion6 = false,
                                                 accordion4 = false,
                                                 accordion5 = !accordion5
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion5 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                             DAY 5: NGORONGORO CRATER GAME DRIVE
                                    </button>
                                    <div x-show="accordion5" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day5 !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- more -->
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                 accordion7 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion6 = !accordion6
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion6 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                             DAY 6: LAKE MANYARA NATIONAL PARK
                                    </button>
                                    <div x-show="accordion6" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day6 !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- more -->
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                 accordion6 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion7 = !accordion7
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion7 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 7: DEPARTURE
                                    </button>
                                    <div x-show="accordion7" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day7 !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                             <!-- package 17 -->

                             @elseif(ceil ($package->id)==17)
                            <div x-data="{ accordion1: false, accordion2: false, accordion3: false,accordion4: false,accordion5: false, accordion6: false,accordion7: false,accordion8: false}">
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                 accordion8 = false,
                                                 accordion7 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion6 = false,
                                                 accordion1 = !accordion1
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion1 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                    Day 1: ARRIVAL JRO
                                    </button>
                                    <div x-show="accordion1" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day1 !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion3 = false,
                                                 accordion4 = false,
                                                 accordion8 = false,
                                                 accordion7 = false,
                                                 accordion5 = false,
                                                 accordion6 = false,
                                                 accordion2 = !accordion2
                                             " class="w-full text-left px-4  py-2 hover:text-primary" :class="accordion2 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        DAY 2: NGORONGORO CRATER GAME DRIVE
                                    </button>
                                    <div x-show="accordion2" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day2 !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-gray-300">
                                    <button @click="
                                             accordion2 = false,
                                                 accordion1 = false,
                                                 accordion4 = false,
                                                 accordion8 = false,
                                                 accordion5 = false,
                                                 accordion7 = false,
                                                 accordion6 = false,
                                                 accordion3 = !accordion3
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion3 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                    DAY 3: SERENGETI NATIONAL PARK FULL DAY GAME DRIVE
                                    </button>
                                    <div x-show="accordion3" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day3 !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- more -->
                                <div class="border border-gray-300">
                                    <button @click="
                                             accordion5 = false,
                                                 accordion1 = false,
                                                 accordion2 = false,
                                                 accordion7 = false,
                                                 accordion8 = false,
                                                 accordion3 = false,
                                                 accordion6 = false,
                                                 accordion4 = !accordion4
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion4 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                     DAY 4: SERENGETI NATIONAL PARK HALF DAY GAME DRIVE AND TRANSIT
TO KARATU
                                    </button>
                                    <div x-show="accordion4" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day4 !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- more -->
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion2 = false,
                                                 accordion7 = false,
                                                 accordion8 = false,
                                                 accordion3 = false,
                                                 accordion6 = false,
                                                 accordion4 = false,
                                                 accordion5 = !accordion5
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion5 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                    Day 5: LAKE EYASI
                                    </button>
                                    <div x-show="accordion5" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day5 !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- more -->
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                 accordion7 = false,
                                                 accordion8 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion6 = !accordion6
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion6 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                    DAY 6: MATERUNI WATERFALLS AND COFFEE TOUR
                                    </button>
                                    <div x-show="accordion6" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day6 !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- more -->
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                 accordion6 = false,
                                                 accordion8 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion7 = !accordion7
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion7 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                             DAY 7: MAASAI CULTURAL VILLAGE
                                    </button>
                                    <div x-show="accordion7" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day7 !!}
                                        </div>
                                    </div>
                                </div>
                                <!-- more -->
                                <div class="border border-gray-300">
                                    <button @click="
                                                 accordion1 = false,
                                                 accordion2 = false,
                                                 accordion3 = false,
                                                 accordion6 = false,
                                                 accordion7 = false,
                                                 accordion4 = false,
                                                 accordion5 = false,
                                                 accordion8 = !accordion8
                                             " class="w-full text-left px-4 py-2 hover:text-primary" :class="accordion8 ? 'bg-primary text-gray-100 hover:text-gray-300' : ''">
                                        Day 8: DEPARTURE
                                    </button>
                                    <div x-show="accordion8" x-cloak x-collapse.duration.500ms>
                                        <div class="px-4 py-2">
                                            {!! $package->day8 !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- END NEW PACKAGES -->

                            @endif
                            
                        </div>
                        <div :class="activeTab === 2 ? 'block' : 'hidden'" >
                            <ul class="border border-gray-300">
                                <li>{{$extraPacDescr[$package->id]['PACKAGE INCLUDES:'][0] }}</li>
                           
                               @if(isset($extraPacDescr[$package->id]['PACKAGE INCLUDES:']['Hotels accommodation:'][0]))
    <li>Hotels Accommodation
        <ul>
            <li>{{$extraPacDescr[$package->id]['PACKAGE INCLUDES:']['Hotels accommodation:'][0] }}</li>
            <li>{{$extraPacDescr[$package->id]['PACKAGE INCLUDES:']['Hotels accommodation:'][1] }}</li>
            <li>{{$extraPacDescr[$package->id]['PACKAGE INCLUDES:']['Hotels accommodation:'][2] }}</li>
        </ul>
    </li>
@endif

                 
<li>{{ isset($extraPacDescr[$package->id]['PACKAGE INCLUDES:'][2]) ? $extraPacDescr[$package->id]['PACKAGE INCLUDES:'][2] : '' }}</li>
<li>{{ isset($extraPacDescr[$package->id]['PACKAGE INCLUDES:'][3]) ? $extraPacDescr[$package->id]['PACKAGE INCLUDES:'][3] : '' }}</li>
<li>{{ isset($extraPacDescr[$package->id]['PACKAGE INCLUDES:'][4]) ? $extraPacDescr[$package->id]['PACKAGE INCLUDES:'][4] : '' }}</li>
<li>{{ isset($extraPacDescr[$package->id]['PACKAGE INCLUDES:'][5]) ? $extraPacDescr[$package->id]['PACKAGE INCLUDES:'][5] : '' }}</li>


<li>{{ isset($extraPacDescr[$package->id]['PACKAGE INCLUDES:'][6]) ? $extraPacDescr[$package->id]['PACKAGE INCLUDES:'][6] : '' }}</li><li>{{ isset($extraPacDescr[$package->id]['PACKAGE INCLUDES:'][7]) ? $extraPacDescr[$package->id]['PACKAGE INCLUDES:'][7] : '' }}</li>
                               
                            </ul>
                        </div>
                        <div :class="activeTab === 3 ? 'block' : 'hidden'" >
                            <ul class="border border-gray-300">
                            <li>{{ isset($extraPacDescr[$package->id]['PACKAGE EXCLUDES:'][0]) ? $extraPacDescr[$package->id]['PACKAGE EXCLUDES:'][0] : '' }}</li>
<li>{{ isset($extraPacDescr[$package->id]['PACKAGE EXCLUDES:'][1]) ? $extraPacDescr[$package->id]['PACKAGE EXCLUDES:'][1] : '' }}</li>
<li>{{ isset($extraPacDescr[$package->id]['PACKAGE EXCLUDES:'][2]) ? $extraPacDescr[$package->id]['PACKAGE EXCLUDES:'][2] : '' }}</li>
<li>{{ isset($extraPacDescr[$package->id]['PACKAGE EXCLUDES:'][3]) ? $extraPacDescr[$package->id]['PACKAGE EXCLUDES:'][3] : '' }}</li>
<li>{{ isset($extraPacDescr[$package->id]['PACKAGE EXCLUDES:'][4]) ? $extraPacDescr[$package->id]['PACKAGE EXCLUDES:'][4] : '' }}</li>
<li>{{ isset($extraPacDescr[$package->id]['PACKAGE EXCLUDES:'][5]) ? $extraPacDescr[$package->id]['PACKAGE EXCLUDES:'][5] : '' }}</li>

                               
                            </ul>
                        </div>
                        <div :class="activeTab === 4 ? 'block' : 'hidden'" >
                            <ul class="border border-gray-300">
                                <li>{{$extraPacDescr[$package->id]['TERMS AND CONDITIONS']['BOOKING POLICY'][0] }}</li>
                                <li>{{$extraPacDescr[$package->id]['TERMS AND CONDITIONS']['BOOKING POLICY'][1] }}</li>
                                 <li>{{$extraPacDescr[$package->id]['TERMS AND CONDITIONS']['BOOKING POLICY'][2] }}</li>
                                  <li>{{$extraPacDescr[$package->id]['TERMS AND CONDITIONS']['BOOKING POLICY'][3] }}</li>
                                  <li>{{$extraPacDescr[$package->id]['TERMS AND CONDITIONS']['BOOKING POLICY'][4] }}</li>
                            </ul>
                        </div>

                        <div :class="activeTab === 5 ? 'block' : 'hidden'">
                            <ul class="border border-gray-300">
                                <li>{{$extraPacDescr[$package->id]['TERMS AND CONDITIONS']['CANCELLATION POLICY:'][0] }}</li>
                                <li>{{$extraPacDescr[$package->id]['TERMS AND CONDITIONS']['CANCELLATION POLICY:'][1] }}</li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
                <!-- end::Background Color Tabs -->
            </div>
            </div>

        </main>
        <aside class="relative  lg:col-span-5 space-y-4 ">

            <div class="space-y-2">
                <h2 class="text-2xl text-gray-800 font-bold">Reservation</h2>
                <p class="tracking-wide text-gray-600 sm:text-base text-sm">
                    {{ __("Interested in this package? Hurry up and book before it's too late! ") }}<span class="font-bold">{{ __(' package available.') }}</span>
                </p>
            </div>
            <hr>
            
            <form action="#" method="POST" wire:submit.prevent='reservation' class="grid gap-4" name="booking">
                <div class="grid lg:grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="form-control">
                        <label for="start_date" class="label">{{ __('Check In') }}</label>
                        <input class="w-full input" type="date" name="start_date" min="{{$minStart_date}}" wire:model='start_date' id="start_date" />
                        @error('start_date')
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
                   @if($package->id < 7)
<div class="form-control">
    <label for="packageType" class="label">Package Type</label>
    <select class="w-full input" name="packageType" wire:change="setTotalPrice" id="packageType" wire:model="packageType">
        <option value="">Select Package Type</option>
            <option value="1">BUDGET PACKAGE (ZANZIBAR OCEAN VIEW)</option>
            <option value="2">STANDARD PACKAGE (TEMBO HOUSE HOTEL)</option>
            <option value="3">LUXURY PACKAGE (HOTEL VERDE)</option>
    </select>
</div>
@endif
 
                    <div class="form-control">
                        <label for="total_package" class="label" id="waziri">Number of People</label>
                        <input class="w-full input" type="number"  name="perPerson" wire:keyup="setTotalPrice" id="perPerson" value="" wire:model="perperson" />
                    </div>
                    <div class="form-control">
                        <label for="total_cars" class="label">{{ __('Price') }} </label>
                         <input class="w-full input" type="text" name="price" id="price" value="@convert($sumActivitiesPrice)" readonly />
                    </div>
                </div>
                @if ($start_date && $totalPrice  && $perperson!='' && $perperson!=0)
                <p class="tracking-wide text-gray-600 sm:text-base text-sm">Total price to pay for <span class="font-bold">{{ $package->name }}</span>
                    for total visitors of <span class="font-bold">{{$perperson}}</span> is <span class="font-bold"></span> <span class="font-bold">${{$totalPrice}}</span></p>
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
        @push('scripts')
        <script>
            function getvalue() {

            }
            $('.checkdiv :checkbox').change(function() {
                var $cs = $(this).closest('.checkdiv').find(':checkbox:checked');

                if ($cs.length > 3) {
                    this.checked = false;
                    alert('you can only select three Activity on this day!')
                }
                // if (this.id==5) {
                //     $(this).closest('.checkdiv').find(':checkbox').not($(this)).prop('checked',false)
                //     alert('This Activity is Full day ,So you can select itself only! ')
                // }
                // else{
                //     $(this).closest('.checkdiv').find('#5').prop('checked',false)
                // }
                // if (this.id==8) {
                //     $(this).closest('.checkdiv').find(':checkbox').not($(this)).prop('checked',false)
                //     alert('This Activity is Full day ,So you can select itself only! for this Day');
                // }
                // else{
                //     $(this).closest('.checkdiv').find('#8').prop('checked',false)
                // }


            });
        </script>
        @endpush
    </div>

</section>