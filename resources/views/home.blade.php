<x-guest-layout>
    <div class="min-h-screen bg-gradient-to-br from-blue-50 via-purple-50 to-pink-50">

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
        <section class="py-20 bg-gradient-to-r from-green-50 to-blue-50" id="about">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">
                        About <span class="bg-gradient-to-r from-green-600 to-blue-600 bg-clip-text text-transparent">Royal Rangers</span>
                    </h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        We are a passionate cricket team dedicated to excellence, sportsmanship, and the love of the game. 
                        Founded with the vision of bringing together talented players and creating unforgettable moments on the field.
                    </p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 text-center">
                        <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Team Spirit</h3>
                        <p class="text-gray-600">Unity, camaraderie, and mutual support define our team culture.</p>
                    </div>
                    
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 text-center">
                        <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Excellence</h3>
                        <p class="text-gray-600">Striving for the highest standards in every match we play.</p>
                    </div>
                    
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 text-center">
                        <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center mx-auto mb-4">
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
        <section class="py-20 bg-gradient-to-r from-cyan-50 to-teal-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">
                        Featured <span class="bg-gradient-to-r from-cyan-600 to-teal-600 bg-clip-text text-transparent">Players</span>
                    </h2>
                    <p class="text-xl text-gray-600">Meet our star players</p>
                </div>

                @if($players->count() > 0)
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                        @foreach($players->take(4) as $player)
                            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                                <!-- Player Photo -->
                                <div class="w-full">
                                    @if($player->photo)
                                        <img src="{{ Storage::url($player->photo) }}" 
                                             alt="{{ $player->full_name }}" 
                                             class="w-full h-64 object-cover">
                                    @else
                                        <div class="w-full h-64 bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center">
                                            <svg class="w-16 h-16 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    @endif
                                </div>

                                <!-- Player Info -->
                                <div class="p-6">
                                    <div class="text-center">
                                        <h3 class="text-xl font-semibold text-gray-900 mb-1">{{ $player->full_name }}</h3>
                                        <p class="text-sm text-gray-600 mb-2">{{ $player->jersey_name }}</p>
                                        
                                        <!-- Player Role -->
                                        <div class="mb-2">
                                            <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium {{ $player->getRoleBadgeClasses() }}">
                                                {{ $player->role }}
                                            </span>
                                        </div>
                                        
                                        <div class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-gradient-to-r from-blue-100 to-purple-100 text-blue-800 mb-4">
                                            #{{ $player->jersey_number }}
                                        </div>
                                    </div>

                                    <!-- Contact Links -->
                                    <div class="flex justify-center space-x-4">
                                        @if($player->whatsapp_link)
                                            <a href="{{ $player->whatsapp_link }}" 
                                               target="_blank" 
                                               class="text-green-600 hover:text-green-700 transition-colors duration-200 p-2 rounded-full hover:bg-green-50"
                                               title="WhatsApp">
                                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                                                </svg>
                                            </a>
                                        @endif

                                        @if($player->facebook_link)
                                            <a href="{{ $player->facebook_link }}" 
                                               target="_blank" 
                                               class="text-blue-600 hover:text-blue-700 transition-colors duration-200 p-2 rounded-full hover:bg-blue-50"
                                               title="Facebook">
                                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                                </svg>
                                            </a>
                                        @endif

                                        @if($player->cricheroes_profile_link)
                                            <a href="{{ $player->cricheroes_profile_link }}" 
                                               target="_blank" 
                                               class="text-orange-600 hover:text-orange-700 transition-colors duration-200 p-2 rounded-full hover:bg-orange-50"
                                               title="CricHeroes Profile">
                                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                                </svg>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
                    <!-- View All Players Button -->
                    <div class="text-center">
                        <a href="{{ route('players.index') }}" 
                           class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-cyan-600 to-teal-600 text-white font-semibold rounded-full hover:from-cyan-700 hover:to-teal-700 transition-all duration-300 transform hover:scale-105 shadow-lg">
                            <span>View All Players</span>
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                @else
                    <div class="text-center py-12">
                        <div class="w-24 h-24 bg-gradient-to-r from-gray-200 to-gray-300 rounded-full flex items-center justify-center mx-auto mb-4">
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
        <section class="py-20 bg-gradient-to-r from-orange-50 to-red-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">
                        Recent <span class="bg-gradient-to-r from-orange-600 to-red-600 bg-clip-text text-transparent">Matches</span>
                    </h2>
                    <p class="text-xl text-gray-600">Stay updated with our latest performances</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-center justify-between mb-4">
                            <span class="bg-gradient-to-r from-green-500 to-blue-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Won</span>
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
                            <span class="bg-gradient-to-r from-yellow-500 to-orange-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Tie</span>
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
                            <span class="bg-gradient-to-r from-purple-500 to-pink-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Upcoming</span>
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
        <section class="py-20 bg-gradient-to-r from-indigo-50 to-purple-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">
                        Team <span class="bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">Gallery</span>
                    </h2>
                    <p class="text-xl text-gray-600">Capturing our best moments on and off the field</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-gradient-to-br from-blue-400 to-purple-500 rounded-2xl h-64 flex items-center justify-center text-white font-bold text-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                        Match Action
                    </div>
                    <div class="bg-gradient-to-br from-green-400 to-blue-500 rounded-2xl h-64 flex items-center justify-center text-white font-bold text-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                        Team Celebration
                    </div>
                    <div class="bg-gradient-to-br from-pink-400 to-red-500 rounded-2xl h-64 flex items-center justify-center text-white font-bold text-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                        Training Session
                    </div>
                    <div class="bg-gradient-to-br from-yellow-400 to-orange-500 rounded-2xl h-64 flex items-center justify-center text-white font-bold text-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                        Victory Moment
                    </div>
                </div>
            </div>
        </section>

    </div>
</x-guest-layout>