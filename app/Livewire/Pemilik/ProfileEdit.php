<?php

namespace App\Livewire\Pemilik;

use Livewire\Component;

class ProfileEdit extends Component
{
    public function update()
    {
        if ($this->tugasId) {
            $tugas = Job::findOrFail($this->tugasId);
            $tugas->update([
                'nama_tugas' => $this->nama_tugas,

                'deskripsi_tugas' => $this->deskripsi_tugas,
                'progres_tugas'=>$this->progres_tugas,
            ]);
            session()->flash('success', 'Post updated successfully.');
            $this->closeModal();
            $this->reset('nama_tugas','deskripsi_tugas', 'progres_tugas', 'tugasId');
        }
    }

    public function render()
    {
        return view('livewire.pemilik.profile-edit');
    }
}
