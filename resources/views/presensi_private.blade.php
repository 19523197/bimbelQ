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
                <input type="text" class="form-control mb-2">

                <label for="">Sesi</label>
                <input type="text" class="form-control mb-2">

                <label for="">Murid</label>
                <input type="text" class="form-control mb-2">

                <input type="submit">
            </form>
        </div>
    </div>
</div>
@endsection