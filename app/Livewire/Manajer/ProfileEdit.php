<?php

namespace App\Livewire\Manajer;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;

class ProfileEdit extends Component
{
    use WithFileUploads;

    public $profile_nama;
    public $profile_email;
    public $profile_alamat;
    public $profile_nohp;
    #[Rule('required|image|mimes:jpeg,jpg,png')]
    public $profile_foto;
    public $userId;

    public function mount()
    {
        //get post
        $profile_edit = User::find(auth()->user()->id);

        $this->userId = $profile_edit->id;
        $this->profile_nama = $profile_edit->name;
        $this->profile_email = $profile_edit->email;
        $this->profile_alamat = $profile_edit->alamat;
        $this->profile_nohp = $profile_edit->nohp;
        $this->profile_foto = $profile_edit->foto;
    }


    public function update()
    {

        $this->profile_foto->storeAs('public/foto', $this->profile_foto->hashName());
        $profile_edit = User::findOrFail($this->userId);
        $profile_edit->update([
            'name' => $this->profile_nama,
            'email' => $this->profile_email,
            'alamat' => $this->profile_alamat,
            'nohp'=> $this->profile_nohp,
            'foto'=> $this->profile_foto->hashName(),
            ]);
        session()->flash('success', 'Post updated successfully.');

    }

    public function render()
    {
        return view('livewire.manajer.profile-edit');
    }
}
