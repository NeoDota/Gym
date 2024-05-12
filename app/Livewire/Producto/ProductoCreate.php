<?php

namespace App\Livewire\Producto;

use App\Models\Producto;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductoCreate extends Component
{
    use WithFileUploads;

    public $title;
    public $precio;
    public $cantidad;

    #[Rule('nullable|image|max:1024')]
    public $image;
    
    public function render()
    {
        return view('livewire.producto.producto-create');
    }

    public function createProducto()
    {
        $customName=null;

        if ($this->image) {
            $customName = 'equipos/'.uniqid().'.'.$this->image->extension();
            $this->image->storeAs('public',$customName);
        }

        Producto::create([
            'title'=>$this->title,
            'precio'=>$this->precio,
            'cantidad'=>$this->cantidad,
            'image'=>$customName,
        ]);
    }
}
