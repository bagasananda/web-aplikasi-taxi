<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sim poll</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="Driver.php" target="frutama">Driver</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="taxi.php" target="frutama">Taxi</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Daftar Data</a>
          <ul class="dropdown-menu">

            <li><a class="nav-link" href="daftartaxi.php" target="frutama">Daftar Taxi</a>
            <li><a class="nav-link" href="daftartaxi.php" target="frutama">Daftar Driver</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="container-fluid">
                    <div class="card">
                        <div class="card-body">


<TR>
                                <thead>
                                    <table class="table table-bordered table">
                                        <thead class="thead-dark">
                                        </thead>
                                        <tbody>
                                            <p>
                                                <tr class="table-active" align="center">

                                                <tr>
                                                    <th>No</th>
                                                    <th>No Sim </th>
                                                    <th>Nomor Driver </th>
                                                    <th>No Plat</th>
                                                    <th>Tanggal Mulai Pakai</th>
                                                    <th>Tanggal Kembali</th>
                                                    <th>Total Pendapatan</th>

                                                    <th>Aksi</th>
                                                </tr>
                                </thead>


                                <?php
                                //panggil koneksi kedatabase
                                $kon = mysqli_connect("localhost", "root", "", "simpolltaxi");
                                $sql = "select * from driver";
                                $q = mysqli_query($kon, $sql);
                                $data = mysqli_fetch_array($q);
                                $no = 1;
                                do {

                                    //menampilkan hasil row diatas
                                    echo '<tr>';
                                    echo '<td>' . $no . '</td>';
                                    echo '<td>' . $data['NoSIM'] . '</td>';
                                    echo '<td>' . $data['NamaDriver'] . '</td>';
                                    echo '<td>' . $data['NoPlat'] . '</td>';
                                    echo '<td>' . $data['TanggalMulaiPakai'] . '</td>';
                                    echo '<td>' . $data['TanggalKembali'] . '</td>';
                                    echo '<td>' . $data['TotalPendapatan'] . '</td>';


                                    echo '<td><a href="editcari.php?id=' . $data['NoSIM'] . '" class="btn btn-warning btn-md">Edit</a> &nbsp; <a href="hapuscari.php?id=' . $data['NoSIM'] . '" onclick="return confirm(\'Apakah Anda Yakin Ingin Menghapus Data Ini?\')" class="btn btn-danger btn-md">Hapus</a></td>';
                                    //menampilkan link edit dan hapus

                                    echo '</tr>';

                                    $no++; //menambah jumlah nomor urut

                                } while ($data = mysqli_fetch_array($q));
                                ?>




                                </table>
                        </div>
                    </div>
                </div>




                </td>
                </tr>



                
</body>
</html>


