<?php

namespace App\Livewire\Notification;

use App\Models\Notification;
use Livewire\Component;

class NotificationCreate extends Component
{
    public $icon,$text,$readed=false,$alert;
    public function render()
    {
        return view('livewire.notification.notification-create');
    }

    public function createNotification(){
        Notification::create([
            'icon'=>$this->icon,
            'text'=>$this->text,
            'readed'=>$this->readed,
            'alert'=>$this->alert,
        ]);
    }
}
