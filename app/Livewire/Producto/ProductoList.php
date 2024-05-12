<?php

namespace App\Livewire\Producto;

use App\Models\Producto;
use Livewire\Component;

class ProductoList extends Component
{
    public function render()
    {
        $productos = Producto::all();
        return view('livewire.producto.producto-list',compact('productos'));
    }
}
