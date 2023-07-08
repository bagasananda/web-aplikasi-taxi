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
   <h2 class="col-sm-4">Taxi</h2>
   <div class="col-sm-8">
   
   </div>
  </div> 
  <form action="" method="post">
  <div class="mb-3">
      <label for="noplat">No Plat</label>
      <input type="text" class="form-control" id="noplat" placeholder="Enter no plat" name="noplat">
    </div>
    <div class="mb-3">
      <label for="nomesin">No Mesin</label>
      <input type="text" class="form-control" id="nomesin" placeholder="Enter no mesin" name="nomesin">
    </div>
    <div class="mb-3">
      <label for="hargadasarpool">Harga Dasar Pool</label>
      <input type="text" class="form-control" id="hargadasarpool" placeholder="Enter harga pool" name="hargadasarpool">
    </div>
    <div class="mb-3">
      <label for="statustaxi">Status Taxi</label>
      <input type="text" class="form-control" id="statustaxi" placeholder="Enter status taxi" name="statustaxi">
    </div>
   
    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
  </form>
  <iframe name="frmhasil" width="100%" height="400px"></iframe>

</div>

<?php if (isset($_POST['simpan'])) {

$kon = mysqli_connect("localhost", "root", "", "simpolltaxi");

$Noplat = $_POST['noplat'];
$Nomesin = $_POST['nomesin'];
$HargaDasarPool = $_POST['hargadasarpool'];
$StatusTaxi = $_POST['statustaxi'];

$sql = "insert into taxi (noplat,nomesin,hargadasarpool,statustaxi) values ('" . $Noplat  . "','" . $Nomesin . "','" . $HargaDasarPool . "','" . $StatusTaxi . "')";
$q = mysqli_query($kon, $sql);

if ($sql) {
  echo "<script>alert('data berhasil disimpan');
document.location.href='daftartaxi.php'</script>\n";
} else {
  echo "<script>alert('data gagal disimpan');
document.location.href='nyewaruko.php'</script>\n";
}
}
?>

</body>
</html>
