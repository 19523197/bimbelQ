<div class="col-2 sticky-top">
    <img src="/IMG/logo.png" alt="Image Logo" class="img-fluid w-50">
    <h5><a href="/dashboard" class="link {{ ($title === "dashboard") ? 'text-primary' : '' }}">Dashboard</a></h5>
    <h5><a href="/jadwal" class="link {{ ($title === "jadwal") ? 'text-primary' : '' }}">Jadwal Kegiatan</a></h5>
    <h5><a href="/presensi_private" class="link {{ ($title === "presensi") ? 'text-primary' : '' }}">Presensi</a></h5>
    <h5><a href="/tagihan_siswa" class="link {{ ($title === "tagihan") ? 'text-primary' : '' }}">Tagihan Siswa</a></h5>
    <h5><a href="/gaji" class="link {{ ($title === "gaji") ? 'text-primary' : '' }}">Gaji Tentor</a></h5>
    <!-- logout -->
    <form action="/logout" method="post">

        @csrf
        <button type="submit" class="mt-lg-5">Logout</button>
    </form>
</div>