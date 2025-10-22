@props(['player', 'showPhoto' => true, 'showJerseyName' => true, 'showRole' => true, 'showJerseyNumber' => true, 'showContactLinks' => true])

<div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:scale-105 flex flex-col">
    @if($showPhoto)
        <!-- Player Photo -->
        <div class="w-full">
            @if($player->photo)
                <img src="{{ Storage::url($player->photo) }}" 
                     alt="{{ $player->full_name }}" 
                     class="w-full h-64 object-cover"
                     draggable="false"
                     oncontextmenu="return false"
                     onmousedown="return false">
            @else
                <div class="w-full h-64 bg-linear-to-br from-gray-200 to-gray-300 flex items-center justify-center">
                    <svg class="w-16 h-16 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                    </svg>
                </div>
            @endif
        </div>
    @endif

    <!-- Player Info -->
    <div class="flex flex-col grow my-4">
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
            
            <div class="flex justify-center space-x-4">
                @if($showRole)
                    <!-- Player Role -->
                    <div class="text-center">
                        <span class="inline-flex items-center px-3 rounded-full text-sm font-medium {{ $player->getRoleBadgeClasses() }}">
                            {{ $player->role }}
                        </span>
                    </div>
                @endif
                
                @if($showJerseyNumber)
                    <!-- Jersey Number -->
                    <div class="text-center">
                        <div class="inline-flex items-center px-3 rounded-full text-sm font-medium bg-linear-to-r from-blue-100 to-purple-100 text-blue-800">
                            #{{ $player->jersey_number }}
                        </div>
                    </div>
                @endif
            </div>

            @if($showContactLinks)
                <!-- Contact Links -->
                <div class="flex justify-center space-x-4 mt-4">
                    @if($player->whatsapp_link)
                        <a href="{{ $player->whatsapp_link }}" 
                           target="_blank" 
                           class="text-green-600 hover:text-green-700 transition-colors duration-200 p-2 rounded-full hover:bg-green-50"
                           title="WhatsApp">
                            <x-whatsapp-logo class="w-6 h-6" />
                        </a>
                    @endif

                    @if($player->facebook_link)
                        <a href="{{ $player->facebook_link }}" 
                           target="_blank" 
                           class="text-blue-600 hover:text-blue-700 transition-colors duration-200 p-2 rounded-full hover:bg-blue-50"
                           title="Facebook">
                            <x-facebook-logo class="w-6 h-6" />
                        </a>
                    @endif

                    @if($player->cricheroes_profile_link)
                        <a href="{{ $player->cricheroes_profile_link }}" 
                           target="_blank" 
                           class="text-orange-600 hover:text-orange-700 transition-colors duration-200 rounded-full hover:bg-orange-50"
                           title="CricHeroes Profile">
                           <x-cricheros-logo class="w-6 h-6" />
                        </a>
                    @endif
                </div>
            @endif
        </div>
    </div>
</div>
