<?php

namespace App\Livewire\Blog;

use App\Models\Blog;
use Livewire\Component;

class BlogList extends Component
{
    public function render()
    {
        $blogs = Blog::all();
        return view('livewire.blog.blog-list',compact('blogs'));
    }
}
