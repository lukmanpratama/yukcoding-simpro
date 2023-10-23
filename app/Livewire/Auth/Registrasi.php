<?php

namespace App\Livewire\Auth;

use App\Models\User;
use DateTime;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Layout;

#[Layout('layouts.guest')]
class Registrasi extends Component
{
    #[Rule('required|string')]
    public string $nama;

    #[Rule('required')]
    public string $email;

    #[Rule('required|min:8')]
    public string $password;

    #[Rule('required')]
    public string $alamat;

    #[Rule('required')]
    public string $nohp;

    public function registrasi()
    {
        $this->validate();
        User::create([
            'name' => $this->nama,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'alamat' => $this->alamat,
            'nohp' => $this->nohp,
            'role' => 'pemilik',

        ]);
        session()->flash('message', 'Data Berhasil Disimpan.');
        return redirect()->route('auth.login');
    }

    public function render()
    {
        return view('livewire.auth.registrasi');
    }
}
