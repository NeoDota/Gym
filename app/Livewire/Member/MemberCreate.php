<?php

namespace App\Livewire\Member;

use App\Models\Member;
use Livewire\Component;

class MemberCreate extends Component
{
    public $tipo;
    public $duracion;
    public $Finicio;
    public $precio;
    
    public function render()
    {
        return view('livewire.member.member-create');
    }

    public function createMember()
    {
        Member::create([
            'tipo'=>$this->tipo,
            'duracion'=>$this->duracion,
            'Finicio'=>$this->Finicio,
            'precio'=>$this->precio,
        ]);
    }
}
