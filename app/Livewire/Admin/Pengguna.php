<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\WithFileUploads;

class Pengguna extends Component
{
    public $nama;
    public $email;
    public $password;
    public $alamat;
    public $nohp;
    public $foto;
    public $role;

    public string $search='';

    public $isOpen = 0;

    public $penggunaId;

    public int $limit = 10;

    public function create()
    {
        $this->openModal();
    }
    public function openModal()
    {
        $this->resetValidation();
        $this->isOpen = true;
    }
    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function store()
    {
        $this->validate();
        $this->foto->storeAs('public/foto', $this->foto->hashName());
        $pengguna = User::create([
            'name' => $this->nama,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'alamat' => $this->alamat,
            'nohp' => $this->nohp,
            'foto' => $this->foto->hashName(),
            'role' => $this->role,
        ]);

        session()->flash('Proyek created successfully', 'success');

        $this->reset('nama','email', 'password','proyekId');

        return $pengguna;
    }
    public function edit($id)
    {
        $pengguna = Proyek::findOrFail($id);
        $this->penggunaId = $id;
        $this->nama = $pengguna->nama;
        $this->email = $pengguna->email;
        $this->password = bcrypt($pengguna->password);
        $this->alamat = $pengguna->alamat;
        $this->nohp = $pengguna->nohp;
        $this->foto = $pengguna->foto;
        $this->role = $pengguna->role;

        $this->openModal();
    }

    public function update()
    {
        if ($this->penggunaId) {
            $pengguna = User::findOrFail($this->ppenggunaId);
            $pengguna->update([
                'name' => $this->nama,
                'email' => $this->email,
                'password' => bcrypt($this->password),
                'alamat' => $this->alamat,
                'nohp' => $this->nohp,
                'foto' => $this->foto->hashName(),
                'role' => $this->role,
            ]);
            session()->flash('success', 'Post updated successfully.');
            $this->closeModal();
            $this->reset('nama','email','password','alamat','nohp','role','penggunaId');
        }
    }

    public function delete($id)
    {
        User::find($id)->delete();
        session()->flash('success', 'Post deleted successfully.');
        $this->reset('nama_proyek','deskripsi_proyek');
    }

    public function render()
    {
        $penggunas = User::query()
        ->when($this->search, function ($search)
            {
                $search->where(function ($search)
                    {
                        $search->where('name', 'like', '%'.$this->search.'%');
                    }
                );

            }, fn ($search) => $search->latest()
        )->paginate ($this->limit);
        return view('livewire.admin.pengguna',['penggunas' => $penggunas]);
    }
}
