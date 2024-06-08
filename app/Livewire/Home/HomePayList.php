<?php

namespace App\Livewire\Home;

use App\Models\Pay;
use Livewire\Attributes\On;
use Livewire\Component;

class HomePayList extends Component
{
    #[On('payCreated')]
    
    public function render()
    {
        $pays = Pay::orderBy('id','desc')->paginate(10);
        return view('livewire.home.home-pay-list',compact('pays'));
    }
}
