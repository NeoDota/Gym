<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;

class UserList extends Component
{
    public function render()
    {
        $users = User::all()->reverse();
        return view('livewire.user.user-list',compact('users'));
    }
}
