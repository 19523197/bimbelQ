@extends('layout.main')


@section('container')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
<div class="row">
    <!-- sidebar -->
    @include('layout.sidebar')
    <!-- content -->
    <div class="col-10">
        <h1><b>Presensi siswa</b></h1>
        <div class="row">
            <div class="col-8">
                <h6>Hari Senin, 22 Agustus 2022</h6>
            </div>
            <div class="col text-center mx-5">
                <a href="/presensi_reguler" class="text-decoration-none">Reguler</a>
            </div>
            <div class="col text-center border border-1 mx-5">
                <a href="/presensi_private" class="text-decoration-none">Privat</a>
            </div>
        </div>

        <div class="card mt-5 border border-dark border-3">
            
            <form action="/presensi_private" method="post" class="p-5">
                <h2 class="mb-4">PRIVAT</h2>
                @csrf

                <label for="">Nama Mentor</label>
                <select name="mentor_id" id="" class="form-control mb-2">
                    @foreach ($mentors as $mentor)
                        <option value="{{ $mentor->id }}">{{ $mentor->name }}</option>
                    @endforeach
                </select>

                <label for="">Sesi</label>
                <select name="sesi_id" id="" class="form-control mb-2">
                    @foreach ($sesi as $jam)
                        <option value="{{ $jam->id }}">{{ $jam->nama_sesi . " (" . Carbon\Carbon::parse($jam->Waktu_mulai)->format('H:i') . " - " . Carbon\Carbon::parse($jam->Waktu_selesai)->format('H:i') . ")"}}</option>
                    @endforeach
                </select>

                <label for="">Murid</label>
                <select name="siswa_id" id="" class="form-control mb-2">
                    @foreach ($siswas as $siswa)
                        <option value="{{ $siswa->id }}">{{ $siswa->name}}</option>
                    @endforeach
                </select>

                <input type="submit">
            </form>
        </div>
    </div>
</div>
@endsection