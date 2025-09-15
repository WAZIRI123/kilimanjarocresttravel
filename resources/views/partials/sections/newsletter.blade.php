<!-- Newsletter Section -->
<div class="bg-gray-900 text-white py-12 mt-2">
    <div class="container mx-auto px-4 text-center">
        <h3 class="text-2xl font-bold mb-4">Subscribe to Our Newsletter</h3>
        <p class="text-gray-300 mb-6 max-w-2xl mx-auto">Be the first to know about our exclusive offers and new safari packages.</p>
           @if (session()->has('success'))
            <div class="alert alert-success" style="background-color: green; padding-bottom: 10px;">
                {{ session('success') }}
            </div>
            @endif
        <form class="max-w-md mx-auto flex" action="{{ route('subscribe') }}" method="POST">
            @csrf
            <input name="email" type="email" placeholder="Your email address" class="flex-grow px-4 py-3 rounded-l-lg focus:outline-none text-black bg-white">
            <button type="submit" class="bg-yellow-50 hover:bg-yellow-60 text-black font-bold py-3 px-6 rounded-r-lg transition-colors duration-300 cursor-pointer">
                Subscribe
            </button>
        </form>
    </div>
</div>