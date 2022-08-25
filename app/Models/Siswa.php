<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    public function program()
    {
        return $this->hasMany(Program::class, 'siswa_program');
    }

    public function jadwal()
    {
        return $this->belongsToMany(Jadwal::class, 'siswa_jadwal')->withPivot('status');
    }

    public function tagihan()
    {
        return $this->hasMany(Tagihan::class);
    }
}
