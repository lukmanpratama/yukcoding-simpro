<?php

namespace App\Models;

use App\Models\Proyek;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
    'proyek_id',
    'nama_tugas',
    'deskripsi_tugas',
    'tahapan_tugas',
    'progres_tugas',
    'status_tugas'
    ];


    public function proyeks():BelongsTo
    {
        return $this->belongsTo(Proyek::class);
    }
}
