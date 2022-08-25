@extends('layout.main')

@section('container')
<link rel="stylesheet" href="{{ asset('css/jadwal.css') }}">
<div class="row">
    <!-- sidebar -->
    @include('layout.sidebar')
    <!-- content -->
    <div class="col-10">
        @if(session()->has('success'))
  <div class="alert alert-success col-lg-11" role="alert">
    {{ session('success') }}
  </div>
@endif

@if(session()->has('warning'))
  <div class="alert alert-warning col-lg-11" role="alert">
    {{ session('warning') }}
  </div>
@endif
        <div class="row">
            <div class="col-7">
                <h1><b>Jadwal Mengajar Tentor</b></h1>
            </div>
            {{-- <div class="col text-center mx-2">
                <a href="#" class="text-decoration-none"><b>Harian</b></a>
            </div>
            <div class="col text-center border border-1 mx-5">
                <a href="#" class="text-decoration-none"><b>Bulanan</b></a>
            </div> --}}
        </div>
        <div class="row tgl">
            <div class="col-9">
                <form action="/jadwal">
                    <input type="date" name="tanggal" id="tanggal" value="{{ old('tanggal', Carbon\Carbon::now()->format('Y-m-d'))  }}" onchange="this.form.submit()">
                </form>
                
                
            </div>
            <div class="col">
                <a href="/tambah_jadwal" class="tmbh_jadwal">+</a>
            </div>
        </div>

       
        @foreach ($jadwal as $card)
        <div class="container {{ ($card->jamsesi->nama_sesi == "sore") ? 'yellow' : '',}}{{ ($card->jamsesi->nama_sesi == "malam") ? 'blue' : '' }}">
            <div class="d-flex flex-row-reverse">

            
                @if ($card->status_presensi)
                <div class="badge bg-primary text-wrap position-absolute text-end">
                    <h6>Sudah Presensi</h6>
                </div>
                @else
                <div class="badge bg-danger text-wrap position-absolute text-end">
                    <h6>Belum Presensi</h6>
                </div>
                    
                @endif
            </div>
            <div class="row">
                <div class="col-3 text-white"><h3><b>{{ $card->jamsesi->nama_sesi }}</b></h3>{{ $card->tanggal }}</div>
                <div class="col-7"></div>
            </div>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-9  text-white">
                    <p>Tentor <span>: {{ $card->mentor->name }}</span></p>
                    <p>Mata Pelajaran : {{ $card->mentor->mapel }}</p>
                </div>
                <div class="col text-white text-center">
                    <p>{{ $card->program->nama }}</p>
                    <a href="/presensi_reguler/{{ $card->id }}">PRESENSI</a>
                </div>
            </div>
        </div>
        @endforeach
        

       
    </div>
</div>
@endsection