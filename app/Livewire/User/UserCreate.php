<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserCreate extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $password;

    #[Rule('nullable|image|max:1024')]
    public $image;

    public function render()
    {
        return view('livewire.user.user-create');
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
            'image'=>$customName
        ]);
    }
}
