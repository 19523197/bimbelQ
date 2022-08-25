<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Siswa;
use App\Models\Jadwal;
use App\Models\Mentor;
use App\Models\Jamsesi;
use App\Models\Program;
use Illuminate\Http\Request;
use App\Http\Requests\StoreJadwalRequest;
use App\Http\Requests\UpdateJadwalRequest;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tambah_jadwal', [
            "title" => "jadwal",
            "mentors" => Mentor::latest()->get(),
            "sesis" => Jamsesi::latest()->get(),
            "programs" => Program::latest()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreJadwalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        //
        $validate = [
            'jamsesi_id' => 'required',
            'program_id' => 'required',
            'mentor_id' => 'required',
            'tanggal' => 'required',

        ];



        $validateData = $request->validate($validate);

        if (Jadwal::where('tanggal', $request->tanggal)->where('jamsesi_id', $request->jamsesi_id)->first()) {
            return redirect('/jadwal')->with('success', 'jadwal sudah ada');
        } else {
            Jadwal::create($validateData);
            return redirect('/jadwal')->with('success', 'jadwal berhasil ditambah');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(Jadwal $jadwal)
    {
        //
        return view('jadwal', [
            "title" => "jadwal",
            "jadwal" => Jadwal::where('tanggal', '=', Carbon::now()->format('Y-m-d'))->oldest()->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit(Jadwal $jadwal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJadwalRequest  $request
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJadwalRequest $request, Jadwal $jadwal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jadwal $jadwal)
    {
        //
    }
}
