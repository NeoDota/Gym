<?php

namespace App\Livewire\Home;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class HomeUserCreate extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $password;

    public $lastname;
    public $address;
    public $number;
    public $ci;
    public $Fnaciemiento;
    public $genero;

    public $open=false;
    
    #[Rule('nullable|image|max:1024')]
    public $image;

    public function render()
    {
        return view('livewire.home.home-user-create');
    }

    public function createUser(){

        $customName=null;

        if ($this->image) {
            $customName = 'users/'.uniqid().'.'.$this->image->extension();
            $this->image->storeAs('public',$customName);
        }

        User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>$this->password,
            'image'=>$customName,
            'lastname'=>$this->lastname,
            'ci'=>$this->ci,
            'address'=>$this->address,
            'number'=>$this->number,
            'Fnaciemiento'=>$this->Fnaciemiento,
            'genero'=>$this->genero,
        ]);

        session()->flash('message', 'Pago creado exitosamente.');

        $this->open = false;
    }
}
