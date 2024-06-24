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
    public $userType;
    public $openTemporary = false;
    public $openComplete = false;
    public $openAdmin = false;
    
    #[Rule('nullable|image|max:1024')]
    public $image;

    public function render()
    {
        return view('livewire.home.home-user-create');
    }

    public function createTemporaryUser()
    {
        $this->validate([
            'ci' => 'required|numeric',
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'genero' => 'required|string'
        ]);

        User::create([
            'name' => $this->name,
            'ci' => $this->ci,
            'lastname' => $this->lastname,
            'genero' => $this->genero,
        ]);

        session()->flash('message', 'Usuario temporal creado exitosamente.');
        $this->resetForm();
        $this->openTemporary = false;
    }

    public function createCompleteUser()
    {
        $this->validate([
            'ci' => 'required|numeric',
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'genero' => 'required|string',
            'address' => 'required|string|max:255',
            'number' => 'required|string|max:15',
            'Fnaciemiento' => 'required|date',
            'image' => 'nullable|image|max:1024'
        ]);

        $customName = null;
        if ($this->image) {
            $customName = 'users/' . uniqid() . '.' . $this->image->extension();
            $this->image->storeAs('public', $customName);
        }

        User::create([
            'name' => $this->name,
            'ci' => $this->ci,
            'lastname' => $this->lastname,
            'genero' => $this->genero,
            'address' => $this->address,
            'number' => $this->number,
            'Fnaciemiento' => $this->Fnaciemiento,
            'image' => $customName,
        ]);

        session()->flash('message', 'Usuario completo creado exitosamente.');
        $this->resetForm();
        $this->openComplete = false;
    }

    public function createAdminUser()
    {
        $this->validate([
            'ci' => 'required|numeric',
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'genero' => 'required|string',
            'address' => 'required|string|max:255',
            'number' => 'required|string|max:15',
            'Fnaciemiento' => 'required|date',
            'image' => 'nullable|image|max:1024',
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:8'
        ]);

        $customName = null;
        if ($this->image) {
            $customName = 'users/' . uniqid() . '.' . $this->image->extension();
            $this->image->storeAs('public', $customName);
        }

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'image' => $customName,
            'lastname' => $this->lastname,
            'ci' => $this->ci,
            'address' => $this->address,
            'number' => $this->number,
            'Fnaciemiento' => $this->Fnaciemiento,
            'genero' => $this->genero,
        ]);

        session()->flash('message', 'Administrador creado exitosamente.');
        $this->resetForm();
        $this->openAdmin = false;
    }

    private function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->lastname = '';
        $this->address = '';
        $this->number = '';
        $this->ci = '';
        $this->Fnaciemiento = '';
        $this->genero = '';
        $this->image = null;
    }
}
