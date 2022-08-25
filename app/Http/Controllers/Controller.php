<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Jadwal;
use App\Models\Mentor;
use App\Models\Jamsesi;
use App\Models\Program;
use App\Models\Tagihan;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function presensi_private()
    {
        return view('presensi_private', [
            "title" => "presensi",
            "mentors" => Mentor::latest()->get(),
            "siswas" => Siswa::latest()->get(),
            "sesi" => Jamsesi::latest()->get(),
        ]);
    }

    public function presensi_reguler(Jadwal $jadwal)
    {
        return view('presensi_reguler', [
            "title" => "presensi",
            "mentors" => Mentor::latest()->get(),
            "siswas" => Siswa::latest()->get(),
            "sesi" => Jamsesi::latest()->get(),
            "jadwal" => $jadwal,
        ]);
    }

    public function tagihan_siswa()
    {
        return view('tagihan_siswa', [
            "title" => "tagihan siswa",
            "siswas" => Siswa::latest()->get(),
            "tagihans" => Tagihan::latest()->get()
        ]);
    }
}
