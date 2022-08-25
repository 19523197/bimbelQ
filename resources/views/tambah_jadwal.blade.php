@extends('layout.main')

@section('container')
<link rel="stylesheet" href="{{ asset('css/tmbh_jadwal.css') }}">
<div class="row">
    <!-- sidebar -->
    @include('layout.sidebar')
    <div class="col-10">
        <div class="row">
            <div class="col-7">
                <h1><b>Tambah Jadwal Mengajar</b></h1>
            </div>
        </div>
        <div class="card mt-5 border border-dark border-3">
            
            <form action="/tambah_jadwal" method="post" class="p-5">
                <h2 class="mb-4">Tambah Jadwal Mengajar</h2>
                @csrf

                <label for="">Nama Tentor</label>
                <select name="tentor" id="" class="form-control mb-2">
                    @foreach($mentors as $mentor)
                        <option value="{{$mentor->id}}">{{$mentor->name ." - " .$mentor->mapel}}</option>
                    @endforeach
                </select>

                <label for="">Jadwal Sesi</label>
                <select name="sesi" id="" class="form-control mb-2">
                    @foreach($sesis as $sesi)
                        <option value="{{$sesi->id}}">{{$sesi->nama_sesi . " (" . Carbon\Carbon::parse($sesi->Waktu_mulai)->format('H:i') . " - " . Carbon\Carbon::parse($sesi->Waktu_selesai)->format('H:i') . ")"}}</option>
                    @endforeach
                </select>

                <label for="">Tanggal Sesi</label>
                <input type="date" class="form-control mb-2" name="tanggal"/>

                <label for="">Tipe Sesi</label>
                <select name="program" id="" class="form-control mb-2">
                    @foreach($programs as $program)
                        <option value="{{$program->id}}">{{$program->nama}}</option>
                    @endforeach
                </select>

                <input type="submit">
            </form>
        </div>
    </div>
    </div>
</div>