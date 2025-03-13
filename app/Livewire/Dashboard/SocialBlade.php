<?php

namespace App\Livewire\Dashboard;

use App\Models\Accounts;
use Livewire\Component;

class SocialBlade extends Component
{
    public $name;
    public $url;
    public $icon;

    protected $rules = [
        'name' => 'required',
        'url' => 'required',
        'icon' => 'required'
    ];

   public function submit(){
    $this->validate();

    Accounts::create([
        'name' => $this->name,
        'url' => $this->url,
        'icon' => $this->icon
    ]);

    $this->reset(['name', 'url', 'icon']);
    session()->flash('success', 'Social media account added successfully!');
   }
   
    public function render()
    {
        return view('livewire.dashboard.social-blade', [
            'accounts' => Accounts::all()
        ]);
    }
}
