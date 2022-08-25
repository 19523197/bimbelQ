<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    public function jamsesi()
    {
        return $this->hasOne(jamsesi::class);
    }

    public function program()
    {
        return $this->hasOne(program::class);
    }

    public function mentor()
    {
        return $this->hasOne(mentor::class);
    }
}
