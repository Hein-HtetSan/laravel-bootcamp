<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Validate; // using the livewire validate attributes

new class extends Component {
    // saving the chirps
    #[Validate('required|string|max:255')]
    public string $message = '';

    // saving the chirps with vidation
    public function store(): void
    {
        $validated = $this->validate();
        auth()->user()->chirps()->create($validated);
        $this->message = '';
        // when the chirps are created need to update the list of Chirps
        $this->dispatch('chirp-created');
    }
}; ?>

<div>

    <form wire:submit="store">
        <textarea wire:model="message" placeholder="{{ __('What\'s on your mind?') }}"
            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
        </textarea>

        <x-input-error :messages="$errors->get('message')" class="mt-2"></x-input-error>
        <x-primary-button class="mt-4">{{ __('Chirp') }}</x-primary-button>
    </form>
</div>
