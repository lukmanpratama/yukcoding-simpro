<?php

namespace App\Livewire\Pemilik;

use Livewire\Component;
use App\Models\Proyek;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;

#[Title('Admin')]
class ProyekPemilik extends Component
{
    #[Rule('required|min:3')]
    public $nama_proyek;

    #[Rule('required|min:3')]
    public $jenis_proyek;

    #[Rule('required|min:3')]
    public $deskripsi_proyek;

    use \Livewire\WithPagination;

    public string $search='';

    public $isOpen = 0;

    public $proyekId;

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
        $proyek = Proyek::create([
            'nama_proyek' => $this->nama_proyek,
            'jenis_proyek' => $this->jenis_proyek,
            'deskripsi_proyek' => $this->deskripsi_proyek,
            'status_proyek' => 'to do',
        ]);

        $proyek->users()->sync(auth()->user()->id);
        session()->flash('Proyek created successfully', 'success');

        $this->reset('nama_proyek','deskripsi_proyek', 'jenis_proyek','proyekId');

        return $proyek;
    }
    public function edit($id)
    {
        $proyek = Proyek::findOrFail($id);
        $this->proyekId = $id;
        $this->nama_proyek = $proyek->nama_proyek;
        $this->jenis_proyek = $proyek->jenis_proyek;
        $this->deskripsi_proyek = $proyek->deskripsi_proyek;

        $this->openModal();
    }

    public function update()
    {
        if ($this->proyekId) {
            $proyek = Proyek::findOrFail($this->proyekId);
            $proyek->update([
                'nama_proyek' => $this->nama_proyek,
                'jenis_proyek' => $this->jenis_proyek,
                'deskripsi_proyek' => $this->deskripsi_proyek,
            ]);
            session()->flash('success', 'Post updated successfully.');
            $this->closeModal();
            $this->reset('nama_proyek','deskripsi_proyek', 'proyekId');
        }
    }

    public function delete($id)
    {
        Proyek::find($id)->delete();
        session()->flash('success', 'Post deleted successfully.');
        $this->reset('nama_proyek','deskripsi_proyek');
    }

    public function render()
    {
        $proyeks = Proyek::with('users')
        ->when($this->search, function ($search)
        {
            $search->where(function ($search)
            {
                $search->where('nama_proyek', 'like', '%'.$this->search.'%');
            });
        },fn ($search) =>$search->latest())
        ->paginate($this->limit);
        return view('livewire.pemilik.proyek',
        [
            'proyeks' => $proyeks,
        ]);
    }
}
