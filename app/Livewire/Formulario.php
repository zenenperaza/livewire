<?php

namespace App\Livewire;

use App\Livewire\Forms\PostCreateForm;
use App\Livewire\Forms\PostEditForm;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Livewire\Attributes\Lazy;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Lazy()]
class Formulario extends Component
{
    use WithFileUploads;
    
    public $categories, $tags;

    public PostCreateForm $postCreate;
    public PostEditForm $postEdit;

    public $posts;

    // ciclo de vida de un componente
    public function mount(){
        $this->categories = Category::all();
        $this->tags = Tag::all();
        $this->posts = Post::all();
    }
    public function updating($property, $value){
        if ($property == 'postCreate.category_id') {
            if ($value > 3) {
                throw new \Exception('No puedes cambiar ...');
            }
        }
    }

    public function updated($property, $value){

    }

    public function hydrate(){

    }
    
    public function dehydrate(){

    }

    public function save(){

        $this->postCreate->save();
        $this->posts = Post::all();

        $this->dispatch('post-created', 'Nuevo articulo creado');
    }

    public function edit($postId){

       $this->resetValidation();
      
       $this->postEdit->edit($postId);

    }

    public function update(){
       
        $this->postEdit->update();        

        $this->posts = Post::all();

        $this->dispatch('post-created', 'articulo actualizado');

    }

    public function destroy($postId){

        $post = Post::find($postId);

        $post->delete();

        $this->posts = Post::all();        

        $this->dispatch('post-created', 'Articulo eliminado');

    }

    public function placeholder(){
        return view('livewire.placeholder.skeleton');
    }

    public function render()
    {
        return view('livewire.formulario');
    }
}
