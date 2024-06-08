<?php

namespace App\Livewire\Home;

use App\Models\Assist;
use Livewire\Attributes\On;
use Livewire\Component;

class HomeAssistList extends Component
{
    #[On('assistCreated')]
    
    public function render()
    {
        $assists = Assist::orderBy('id','desc')->paginate(10);
        return view('livewire.home.home-assist-list',compact('assists'));
    }
}
