<?php

namespace App\Livewire\Assist;

use App\Models\Assist;
use Livewire\Component;

class AssistList extends Component
{
    public function render()
    {
        $assists = Assist::all();
        return view('livewire.assist.assist-list',compact('assists'));
    }
}
