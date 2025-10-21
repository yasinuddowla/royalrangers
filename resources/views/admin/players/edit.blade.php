<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Player') }}
            </h2>
            <a href="{{ route('admin.players.index') }}" 
               class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                Back to Players
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <form method="POST" action="{{ route('admin.players.update', $player) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Full Name -->
                        <div class="mb-4">
                            <x-input-label for="full_name" :value="__('Full Name')" />
                            <x-text-input id="full_name" 
                                          class="block mt-1 w-full" 
                                          type="text" 
                                          name="full_name" 
                                          :value="old('full_name', $player->full_name)" 
                                          required 
                                          autofocus />
                            <x-input-error :messages="$errors->get('full_name')" class="mt-2" />
                        </div>

                        <!-- Jersey Name -->
                        <div class="mb-4">
                            <x-input-label for="jersey_name" :value="__('Jersey Name')" />
                            <x-text-input id="jersey_name" 
                                          class="block mt-1 w-full" 
                                          type="text" 
                                          name="jersey_name" 
                                          :value="old('jersey_name', $player->jersey_name)" 
                                          required />
                            <x-input-error :messages="$errors->get('jersey_name')" class="mt-2" />
                        </div>

                        <!-- Player Role -->
                        <div class="mb-4">
                            <x-input-label for="role" :value="__('Player Role')" />
                            <select id="role" 
                                    name="role" 
                                    class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                    required>
                                <option value="">Select Player Role</option>
                                <option value="Batsman" {{ old('role', $player->role) == 'Batsman' ? 'selected' : '' }}>Batsman</option>
                                <option value="Bowler" {{ old('role', $player->role) == 'Bowler' ? 'selected' : '' }}>Bowler</option>
                                <option value="All-Rounder" {{ old('role', $player->role) == 'All-Rounder' ? 'selected' : '' }}>All-Rounder</option>
                            </select>
                            <x-input-error :messages="$errors->get('role')" class="mt-2" />
                        </div>

                        <!-- Jersey Number -->
                        <div class="mb-4">
                            <x-input-label for="jersey_number" :value="__('Jersey Number')" />
                            <x-text-input id="jersey_number" 
                                          class="block mt-1 w-full" 
                                          type="text" 
                                          name="jersey_number" 
                                          :value="old('jersey_number', $player->jersey_number)" 
                                          required />
                            <x-input-error :messages="$errors->get('jersey_number')" class="mt-2" />
                        </div>

                        <!-- Jersey Size -->
                        <div class="mb-4">
                            <x-input-label for="jersey_size" :value="__('Jersey Size')" />
                            <select id="jersey_size" 
                                    name="jersey_size" 
                                    class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                    required>
                                <option value="">Select Jersey Size</option>
                                <option value="XS" {{ old('jersey_size', $player->jersey_size) == 'XS' ? 'selected' : '' }}>XS</option>
                                <option value="S" {{ old('jersey_size', $player->jersey_size) == 'S' ? 'selected' : '' }}>S</option>
                                <option value="M" {{ old('jersey_size', $player->jersey_size) == 'M' ? 'selected' : '' }}>M</option>
                                <option value="L" {{ old('jersey_size', $player->jersey_size) == 'L' ? 'selected' : '' }}>L</option>
                                <option value="XL" {{ old('jersey_size', $player->jersey_size) == 'XL' ? 'selected' : '' }}>XL</option>
                                <option value="XXL" {{ old('jersey_size', $player->jersey_size) == 'XXL' ? 'selected' : '' }}>XXL</option>
                                <option value="XXXL" {{ old('jersey_size', $player->jersey_size) == 'XXXL' ? 'selected' : '' }}>XXXL</option>
                            </select>
                            <x-input-error :messages="$errors->get('jersey_size')" class="mt-2" />
                        </div>

                        <!-- Trouser Size -->
                        <div class="mb-4">
                            <x-input-label for="trouser_size" :value="__('Trouser Size')" />
                            <select id="trouser_size" 
                                    name="trouser_size" 
                                    class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                    required>
                                <option value="">Select Trouser Size</option>
                                <option value="28" {{ old('trouser_size', $player->trouser_size) == '28' ? 'selected' : '' }}>28</option>
                                <option value="30" {{ old('trouser_size', $player->trouser_size) == '30' ? 'selected' : '' }}>30</option>
                                <option value="32" {{ old('trouser_size', $player->trouser_size) == '32' ? 'selected' : '' }}>32</option>
                                <option value="34" {{ old('trouser_size', $player->trouser_size) == '34' ? 'selected' : '' }}>34</option>
                                <option value="36" {{ old('trouser_size', $player->trouser_size) == '36' ? 'selected' : '' }}>36</option>
                                <option value="38" {{ old('trouser_size', $player->trouser_size) == '38' ? 'selected' : '' }}>38</option>
                                <option value="40" {{ old('trouser_size', $player->trouser_size) == '40' ? 'selected' : '' }}>40</option>
                                <option value="42" {{ old('trouser_size', $player->trouser_size) == '42' ? 'selected' : '' }}>42</option>
                                <option value="44" {{ old('trouser_size', $player->trouser_size) == '44' ? 'selected' : '' }}>44</option>
                            </select>
                            <x-input-error :messages="$errors->get('trouser_size')" class="mt-2" />
                        </div>

                        <!-- Current Photo -->
                        @if($player->photo)
                            <div class="mb-4">
                                <x-input-label :value="__('Current Photo')" />
                                <div class="mt-2">
                                    <img src="{{ Storage::url($player->photo) }}" 
                                         alt="{{ $player->full_name }}" 
                                         class="h-32 w-32 object-cover rounded-lg">
                                </div>
                            </div>
                        @endif

                        <!-- Photo -->
                        <div class="mb-4">
                            <x-input-label for="photo" :value="__('Photo')" />
                            <input id="photo" 
                                   class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" 
                                   type="file" 
                                   name="photo" 
                                   accept="image/*" />
                            <x-input-error :messages="$errors->get('photo')" class="mt-2" />
                            <p class="mt-1 text-sm text-gray-500">Upload a new photo to replace the current one (optional)</p>
                        </div>

                        <!-- WhatsApp Link -->
                        <div class="mb-4">
                            <x-input-label for="whatsapp_link" :value="__('WhatsApp Link')" />
                            <x-text-input id="whatsapp_link" 
                                          class="block mt-1 w-full" 
                                          type="url" 
                                          name="whatsapp_link" 
                                          :value="old('whatsapp_link', $player->whatsapp_link)" 
                                          placeholder="https://wa.me/1234567890" />
                            <x-input-error :messages="$errors->get('whatsapp_link')" class="mt-2" />
                        </div>

                        <!-- Facebook Link -->
                        <div class="mb-4">
                            <x-input-label for="facebook_link" :value="__('Facebook Link')" />
                            <x-text-input id="facebook_link" 
                                          class="block mt-1 w-full" 
                                          type="url" 
                                          name="facebook_link" 
                                          :value="old('facebook_link', $player->facebook_link)" 
                                          placeholder="https://facebook.com/username" />
                            <x-input-error :messages="$errors->get('facebook_link')" class="mt-2" />
                        </div>

                        <!-- CricHeroes Profile Link -->
                        <div class="mb-4">
                            <x-input-label for="cricheroes_profile_link" :value="__('CricHeroes Profile Link')" />
                            <x-text-input id="cricheroes_profile_link" 
                                          class="block mt-1 w-full" 
                                          type="url" 
                                          name="cricheroes_profile_link" 
                                          :value="old('cricheroes_profile_link', $player->cricheroes_profile_link)" 
                                          placeholder="https://cricheroes.in/player/username" />
                            <x-input-error :messages="$errors->get('cricheroes_profile_link')" class="mt-2" />
                        </div>

                        <!-- Status Fields -->
                        <div class="mb-4">
                            <div class="flex items-center space-x-6">
                                <div class="flex items-center">
                                    <input id="is_featured" 
                                           type="checkbox" 
                                           name="is_featured" 
                                           value="1"
                                           {{ old('is_featured', $player->is_featured) ? 'checked' : '' }}
                                           class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                                    <label for="is_featured" class="ml-2 text-sm text-gray-900">
                                        {{ __('Featured Player') }}
                                    </label>
                                </div>
                                
                                <div class="flex items-center">
                                    <input id="is_active" 
                                           type="checkbox" 
                                           name="is_active" 
                                           value="1"
                                           {{ old('is_active', $player->is_active) ? 'checked' : '' }}
                                           class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                                    <label for="is_active" class="ml-2 text-sm text-gray-900">
                                        {{ __('Active Player') }}
                                    </label>
                                </div>
                            </div>
                            <p class="mt-1 text-sm text-gray-500">Featured players appear on the home page. Active players are visible to the public.</p>
                        </div>

                        <!-- Submit Button -->
                        <div class="flex items-center justify-end">
                            <x-primary-button>
                                {{ __('Update Player') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
