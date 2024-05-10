<?php

namespace App\Livewire\Equipo;

use App\Models\Equipo;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class EquipoCreate extends Component
{
    use WithFileUploads;
    
    public $descripcion;
    public $precio;
    public $cantidad;
    public $Fadquirida;
    public $Fmantenimiento;

    #[Rule('nullable|image|max:1024')]
    public $image;
    
    
    public function render()
    {
        return view('livewire.equipo.equipo-create');
    }

    public function createEquipo()
    {
        $customName=null;

        if ($this->image) {
            $customName = 'equipos/'.uniqid().'.'.$this->image->extension();
            $this->image->storeAs('public',$customName);
        }

        Equipo::create([
            'descripcion'=>$this->descripcion,
            'precio'=>$this->precio,
            'cantidad'=>$this->cantidad,
            'Fadquirida'=>$this->Fadquirida,
            'Fmantenimiento'=>$this->Fmantenimiento,
            'image'=>$customName,
        ]);
    }
}
