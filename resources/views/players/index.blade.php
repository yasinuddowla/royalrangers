<x-guest-layout>
    <div class="min-h-screen bg-gradient-to-br from-blue-50 via-purple-50 to-pink-50">

        <!-- Page Header -->
        <section class="hero-section">
            <div class="absolute inset-0 hero-section-bg" style="background-image: url('{{ asset('images/rr_bg.jpeg') }}');"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <div class="text-center text-white mt-80">
                    <h1 class="text-5xl md:text-7xl font-bold mb-6 metal-mania-regular">
                        Royal Rangers
                    </h1>
                    <p class="text-xl md:text-2xl mb-8 text-white">
                        Meet the squad
                    </p>
                </div>
            </div>
        </section>

        <!-- Players Grid -->
        <section class="py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                @if($players->count() > 0)
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-8">
                        @foreach($players as $player)
                            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:scale-105 group">
                                <!-- Player Photo -->
                                <div class="relative overflow-hidden">
                                    @if($player->photo)
                                        <img src="{{ Storage::url($player->photo) }}" 
                                             alt="{{ $player->full_name }}" 
                                             class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-300">
                                    @else
                                        <div class="w-full h-64 bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center">
                                            <svg class="w-16 h-16 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                    @endif
                                    
                                    <!-- Jersey Number Badge -->
                                    <div class="absolute top-4 right-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white px-3 py-1 rounded-full text-sm font-bold shadow-lg">
                                        #{{ $player->jersey_number }}
                                    </div>
                                </div>

                                <!-- Player Info -->
                                <div class="p-6">
                                    <div class="text-center">
                                        <h3 class="text-xl font-semibold text-gray-900 mb-1">{{ $player->full_name }}</h3>
                                        <p class="text-sm text-gray-600 mb-2">{{ $player->jersey_name }}</p>
                                        
                                        <!-- Player Role -->
                                        <div class="mb-3">
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium {{ $player->getRoleBadgeClasses() }}">
                                                {{ $player->role }}
                                            </span>
                                        </div>
                                        
                                        <!-- Player Stats -->
                                        <div class="mb-4 text-xs">
                                            <div class="bg-gray-50 rounded-lg p-2">
                                                <div class="font-semibold text-gray-700">Jersey Size</div>
                                                <div class="text-gray-600">{{ $player->jersey_size }}</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Contact Links -->
                                    <div class="flex justify-center space-x-3">
                                        @if($player->whatsapp_link)
                                            <a href="{{ $player->whatsapp_link }}" 
                                               target="_blank" 
                                               class="text-green-600 hover:text-green-700 transition-colors duration-200 p-2 rounded-full hover:bg-green-50"
                                               title="WhatsApp">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                                                </svg>
                                            </a>
                                        @endif

                                        @if($player->facebook_link)
                                            <a href="{{ $player->facebook_link }}" 
                                               target="_blank" 
                                               class="text-blue-600 hover:text-blue-700 transition-colors duration-200 p-2 rounded-full hover:bg-blue-50"
                                               title="Facebook">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                                </svg>
                                            </a>
                                        @endif

                                        @if($player->cricheroes_profile_link)
                                            <a href="{{ $player->cricheroes_profile_link }}" 
                                               target="_blank" 
                                               class="text-orange-600 hover:text-orange-700 transition-colors duration-200 p-2 rounded-full hover:bg-orange-50"
                                               title="CricHeroes Profile">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                                </svg>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-20">
                        <div class="w-32 h-32 bg-gradient-to-r from-gray-200 to-gray-300 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-16 h-16 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-medium text-gray-900 mb-4">No players found</h3>
                        <p class="text-gray-500 mb-8">Players will appear here once they are added to the team.</p>
                        <a href="{{ route('home') }}" 
                           class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-full hover:from-blue-700 hover:to-purple-700 transition-all duration-300">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                            Back to Home
                        </a>
                    </div>
                @endif
            </div>
        </section>
    </div>
</x-guest-layout>
