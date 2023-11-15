<?php

namespace App\Models;

use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Proyek extends Model
{
    use HasFactory;

    protected $fillable = ['nama_proyek', 'jenis_proyek','deskripsi_proyek', 'status_proyek'];

    public function users()
    {
    	return $this->belongsToMany(User::class, 'tims')->withTimestamps();
    }

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
