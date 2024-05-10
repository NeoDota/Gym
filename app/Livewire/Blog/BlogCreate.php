<?php

namespace App\Livewire\Blog;

use App\Models\Blog;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class BlogCreate extends Component
{
    use WithFileUploads;

    public $titulo;
    public $contenido;
    public $Fpublicacion;
    
    #[Rule('nullable|image|max:1024')]
    public $image;

    public function render()
    {
        return view('livewire.blog.blog-create');
    }

    public function createBlog(){

        $customName=null;

        if ($this->image) {
            $customName = 'blogs/'.uniqid().'.'.$this->image->extension();
            $this->image->storeAs('public',$customName);
        }

        Blog::create([
            'titulo'=>$this->titulo,
            'contenido'=>$this->contenido,
            'Fpublicacion'=>$this->Fpublicacion,
            'image'=>$customName
        ]);
    }
}
