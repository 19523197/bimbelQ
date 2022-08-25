<?php

namespace App\Models;

use App\Models\Mentor;
use App\Models\Jamsesi;
use App\Models\Program;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jadwal extends Model
{
    use HasFactory;



    protected $fillable = ['mentor_id', 'program_id', 'jamsesi_id', 'tanggal'];

    public function jamsesi()
    {
        return $this->belongsTo(Jamsesi::class);
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }
}
