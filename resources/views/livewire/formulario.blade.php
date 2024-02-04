<div>
    <div class="bg-white shadow rounded-lg p-6 mb-8">
       
            <form action="" wire:submit='save'>
                <div class="mb-4">
                    <x-label for="">Titulo</x-label>
                    <x-input type="text" name="title" class="w-full" wire:model='title' required/>
                </div>

                <div class="mb-4">
                    <x-label for="">Contenido</x-label>
                    <x-textarea class="w-full" name='content' wire:model='content' required> </x-textarea> 
                </div>

                <div class="mb-4">
                    <x-label for="">Categoria</x-label>
                    <x-select class="w-full" wire:model='category_id' required> 
                        <option value="" disabled>Seleccione una categoria</option>
                        @foreach ($categories as $category)
                      
                        <option value="{{ $category->id }}">

                            {{ $category->name }}
                        </option>
                        
                        @endforeach    
                    </x-select> 
                </div>

                <div class="mb-4">
                    <x-label for="">Etiquetas</x-label>
                    <ul>
                        @foreach ($tags as $tag)
                            <li>
                                <label for="">
                                    <x-checkbox value="{{ $tag->id }}" wire:model='selectedTags'></x-checkbox>
                                    {{ $tag->name }}
                                </label>
                            </li>
                        @endforeach    
                    </ul>
                </div>

                <div class="flex justify-end">
                    <x-button>
                        Crear
                    </x-button>
                </div>






            </form>
     

    
    </div>

    
    <div class="bg-white shadow rounded-lg p-6">
        <ul class="list-disc list-inside">
            @foreach ($posts as $post)
                <li>
                    {{ $post->title }}
                </li>
            @endforeach
        </ul>
    </div>




</div>
