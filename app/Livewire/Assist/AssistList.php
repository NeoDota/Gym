<?php

namespace App\Livewire\Assist;

use App\Models\Assist;
use Livewire\Attributes\On;
use Livewire\Component;

class AssistList extends Component
{
    #[On('assistCreated')]
    
    public function render()
    {
        $assists = Assist::all();
        return view('livewire.assist.assist-list',compact('assists'));
    }

    public function delete($id)
    {
        $assist = Assist::find($id);
        if ($assist) {
            $assist->delete();
            session()->flash('message', 'Asistencia eliminada con éxito.');
        } else {
            session()->flash('message', 'Asistencia no encontrada.');
        }
    }
}
