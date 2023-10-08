<x-modal name="edit-watershed" :show="$errors->isNotEmpty()" maxWidth="md" focusable>
    <form wire:submit.prevent="update" class="p-6">
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update Watershed Data') }}
        </h2>

        <div class="mt-6">
            <x-input-label for="name" value="{{ __('Name') }}" class="sr-only" />
            <x-text-input
                wire:model="name"
                id="name"
                name="name"
                type="text"
                class="mt-1 block w-full"
                placeholder="{{ __('Name') }}"
                required
            />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-6 flex flex-row gap-2">
           <div class="w-full">
                <x-input-label for="latitude" value="{{ __('Latitude') }}" class="sr-only" />
                <x-text-input
                    wire:model="latitude"
                    id="latitude"
                    name="latitude"
                    type="number"
                    step="any"
                    class="block w-full"
                    placeholder="{{ __('Latitude') }}"
                    required
                />
                <x-input-error :messages="$errors->get('latitude')" class="mt-2" />
           </div>
           <div class="w-full">
                <x-input-label for="longitude" value="{{ __('Longitude') }}" class="sr-only" />
                <x-text-input
                    wire:model="longitude"
                    id="longitude"
                    name="longitude"
                    type="number"
                    step="any"
                    class="block w-full"
                    placeholder="{{ __('Longitude') }}"
                    required
                />
                <x-input-error :messages="$errors->get('longitude')" class="mt-2" />
           </div>
        </div>

        <div class="mt-6 flex justify-end">
            <x-secondary-button x-on:click="$dispatch('close')">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-primary-button class="ml-3">
                {{ __('Update') }}
            </x-primary-button>
        </div>
    </form>
</x-modal>