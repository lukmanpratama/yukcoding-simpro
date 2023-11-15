<?php

namespace App\Livewire\Pemilik;

use Livewire\Component;
use App\Models\Proyek;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;

class DetilProyek extends Component
{
    public $detilproyek;

    public $nama_proyek;

    public $proyekId;

    public $deskripsi_proyek;

    public function mount($id)
    {
        //get post
        $proyek = Proyek::find($id);

        //assign
        $this->proyekId   = $proyek->id;
        $this->nama_proyek    = $proyek->nama_proyek;
        $this->deskripsi_proyek  = $proyek->deskripsi_proyek;

        if($proyek){
            $this->detilproyek = $proyek;
        }


    }

    public function render()
    {
        return view('livewire.pemilik.detil-proyek');
    }
}
