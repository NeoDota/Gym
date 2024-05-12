<?php

namespace App\Livewire\Category;

use App\Models\Category;
use Livewire\Component;

class CategoryList extends Component
{
    public function render()
    {
        $categorys = Category::all();
        return view('livewire.category.category-list', compact('categorys'));
    }
}
