<?php

namespace App\Livewire\Pemilik;

use App\Models\User;
use Livewire\Component;


class ProfileEdit extends Component
{
    public $profile_nama;
    public $profile_email;
    public $profile_alamat;
    public $profile_nohp;
    public $userId;

    public function mount()
    {
        //get post
        $profile_edit = User::find(auth()->user()->id);

        $this->userId = $profile_edit->id;
        $this->profile_nama = $profile_edit->name;
        $this->profile_email = $profile_edit->email;
        $this->profile_alamat = $profile_edit->alamat;
        $this->profile_nohp = $profile_edit->hohp;
    }


    public function update()
    {
            $profile_edit = User::findOrFail($this->userId);
            $profile_edit->update([
                'name' => $this->profile_nama,
                'email' => $this->profile_email,
                'alamat' => $this->profile_alamat,
                'nohp'=>$this->profile_nohp,
            ]);
            session()->flash('success', 'Post updated successfully.');

    }

    public function render()
    {
        return view('livewire.pemilik.profile-edit');
    }
}
