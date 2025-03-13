<?php

namespace App\Livewire;

use App\Models\Accounts;
use Livewire\Component;

class SideBar extends Component
{



    public function render()
    {
        return view('livewire.side-bar', [
            'accounts' => Accounts::all()
        ]);
    }
}
