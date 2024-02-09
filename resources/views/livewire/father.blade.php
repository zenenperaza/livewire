<div>
    <h1 class="text-2x1 font-semibold"> Soy tu padre </h1>

    <x-input type="text" wire:model.live='name' />

    {{-- <p>{{ //$prueba }}</p> --}}
<hr>
    <div>
        {{-- @livewire('children', [
            'name' => $name
        ]) --}}

        {{-- <livewire:children wire:model='name'> --}}

        @livewire('contador', [], key('contador-1'))
        @livewire('contador')
        @livewire('contador')
        @livewire('contador')
        @livewire('contador')
    </div>
</div>
