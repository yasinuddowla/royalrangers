<!-- Guest Footer Component -->
<footer class="bg-gradient-to-r from-gray-800 to-gray-900 text-white py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="col-span-1 md:col-span-2">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('images/RR_Logo.png') }}" alt="Royal Rangers Logo" class="w-12 h-12">
                    <span class="ml-3 text-2xl font-bold metal-mania-regular">Royal Rangers</span>
                </div>
                <p class="text-gray-300 mb-4">
                    A passionate cricket team dedicated to excellence, sportsmanship, and the love of the game.
                </p>
            </div>
            
            <div>
                <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-white transition-colors duration-200">Home</a></li>
                    <li><a href="{{ route('players.index') }}" class="text-gray-300 hover:text-white transition-colors duration-200">Players</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">About</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">Matches</a></li>
                </ul>
            </div>
            
            <div>
                <h3 class="text-lg font-semibold mb-4">Contact</h3>
                <ul class="space-y-2 text-gray-300">
                    <li>Email: info@royalrangers.com</li>
                    <li>Phone: +1 (555) 123-4567</li>
                    <li>Address: Cricket Ground, City</li>
                </ul>
            </div>
        </div>
        
        <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
            <p>&copy; {{ date('Y') }} Royal Rangers Cricket Team. All rights reserved.</p>
        </div>
    </div>
</footer>
