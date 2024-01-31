<div>

    <form class="mb-4" wire:submit='save'>
        <x-input 
            wire:model='pais'
            placeholder="Ingrese pais" />

        <x-button>
            Agregar
        </x-button>
    </form>

    <ul class="list-disc list-inside">  

        @foreach ($paises as $pais)

            <li>{{ $pais }}</li>
            
        @endforeach
    
    </ul>
</div>
