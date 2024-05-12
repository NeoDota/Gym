<?php

namespace App\Livewire\Pay;

use App\Models\Pay;
use Livewire\Component;

class PayList extends Component
{
    public function render()
    {
        $pays = Pay::all();
        return view('livewire.pay.pay-list',compact('pays'));
    }
}
