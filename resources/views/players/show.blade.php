<x-guest-layout>
    <div class="min-h-screen bg-linear-to-br from-blue-50 to-indigo-100">
        <!-- Header -->
        <div class="bg-white shadow-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                <div class="flex items-center justify-between">
                    <div>
                        <a href="{{ route('home') }}" class="text-blue-600 hover:text-blue-700 font-medium">
                            ← Back to Team
                        </a>
                        <h1 class="text-3xl font-bold text-gray-900 mt-2">Royal Rangers</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Player Details -->
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="md:flex">
                    <!-- Player Photo -->
                    <div class="md:w-1/2">
                        @if($teamMember->photo)
                            <img src="{{ Storage::url($teamMember->photo) }}" 
                                 alt="{{ $teamMember->full_name }}" 
                                 class="w-full h-96 md:h-full object-cover">
                        @else
                            <div class="w-full h-96 md:h-full bg-gray-200 flex items-center justify-center">
                                <svg class="w-24 h-24 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        @endif
                    </div>

                    <!-- Player Information -->
                    <div class="md:w-1/2 p-8">
                        <div class="mb-6">
                            <div class="flex items-center mb-4">
                                <span class="inline-flex items-center px-4 py-2 rounded-full text-lg font-bold bg-blue-100 text-blue-800 mr-4">
                                    #{{ $teamMember->jersey_number }}
                                </span>
                                <h2 class="text-3xl font-bold text-gray-900">{{ $teamMember->full_name }}</h2>
                            </div>
                            <p class="text-xl text-gray-600 mb-6">{{ $teamMember->jersey_name }}</p>
                        </div>

                        <!-- Player Details -->
                        <div class="space-y-4 mb-8">
                            <div class="flex justify-between py-2 border-b border-gray-200">
                                <span class="font-medium text-gray-700">Jersey Size:</span>
                                <span class="text-gray-900">{{ $teamMember->jersey_size }}</span>
                            </div>
                            <div class="flex justify-between py-2 border-b border-gray-200">
                                <span class="font-medium text-gray-700">Trouser Size:</span>
                                <span class="text-gray-900">{{ $teamMember->trouser_size }}</span>
                            </div>
                        </div>

                        <!-- Contact Links -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">Contact & Social Media</h3>
                            
                            @if($teamMember->whatsapp_link)
                                <a href="{{ $teamMember->whatsapp_link }}" 
                                   target="_blank" 
                                   class="flex items-center p-4 bg-green-50 rounded-lg hover:bg-green-100 transition-colors duration-200">
                                    <svg class="w-6 h-6 text-green-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                                    </svg>
                                    <span class="text-green-700 font-medium">WhatsApp</span>
                                </a>
                            @endif

                            @if($teamMember->facebook_link)
                                <a href="{{ $teamMember->facebook_link }}" 
                                   target="_blank" 
                                   class="flex items-center p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors duration-200">
                                    <svg class="w-6 h-6 text-blue-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                    </svg>
                                    <span class="text-blue-700 font-medium">Facebook</span>
                                </a>
                            @endif

                            @if($teamMember->cricheroes_profile_link)
                                <a href="{{ $teamMember->cricheroes_profile_link }}" 
                                   target="_blank" 
                                   class="flex items-center p-4 bg-orange-50 rounded-lg hover:bg-orange-100 transition-colors duration-200">
                                    <svg class="w-6 h-6 text-orange-600 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                    </svg>
                                    <span class="text-orange-700 font-medium">CricHeroes Profile</span>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="bg-white border-t">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <div class="text-center text-gray-600">
                    <p>&copy; {{ date('Y') }} Royal Rangers Cricket Team. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
