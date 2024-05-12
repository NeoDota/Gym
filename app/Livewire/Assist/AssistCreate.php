<?php

namespace App\Livewire\Assist;

use App\Models\Assist;
use App\Models\Category;
use App\Models\User;
use Livewire\Component;

class AssistCreate extends Component
{
    public $hora;
    public $fecha;
    public $user;
    public $category;
    
    
    public function render()
    {
        $users = User::all();
        $categorys = Category::all();
        return view('livewire.assist.assist-create',compact('users','categorys'));
    }

    public function createAssist()
    {
        Assist::create([
            'hora' => $this->hora,
            'fecha' => $this->fecha,
            'users_id' => $this->user,
            'categories_id' => $this->category,
        ]);

        session()->flash('message', 'Assistencia creada exitosamente.');
    }
}
