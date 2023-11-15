<?php

namespace App\Livewire\Auth;

use App\Models\User;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Layout;

#[Layout('layouts.guest')]
class Registrasi extends Component
{
    use WithFileUploads;

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

    #[Rule('required|image|mimes:jpeg,jpg,png')]
    public $foto;

    public function registrasi()
    {
        $this->validate();

        $this->foto->storeAs('public/foto', $this->foto->hashName());

        User::create([
            'name' => $this->nama,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'alamat' => $this->alamat,
            'nohp' => $this->nohp,
            'foto' => $this->foto->hashName(),
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
