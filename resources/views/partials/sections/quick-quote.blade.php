  
  <!-- ============================== -->
    <!--  zanzibar quote modal   -->
    <!-- ============================== -->

    <div 
        x-show="{!! $modalName !!}"
        x-transition.opacity
        class="fixed inset-0 bg-black/50 flex items-center justify-center z-[9999]" x-cloak
    >
        <div 
            x-show="{!! $modalName !!}"
            x-transition
            @click.outside="{!! $modalName !!} = false"
            class="bg-white rounded-lg max-w-md w-full mx-4 p-6 shadow-xl relative"
        >

            <!-- Close -->
            <button 
                @click="{!! $modalName !!} = false"
                 class="absolute top-4 right-4 bg-black text-white w-8 h-8 rounded-full flex items-center justify-center cursor-pointer text-lg leading-none">
                                                <span class="pb-1 text-xl">&times;</span>
            </button>

            <h2 class="text-2xl font-bold mb-4">Quick Quote</h2>

            <form class="space-y-4" action="{{route('contact.submit')}}" method="POST">
              @csrf
                        @if(session('error'))
                            <div style="color:red">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if(session('success'))
                            <div style="color:green">
                                {{ session('success') }}
                            </div>
                        @endif
                <div>
                    <label class="block text-sm font-medium mb-1">Email</label>
                    <input type="email" required name="email" class="w-full border rounded-md px-3 py-2">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Your Name</label>
                    <input type="text" required name="name" class="w-full border rounded-md px-3 py-2">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Quote Message</label>
                    <textarea required class="w-full border rounded-md px-3 py-2 h-24" name="message"></textarea>
                </div>

                <button type="submit"
                    class="w-full py-2 bg-black cursor-pointer text-white rounded-full hover:bg-black/80 transition">
                    Submit Quote Request
                </button>

            </form>

        </div>
    </div>