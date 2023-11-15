<?php

namespace App\Livewire\Pemilik;

use App\Models\Job;
use App\Models\Proyek;
use Livewire\Component;
use Livewire\Attributes\Rule;

class TugasProyek extends Component
{
    #[Rule('required|min:3')]
    public $nama_tugas;

    #[Rule('required|min:3')]
    public $deskripsi_tugas;

    public $progres_tugas;

    public $tugasId;

    public $tugasproyek;

    public $proyekId;

    use \Livewire\WithPagination;

    public string $search='';

    public $isOpen = 0;

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

    public function mount($id)
    {
        //get post
        $proyek = Proyek::find($id);

        //assign
        $this->proyekId   = $proyek->id;
        if($proyek){
            $this->tugasproyek = $proyek;
        }
    }

    public function store()
    {

        $tugas = Job::create([
            'proyek_id' => $this->proyekId,
            'nama_tugas' => $this->nama_tugas,
            'tahapan_tugas' => 'inisiasi',
            'progres_tugas' => 0,
            'status_tugas' => 'to do',
            'deskripsi_tugas' => $this->deskripsi_tugas,
            ]);

            session()->flash('Proyek created successfully', 'success');

            $this->reset('nama_tugas','deskripsi_tugas');
            $this->closeModal();
        return $tugas;
    }

    public function edit($id)
    {
        $tugas = Job::findOrFail($id);
        $this->tugasId = $id;
        $this->nama_tugas = $tugas->nama_tugas;
        $this->deskripsi_tugas = $tugas->deskripsi_tugas;
        $this->progres_tugas = $tugas->progres_tugas;
        $this->openModal();
    }

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
        $tugass = Job::where('proyek_id', '=', $this->proyekId)
        ->when($this->search, function ($search)
        {
            $search->where(function ($search)
            {
                $search->where('nama_tugas', 'like', '%'.$this->search.'%');
            });
        },fn ($search) =>$search->latest())
        ->paginate($this->limit);
        return view('livewire.pemilik.tugas',
        [
            'tugass' => $tugass,
        ]);
    }
}
