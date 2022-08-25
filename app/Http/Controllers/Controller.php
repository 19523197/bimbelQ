<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use App\Models\Siswa;
use App\Models\Jadwal;
use App\Models\Mentor;
use App\Models\Jamsesi;
use App\Models\Program;
use App\Models\Tagihan;
use Carbon\Carbon;
use Illuminate\Http\Request;
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
        if ($jadwal->status_presensi) {
            return redirect('/jadwal')->with('warning', 'sudah presensi');
        }

        $siswa = Siswa::latest();

        return view('presensi_reguler', [
            "title" => "presensi",
            "mentors" => Mentor::latest()->get(),
            "siswas" => $siswa->get(),
            "sesi" => Jamsesi::latest()->get(),
            "jadwal" => $jadwal,
        ]);
    }

    public function presensi_reguler_submit(Request $request)
    {
        $gaji = Gaji::where('mentor_id', $request->mentor_id)->first();
        if ($gaji == NULL) {
            $gaji = Gaji::create([
                'mentor_id' => $request->mentor_id,
                'jumlah' => 0,
                'tanggal' => Carbon::now(),
                'status' => 'belum transfer',
            ]);

            $gaji = Gaji::where('mentor_id', $request->mentor_id)->first();
        }


        foreach ($request->hadir as $tes) {
            $siswa = Siswa::where('id', $tes)->first();
            $siswa->jadwal()->attach($request->jadwal_id, ['status' => 'hadir']);
        }



        $jadwal = Jadwal::where('id', $request->jadwal_id)->first();
        $jadwal->status_presensi = 1;
        $jadwal->save();



        $gaji->jumlah = $gaji->jumlah + $jadwal->program->tarif_mentor;
        $gaji->save;

        return redirect('/jadwal')->with('success', 'Presensi Berhasil');
    }

    public function presensi_private_submit(Request $request)
    {
    }
    public function tagihan_siswa()
    {
        return view('tagihan_siswa', [
            "title" => "tagihan",
            "siswas" => Siswa::latest()->get(),
            "tagihans" => Tagihan::latest()->get()
        ]);
    }
}
