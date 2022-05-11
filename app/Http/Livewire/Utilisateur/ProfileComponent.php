<?php

namespace App\Http\Livewire\Utilisateur;

use Livewire\Component;

class ProfileComponent extends Component
{
    public function render()
    {
        return view('livewire.utilisateur.profile-component')->layout('layouts.base');
    }
}
