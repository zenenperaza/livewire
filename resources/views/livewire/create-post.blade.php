<div>
   {{-- <h1>{{ $title }}</h1>
   <h2>{{ $email }}</h2> --}}
    <div>
        <x-input type="text" name="" id="" wire:model.live='name' />
        <x-button wire:click='save'>
         Save
        </x-button>
    </div>

    {{ $name }}

</div>
