<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.guest')]
class Registrasi extends Component
{
    public function render()
    {
        return view('livewire.auth.registrasi');
    }
}
