<?php 
$kon=mysqli_connect("localhost","root","","aplikasisampel1");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tabel Program Studi</title>
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


<div class="container mt-3">
  <div class="row">
   <h2 class="col-sm-4">Driver</h2>
   <div class="col-sm-8">
   
   </div>
  </div> 
  <form action="" method="post">
  <div class="mb-3">
      <label for="nosim">No sim</label>
      <input type="text" class="form-control" id="nosim" placeholder="Enter no sim" name="nosim">
    </div>
    <div class="mb-3">
      <label for="namadriver">Nama driver</label>
      <input type="text" class="form-control" id="namadriver" placeholder="Enter nama drive" name="namadriver">
    </div>
    <div class="mb-3">
      <label for="noplat">No plat</label>
      <input type="text" class="form-control" id="noplat" placeholder="Enter no plat" name="noplat">
    </div>
    <div class="mb-3">
      <label for="tanggalmulaipakai">Tanggal mulai pakai</label>
      <input type="date" class="form-control" id="tanggalmulaipakai" placeholder="Enter tanggal mulai" name="tanggalmulaipakai">

    </div>
    <div class="mb-3">
      <label for="tanggalkembali">Tanggal kembali</label>
      <input type="date" class="form-control" id="tanggalkembali" placeholder="Enter tanggal kembali" name="tanggalkembali">
    </div>
    
    <div class="mb-3">
      <label for="totalpendapatan">Total pendapatan</label>
      <input type="text" class="form-control" id="totalpendapatan" placeholder="Enter total pendapatan" name="totalpendapatan">
    </div>

    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
  </form>
  <iframe name="frmhasil" width="100%" height="400px"></iframe>
 
</div>

<?php if (isset($_POST['simpan'])) {

$kon = mysqli_connect("localhost", "root", "", "simpolltaxi");

$NoSim = $_POST['nosim'];
$NamaDrive = $_POST['namadriver'];
$NoPlat = $_POST['noplat'];
$TanggalMulaiPakai = $_POST['tanggalmulaipakai'];
$TanggalKembali = $_POST['tanggalkembali'];
$TotalPendapatan = $_POST['totalpendapatan'];

$sql = "insert into driver (nosim,namadriver,noplat,tanggalmulaipakai,tanggalkembali,totalpendapatan) values ('" . $NoSim  . "','" . $NamaDrive . "','" . $NoPlat . "','" . $TanggalMulaiPakai ."','" . $TanggalKembali . "','" . $TotalPendapatan . "')";
$q = mysqli_query($kon, $sql);

if ($sql) {
  echo "<script>alert('data berhasil disimpan');
document.location.href='driver.php'</script>\n";
} else {
  echo "<script>alert('data gagal disimpan');
document.location.href='nyewaruko.php'</script>\n";
}
}
?>


</body>
</html>
