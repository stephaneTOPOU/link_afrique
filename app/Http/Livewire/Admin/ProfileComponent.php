<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ProfileComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.profile-component')->layout('layouts.base');
    }
}
