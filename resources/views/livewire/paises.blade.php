<div>

    {{-- @livewire('hijo') --}}

    <x-button class="mb-4" 
    {{-- wire:click="$set('count', 0)" --}}
    wire:click="$toggle('open')"
    >
        Mostrar / ocultar
    </x-button>

    <form class="mb-4" wire:submit='save'>
        <x-input 
            wire:model='pais'
            placeholder="Ingrese pais"
            wire:keydown.space='increment' />

        <x-button>
            Agregar
        </x-button>
    </form>
    @if ($open)

        <ul class="list-disc list-inside space-y-2">  

            @foreach ($paises as $index => $pais)

                <li class="mt-2" wire:key='pais-{{ $index }}'>
                    {{-- <span wire:mouseenter="changeActive('{{$pais}}')">
                        ({{ $index }}) {{ $pais }}
                    </span> --}}
                    <span >
                        ({{ $index }}) {{ $pais }}
                    </span>
                    <x-danger-button wire:click='delete({{ $index }})'>
                        X
                    </x-danger-button>
                </li>
                
            @endforeach
        
        </ul>

    @endif
    {{-- {{$active}} --}}
    {{ $count }}



</div>



