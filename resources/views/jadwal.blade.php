@extends('layout.main')

@section('container')
<link rel="stylesheet" href="{{ asset('css/jadwal.css') }}">
<div class="row">
    <!-- sidebar -->
    @include('layout.sidebar')
    <!-- content -->
    <div class="col-10">
        <div class="row">
            <div class="col-7">
                <h1><b>Jadwal Mengajar Tentor</b></h1>
            </div>
            <div class="col text-center mx-2">
                <a href="#" class="text-decoration-none"><b>Harian</b></a>
            </div>
            <div class="col text-center border border-1 mx-5">
                <a href="#" class="text-decoration-none"><b>Bulanan</b></a>
            </div>
        </div>
        <div class="row tgl">
            <div class="col-9">
                <h6>{{Carbon\Carbon::now()->format('D-d-M-Y')}}</h6>
            </div>
            <div class="col">
                <a href="/tambah_jadwal" class="tmbh_jadwal">+</a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-3 text-white">Sesi Siang</div>
                <div class="col-7"></div>
            </div>
        </div>
    </div>
</div>
@endsection