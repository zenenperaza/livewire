<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;

class PostCreateForm extends Form
{
    #[Rule('required|min:3')]
    public $title;

    #[Rule('required')]
    public $content;

    #[Rule('required|exists:categories,id')]
    public $category_id = '';
    
    #[Rule('required|array')]
    public $tags = [];

    public function save(){
        
        $this->validate();      

        $post = Post::create(
            $this->only('title','content','category_id')
        );

        $post->tags()->attach($this->tags);

        $this->reset();
    }
}
