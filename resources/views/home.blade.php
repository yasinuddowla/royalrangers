<x-guest-layout>
    <div class="min-h-screen bg-linear-to-br from-blue-50 via-purple-50 to-pink-50">

        <!-- Hero Section -->
        <section class="hero-section">
            <div class="absolute inset-0 hero-section-bg" style="background-image: url('{{ asset('images/rr_bg.jpeg') }}');"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <div class="text-center text-white mt-40">
                    <h1 class="text-5xl md:text-7xl font-bold mb-6 metal-mania-regular">
                        Royal Rangers
                    </h1>
                    <p class="text-xl md:text-2xl mb-8 text-white">
                        Champions of the Cricket Field
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ route('players.index') }}" class="bg-white text-purple-600 px-8 py-3 rounded-full font-semibold hover:bg-purple-50 transition-all duration-300 transform hover:scale-105 shadow-lg">
                            View Players
                        </a>
                        <a href="#" class="border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-blue-600 transition-all duration-300 transform hover:scale-105">
                            Latest Matches
                        </a>
                    </div>
                </div>
            </div>
            <!-- Decorative elements -->
            <div class="absolute top-10 left-10 w-20 h-20 bg-yellow-400 rounded-full opacity-20 animate-bounce"></div>
            <div class="absolute bottom-10 right-10 w-16 h-16 bg-green-400 rounded-full opacity-20 animate-bounce" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/2 left-1/4 w-12 h-12 bg-red-400 rounded-full opacity-20 animate-bounce" style="animation-delay: 2s;"></div>
        </section>

        <!-- About Section -->
        <section class="py-20 bg-linear-to-r from-green-50 to-blue-50" id="about">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">
                        About <span class="bg-linear-to-r from-green-600 to-blue-600 bg-clip-text text-transparent">Royal Rangers</span>
                    </h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        We are a passionate cricket team dedicated to excellence, sportsmanship, and the love of the game. 
                        Founded with the vision of bringing together talented players and creating unforgettable moments on the field.
                    </p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 text-center">
                        <div class="w-16 h-16 bg-linear-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Team Spirit</h3>
                        <p class="text-gray-600">Unity, camaraderie, and mutual support define our team culture.</p>
                    </div>
                    
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 text-center">
                        <div class="w-16 h-16 bg-linear-to-r from-green-500 to-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Excellence</h3>
                        <p class="text-gray-600">Striving for the highest standards in every match we play.</p>
                    </div>
                    
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 text-center">
                        <div class="w-16 h-16 bg-linear-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Passion</h3>
                        <p class="text-gray-600">Our love for cricket drives us to give our best every day.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Featured Players Section -->
        <section class="py-20 bg-linear-to-r from-cyan-50 to-teal-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">
                        Featured <span class="bg-linear-to-r from-cyan-600 to-teal-600 bg-clip-text text-transparent">Players</span>
                    </h2>
                    <p class="text-xl text-gray-600">Meet our star players</p>
                </div>

                @if($players->count() > 0)
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-12">
                        @foreach($players as $player)
                            <x-player-card :player="$player" />
                        @endforeach
                    </div>
                    
                    <!-- View All Players Button -->
                    <div class="text-center">
                        <a href="{{ route('players.index') }}" 
                           class="inline-flex items-center px-8 py-4 bg-linear-to-r from-cyan-600 to-teal-600 text-white font-semibold rounded-full hover:from-cyan-700 hover:to-teal-700 transition-all duration-300 transform hover:scale-105 shadow-lg">
                            <span>View All Players</span>
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                @else
                    <div class="text-center py-12">
                        <div class="w-24 h-24 bg-linear-to-r from-gray-200 to-gray-300 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-12 h-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">No players yet</h3>
                        <p class="text-gray-500">Players will appear here once they are added.</p>
                    </div>
                @endif
            </div>
        </section>
        <!-- Recent Matches Section -->
        <section class="py-20 bg-linear-to-r from-orange-50 to-red-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">
                        Recent <span class="bg-linear-to-r from-orange-600 to-red-600 bg-clip-text text-transparent">Matches</span>
                    </h2>
                    <p class="text-xl text-gray-600">Stay updated with our latest performances</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-center justify-between mb-4">
                            <span class="bg-linear-to-r from-green-500 to-blue-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Won</span>
                            <span class="text-gray-500 text-sm">2 days ago</span>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Royal Rangers vs Thunder Bolts</h3>
                        <p class="text-gray-600 mb-4">A thrilling victory with outstanding performances from our batting lineup.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            City Cricket Ground
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-center justify-between mb-4">
                            <span class="bg-linear-to-r from-yellow-500 to-orange-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Tie</span>
                            <span class="text-gray-500 text-sm">1 week ago</span>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Royal Rangers vs Lightning Strikers</h3>
                        <p class="text-gray-600 mb-4">An intense match that ended in a thrilling tie with both teams giving their all.</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            National Stadium
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-center justify-between mb-4">
                            <span class="bg-linear-to-r from-purple-500 to-pink-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Upcoming</span>
                            <span class="text-gray-500 text-sm">Next week</span>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Royal Rangers vs Fire Hawks</h3>
                        <p class="text-gray-600 mb-4">Get ready for an exciting match against our arch-rivals. Don't miss the action!</p>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Royal Cricket Club
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery Section -->
        <section class="py-20 bg-linear-to-r from-indigo-50 to-purple-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">
                        Team <span class="bg-linear-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">Gallery</span>
                    </h2>
                    <p class="text-xl text-gray-600">Capturing our best moments on and off the field</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-linear-to-br from-blue-400 to-purple-500 rounded-2xl h-64 flex items-center justify-center text-white font-bold text-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                        Match Action
                    </div>
                    <div class="bg-linear-to-br from-green-400 to-blue-500 rounded-2xl h-64 flex items-center justify-center text-white font-bold text-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                        Team Celebration
                    </div>
                    <div class="bg-linear-to-br from-pink-400 to-red-500 rounded-2xl h-64 flex items-center justify-center text-white font-bold text-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                        Training Session
                    </div>
                    <div class="bg-linear-to-br from-yellow-400 to-orange-500 rounded-2xl h-64 flex items-center justify-center text-white font-bold text-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                        Victory Moment
                    </div>
                </div>
            </div>
        </section>

    </div>
</x-guest-layout>