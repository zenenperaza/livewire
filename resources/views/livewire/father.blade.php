<div>
 @persist('player')
    <audio src="{{ asset('audios/mp3.mp3') }}" controls></audio>
 @endpersist

    <x-button wire:click='redirigir'>
        Ir a prueba
    </x-button>
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
        {{-- @livewire('contador')
        @livewire('contador')
        @livewire('contador')
        @livewire('contador') --}}
    </div>

    <script>
        console.log('hola padre');
    </script>
</div>
