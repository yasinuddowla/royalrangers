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
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-8">
                        @foreach($players as $player)
                            <x-player-card :player="$player" />
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
