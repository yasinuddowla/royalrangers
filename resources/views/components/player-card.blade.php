@props(['player', 'showPhoto' => true, 'showJerseyName' => true, 'showRole' => true, 'showJerseyNumber' => true, 'showContactLinks' => true])

<div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:scale-105 flex flex-col">
    @if($showPhoto)
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
    @endif

    <!-- Player Info -->
    <div class="p-6 flex flex-col flex-grow">
        <!-- Player Name Only -->
        <div class="text-center mb-auto">
            <h3 class="text-xl font-semibold text-gray-900 mb-1">{{ $player->full_name }}</h3>
        </div>

        <!-- Bottom Section: Role, Jersey Info, and Links -->
        <div class="mt-auto">
            @if($showJerseyName)
                <!-- Jersey Name -->
                <div class="text-center mb-2">
                    <p class="text-sm text-gray-600">{{ $player->jersey_name }}</p>
                </div>
            @endif
            
            @if($showRole)
                <!-- Player Role -->
                <div class="text-center mb-2">
                    <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium {{ $player->getRoleBadgeClasses() }}">
                        {{ $player->role }}
                    </span>
                </div>
            @endif
            
            @if($showJerseyNumber)
                <!-- Jersey Number -->
                <div class="text-center mb-4">
                    <div class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-gradient-to-r from-blue-100 to-purple-100 text-blue-800">
                        #{{ $player->jersey_number }}
                    </div>
                </div>
            @endif

            @if($showContactLinks)
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
                           <x-cricheros-logo class="w-6 h-6" />
                        </a>
                    @endif
                </div>
            @endif
        </div>
    </div>
</div>
