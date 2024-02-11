<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Prueba
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @persist('player')
            <audio src="{{ asset('audios/mp3.mp3') }}" controls></audio>
           @endpersist
           
        </div>
    </div>
    


<script>
    console.log('hola prueba');
</script>

</x-app-layout>
