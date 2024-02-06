<div>
    <div class="bg-white shadow rounded-lg p-6 mb-3 ">
       
            <form action="" wire:submit='save'>
                <div class="mb-4">
                    <x-label for="">Titulo</x-label>
                    <x-input type="text" name="title" class="w-full" wire:model='postCreate.title' />
                    {{-- @error('title')
                        {{ $message }}
                    @enderror --}}
                    <x-input-error for="postCreate.title" />
                </div>

                <div class="mb-4">
                    <x-label for="">Contenido</x-label>
                    <x-textarea class="w-full" name='content' wire:model='postCreate.content' > </x-textarea> 
                    
                    <x-input-error for="postCreate.content" />
                </div>

                <div class="mb-4">
                    <x-label for="">Categoria</x-label>
                    <x-select class="w-full" wire:model='postCreate.category_id' > 
                        <option value="" disabled>Seleccione una categoria</option>
                        @foreach ($categories as $category)
                      
                        <option value="{{ $category->id }}">

                            {{ $category->name }}
                        </option>
                        
                        @endforeach    
                    </x-select> 
                    
                    <x-input-error for="postCreate.category_id" />
                </div>

                <div class="mb-4">
                    <x-label for="">Etiquetas</x-label>
                    <ul>
                        @foreach ($tags as $tag)
                            <li>
                                <label for="">
                                    <x-checkbox value="{{ $tag->id }}" wire:model='postCreate.tags'></x-checkbox>
                                    {{ $tag->name }}
                                </label>
                            </li>
                        @endforeach    
                    </ul>
                    
                    <x-input-error for="postCreate.tags" />
                </div>

                <div class="flex justify-end">
                    <x-button>
                        Crear
                    </x-button>
                </div>






            </form>
     

    
    </div>

    
    <div class="bg-white shadow rounded-lg p-6 mt-2">
        <ul class="list-disc list-inside">
            @foreach ($posts as $post)
                <li class="flex justify-between mb-3 mt-3 space-y-3" wire:key='post-{{ $post->id }}'>
                    {{ $post->title }}

                    <div>                   
                        <x-button class="mb-3" wire:click='edit({{ $post->id }})'>
                            Editar
                        </x-button>
                        <x-danger-button class="mb-3"  wire:click='destroy({{ $post->id }})'>
                            Eliminar
                        </x-danger-button>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

    {{-- @if ($open)
   // FORMULARIO DE EDICIOM 
    <div class="bg-gray-800 bg-opacity-25 fixed inset-0">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow rounded-lg p-6 ">
                    <form action="" wire:submit='update'>
                        <div class="mb-4">
                            <x-label for="">Titulo</x-label>
                            <x-input type="text" name="title" class="w-full" wire:model='postEdit.title' required/>
                        </div>
        
                        <div class="mb-4">
                            <x-label for="">Contenido</x-label>
                            <x-textarea class="w-full" name='content' wire:model='postEdit.content' required> </x-textarea> 
                        </div>
        
                        <div class="mb-4">
                            <x-label for="">Categoria</x-label>
                            <x-select class="w-full" wire:model='postEdit.category_id' required> 
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
                                            <x-checkbox value="{{ $tag->id }}" wire:model='postEdit.tags'></x-checkbox>
                                            {{ $tag->name }}
                                        </label>
                                    </li>
                                @endforeach    
                            </ul>
                        </div>
        
                        <div class="flex justify-between">
                            <x-danger-button wire:click="$set('open', false)">
                                Cancelar
                            </x-danger-button>
                            <x-button>
                                Actualizar
                            </x-button>
                        </div>      
        
        
        
        
                    </form>
                </div>
            </div>
        </div>
    </div>        
    @endif --}}

    <form action="" wire:submit='update'>
    <x-dialog-modal wire:model='open'>
        <x-slot name="title">
            Actualizar post
        </x-slot>

        <x-slot name="content">
      
                <div class="mb-4">
                    <x-label for="">Titulo</x-label>
                    <x-input type="text" name="title" class="w-full" wire:model='postEdit.title' />
                    <x-input-error for="postEdit.title" />
                </div>

                <div class="mb-4">
                    <x-label for="">Contenido</x-label>
                    <x-textarea class="w-full" name='content' wire:model='postEdit.content' > </x-textarea> 
                    <x-input-error for="postEdit.content" />
                </div>

                <div class="mb-4">
                    <x-label for="">Categoria</x-label>
                    <x-select class="w-full" wire:model='postEdit.category_id' > 
                        <option value="" disabled>Seleccione una categoria</option>
                        @foreach ($categories as $category)
                      
                        <option value="{{ $category->id }}">

                            {{ $category->name }}
                        </option>
                        
                        @endforeach    
                    </x-select> 
                    
                    <x-input-error for="postEdit.category_id" />
                </div>

                <div class="mb-4">
                    <x-label for="">Etiquetas</x-label>
                    <ul>
                        @foreach ($tags as $tag)
                            <li>
                                <label for="">
                                    <x-checkbox value="{{ $tag->id }}" wire:model='postEdit.tags'></x-checkbox>
                                    {{ $tag->name }}
                                </label>
                            </li>
                        @endforeach    
                    </ul>
                    
                    <x-input-error for="postEdit.tags" />
                </div>
          
        </x-slot>

        <x-slot name="footer">

            <div class="flex justify-between ">
                <x-danger-button wire:click="$set('open', false)">
                    Cancelar
                </x-danger-button>
                <x-button>
                    Actualizar
                </x-button>
            </div> 
            
        </x-slot>


    </x-dialog-modal>
</form>



</div>