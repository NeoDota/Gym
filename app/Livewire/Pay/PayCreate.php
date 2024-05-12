<?php

namespace App\Livewire\Pay;

use App\Models\Member;
use App\Models\Pay;
use App\Models\Producto;
use App\Models\User;
use Livewire\Component;

class PayCreate extends Component
{
    public $producto;
    public $member;
    public $user;

    public $rules = [
        'producto' => 'required|integer',
        'member' => 'required|integer',
        'user' => 'required|integer',
    ];

    public $messages = [
        'required' => 'Este campo es obligatorio.',
        'integer' => 'Debe seleccionar un valor numérico.',
    ];

    public function render()
    {
        $members = Member::all();
        $productos = Producto::all();
        $users= User::all();
        return view('livewire.pay.pay-create',compact('members','productos','users'));
    }

    public function createPay()
    {
        $this->validate();

        Pay::create([
            'productos_id'=>$this->producto,
            'members_id'=>$this->member,
            'users_id'=>$this->user,
        ]);
        
        session()->flash('message', 'Pago creado exitosamente.');
    }
}
