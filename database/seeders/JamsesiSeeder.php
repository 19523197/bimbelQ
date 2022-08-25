<?php

namespace Database\Seeders;

use App\Models\Jamsesi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class JamsesiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siangM = "13:30:00";
        $soreM = "15:30:00";
        $malamM = "18:30:00";

        $siangS = "15:00:00";
        $soreS = "17:00:00";
        $malamS = "20:00:00";
        //

        Jamsesi::insert([
            [
                'nama_sesi' => 'siang',
                'waktu_mulai' => Carbon::createFromFormat('H:i:s', $siangM),
                'waktu_selesai' => new Carbon($siangS),
            ],
            [
                'nama_sesi' => 'sore',
                'waktu_mulai' => new Carbon($soreM),
                'waktu_selesai' => new Carbon($soreS),
            ],
            [
                'nama_sesi' => 'siang',
                'waktu_mulai' => new Carbon($malamM),
                'waktu_selesai' => new Carbon($malamS),
            ],
        ]);
    }
}
