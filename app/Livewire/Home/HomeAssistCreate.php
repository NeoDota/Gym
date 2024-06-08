<?php

namespace App\Livewire\Home;

use App\Models\Assist;
use App\Models\Category;
use App\Models\Pay;
use Livewire\Component;

class HomeAssistCreate extends Component
{
    public $pay;
    public $category;

    public $rules = [
        'pay' => 'required',
        'category' => 'required',
    ];
    
    public function render()
    {
        $pays = Pay::all();
        $categorys = Category::all();
        return view('livewire.home.home-assist-create',compact('pays','categorys'));
    }

    public function createAssist()
    {
        $this->validate();

        Assist::create([
            'pays_id' => $this->pay,
            'categories_id' => $this->category,
        ]);

        session()->flash('message', 'Assistencia creada exitosamente.');
        $this->dispatch('assistCreated');
    }

}
