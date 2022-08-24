<div class="col-2">
    <img src="/IMG/logo.png" alt="Image Logo" class="img-fluid w-50">
    <h5><a href="/dashboard" class="link {{ ($title === "dashboard") ? 'text-primary' : '' }}">Dashboard</a></h5>
    <h5><a href="#" class="link {{ ($title === "jadwal") ? 'text-primary' : '' }}">Jadwal Kegiatan</a></h5>
    <h5><a href="/presensi_privat" class="link {{ ($title === "presensi") ? 'text-primary' : '' }}">Presensi</a></h5>
    <h5><a href="#" class="link {{ ($title === "tagihan") ? 'text-primary' : '' }}">Tagihan Siswa</a></h5>
    <h5><a href="#" class="link {{ ($title === "gaji") ? 'text-primary' : '' }}">Gaji Tentor</a></h5>
    <!-- logout -->
    <form action="/logout" method="post">

        @csrf
        <button type="submit" class="mt-lg-5">Logout</button>
    </form>
</div>