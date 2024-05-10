<?php

namespace App\Livewire\Equipo;

use App\Models\Equipo;
use Livewire\Component;

class EquipoList extends Component
{
    public function render()
    {
        $equipos = Equipo::all();
        return view('livewire.equipo.equipo-list',compact('equipos'));
    }
}
