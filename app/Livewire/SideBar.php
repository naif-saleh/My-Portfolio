<?php

namespace App\Livewire;

use Livewire\Component;

class SideBar extends Component
{


    public array $socialIcons = [
        [
            'icon' => "bi bi-twitter-x",
            'name' => "twitter",
        ],
        [
            'icon' => "bi bi-facebook",
            'name' => "facebook",
        ],
        [
            'icon' => "bi bi-instagram",
            'name' => "instagram",
        ],
        [
            'icon' => "bi bi-skype",
            'name' => "skype",
        ]
    ];

    public function render()
    {
        return view('livewire.side-bar', [
            'socialIcons' => $this->socialIcons
        ]);
    }
}
