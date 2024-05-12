<?php

namespace App\Livewire\Category;

use App\Models\Category;
use Livewire\Component;

class CategoryCreate extends Component
{
    public $tipo;
    public $capacidad;
    public $duracion;

    public function render()
    {
        return view('livewire.category.category-create');
    }

    public function createCategory()
    {
        $this->validate([
            'tipo' => 'required|string',
            'capacidad' => 'required|integer',
            'duracion' => 'required|integer',
        ]);

        Category::create([
            'tipo' => $this->tipo,
            'capacidad' => $this->capacidad,
            'duracion' => $this->duracion,
        ]);

        // Add a success message or redirect after creation (optional)
        session()->flash('message', 'Categoría creada exitosamente.');
        // return redirect()->route('categories.index'); // Example redirect
    }
}
