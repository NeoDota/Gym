<?php

namespace App\Livewire\Assist;

use App\Models\Assist;
use App\Models\Category;
use App\Models\Pay;
use App\Models\User;
use Livewire\Component;

class AssistCreate extends Component
{
    public $pay;
    public $category;
    
    
    public function render()
    {
        $pays = Pay::all();
        $categorys = Category::all();
        return view('livewire.assist.assist-create',compact('pays','categorys'));
    }

    public function createAssist()
    {
        Assist::create([
            'pays_id' => $this->pay,
            'categories_id' => $this->category,
        ]);

        session()->flash('message', 'Assistencia creada exitosamente.');
        $this->dispatch('assistCreated');
    }
}
