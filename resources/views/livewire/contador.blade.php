<div>

    <x-button class="btn btn-primary mx-3" wire:click='decrement'>
        -
    </x-button>

    <span class="mx-2"> 
        {{ $count }}
    </span>


    <x-button class="btn btn-primary mx-3" wire:click='increment()'> + </x-button>
</div>
