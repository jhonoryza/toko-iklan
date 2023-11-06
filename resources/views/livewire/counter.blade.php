<div class="p-4">
    {{ $counter }}
    <button class="p-3 bg-blue-300" wire:click="increment">+</button>

    <form wire:submit="create">
        {{ $this->form }}

        {{-- <button class="bg-primary-600 text-white font-bold rounded-md p-2 mt-2 hover:bg-primary-500" type="submit">
                Submit
            </button> --}}
    <div class="mt-2">
        {{ $this->submitAction }}
    </div>

    </form>
    <x-filament-actions::modals />

</div>
