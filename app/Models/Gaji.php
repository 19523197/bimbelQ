<?php

namespace App\Models;

use App\Models\Mentor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gaji extends Model
{
    use HasFactory;

    protected $fillable = ['mentor_id', 'status', 'tanggal', 'jumlah'];

    public function mentor()
    {
        return $this->hasMany(Mentor::class);
    }
}
