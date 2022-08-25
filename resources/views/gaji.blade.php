<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Gaji Tentor</title>

    <link rel="stylesheet" href="{{ asset('css/gaji.css') }}" />

    <!-- link bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="row">
      <!-- sidebar -->
     @include('layout.sidebar')
      <!-- content -->
      <div class="col-10">
        <h3>Daftar Gaji Tentor</h3>
        <h6>Bulan Agustus 2022</h6>
        <div class="container">
          <!-- tabel -->
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama Tentor</th>
                <th scope="col">Total Gaji Tentor</th>
                <th scope="col">Status Gaji Tentor</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Rashid Adani Maulana Jatri</td>
                <td>Rp 2.500.000</td>
                <td>Belum dibayar</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Muhammad Riko Bediatra</td>
                <td>Rp 1.000.000</td>
                <td>Belum dibayar</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Muhammad Fachri Ramadhan</td>
                <td>Rp 1.000.000</td>
                <td>Belum dibayar</td>
              </tr>
            </tbody>
          </table>
          <div class="tombol">
            <button type="button" class="btn">
                <img src="/IMG/panah kiri.png" alt="panah ke kiri">
                Bulan Sebelumnya
            </button>
            <button type="button" class="btn">
                <img src="/IMG/panah kanan.png" alt="panah ke kanan">
                Bulan Selanjutnya
            </button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
