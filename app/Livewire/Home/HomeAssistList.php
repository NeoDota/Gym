<?php

namespace App\Livewire\Home;

use App\Models\Assist;
use Livewire\Component;

class HomeAssistList extends Component
{
    public function render()
    {
        $assists = Assist::orderBy('id','desc')->paginate(10);
        return view('livewire.home.home-assist-list',compact('assists'));
    }
}
