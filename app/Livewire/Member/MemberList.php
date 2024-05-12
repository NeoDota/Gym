<?php

namespace App\Livewire\Member;

use App\Models\Member;
use Livewire\Component;

class MemberList extends Component
{
    public function render()
    {
        $members = Member::all();
        return view('livewire.member.member-list',compact('members'));
    }
}
