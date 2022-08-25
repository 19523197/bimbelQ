<?php

namespace App\Http\Controllers;

use App\Models\Jamsesi;
use App\Models\Mentor;
use App\Models\Siswa;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

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

    public function presensi_reguler()
    {
        return view('presensi_reguler', [
            "title" => "presensi",

        ]);
    }
}
