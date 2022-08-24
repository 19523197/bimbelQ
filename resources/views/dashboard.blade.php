@extends('layout.main')

@section('container')

    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

    <div class="row">
        <!-- sidebar -->
        @include('layout.sidebar')
        <!-- content -->
        <div class="col-10">
            <h3>Selamat Datang, Bos Bimbel Q</h3>
            <div class="container">
                <div class="card tentor">
                    <div class="card-body">
                      <h6 class="card-title">Jumlah Tentor</h6>
                      <h3 class="card-text">5 Tentor Tersedia</h3>
                    </div>
                  </div>
                  <div class="card tentor">
                    <div class="card-body">
                      <h6 class="card-title">Siswa yang terdaftar di BimbelQ</h6>
                      <h3 class="card-text">250 Siswa</h3>
                    </div>
                  </div>
                  <div class="card gaji">
                    <div class="card-body">
                      <h6 class="card-title">Total Gaji Tentor</h6>
                      <h3 class="card-text">Rp. 2.500.000</h3>
                    </div>
                  </div>
                  <div class="card gaji">
                    <div class="card-body">
                      <h6 class="card-title">Total Tagihan Siswa</h6>
                      <h3 class="card-text">Rp. 2.500.000</h3>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    
@endsection