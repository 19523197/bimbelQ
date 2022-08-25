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
            <div class="col text-center border border-1 mx-5">
                <a href="/presensi_reguler" class="text-decoration-none">Reguler</a>
            </div>
            <div class="col text-center  mx-5">
                <a href="/presensi_private" class="text-decoration-none">Privat</a>
            </div>
        </div>

        <div class="card mt-5 border border-dark border-3 rounded">
            
            <form action="/presensi_reguler/{{ $jadwal->id }}/presensi" method="post" class="p-5">
                <h2 class="mb-4">Reguler</h2>
                @csrf

                <h6>Nama Mentor : {{ $jadwal->mentor->name }}</h6>
                <h6>Sesi : {{ $jadwal->jamsesi->nama_sesi }} </h6>
                <input type="hidden" name="mentor_id" id="mentor_id" value="{{ $jadwal->mentor->id }}">

                <h6>Jam Masuk Mentor : <input type="time" name="tanggal" id="tanggal" ></h6>
                <input type="hidden" value="{{ $jadwal->id }}" name="jadwal_id" id="jadwal_id">
               <h5 class="mt-5">Siswa</h5>
                <table class="table table-hover table-lg justify-content-center">
                    <thead>
                      <tr class="table-dark">
                        <th scope="col" style="width: 5%">No</th>
                        <th scope="col" style="width: 85%">Nama</th>
                        <th scope="col" style="width: 10%">Hadir</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($siswas as $siswa)
                        <tr>
                          <th scope="row">{{ $loop->index + 1}}</th>
                          <td>{{ $siswa->name }}</td>
                          <td >
                              <input class="form-check-input " type="checkbox" value="{{ $siswa->id }}" name="hadir[]" id="flexCheckDefault">
                              </td>
                          
                        </tr>
                      @endforeach
                      
                    </tbody>
                  </table>

                <input type="submit">
            </form>
        </div>
    </div>
</div>
@endsection