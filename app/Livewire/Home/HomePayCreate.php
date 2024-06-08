<?php

namespace App\Livewire\Home;

use App\Models\Member;
use App\Models\Pay;
use App\Models\Producto;
use App\Models\User;
use Livewire\Component;

class HomePayCreate extends Component
{
    public $producto = null;
    public $member = null;
    public $user;
    public $open = false;

    public $rules = [
        'user' => 'required|integer',
        'member' => 'required',
    ];

    public function render()
    {
        $members = Member::all();
        $productos = Producto::all();
        $users = User::all();
        return view('livewire.home.home-pay-create', compact('members', 'productos', 'users'));
    }

    public function createPay()
    {
        $this->validate();

        Pay::create([
            'productos_id' => $this->producto,
            'members_id' => $this->member,
            'users_id' => $this->user,
        ]);

        session()->flash('message', 'Pago creado exitosamente.');
        $this->reset(['producto', 'member', 'user']);
        $this->dispatch('payCreated');
        $this->dispatch('payCreatedA');

        $this->open = false;
    }
}
