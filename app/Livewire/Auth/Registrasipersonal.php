<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.guest')]
class Registrasipersonal extends Component
{
    public function render()
    {
        return view('livewire.auth.registrasipersonal');
    }
}
