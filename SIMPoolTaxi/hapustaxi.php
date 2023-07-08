<?php

if (isset($_GET['id'])) {


    $kon = mysqli_connect("localhost", "root", "", "simpolltaxi");

    $id = $_GET['id'];

    $cek = mysql_query("SELECT Noplat FROM taxi WHERE Noplat='$id'") or die(mysql_error());

    if (mysql_num_rows($cek) == 0) {

        echo '<script>window.history.back()</script>';
    } else {

        $del = mysql_query("DELETE FROM taxi WHERE Noplat='$id'");

        if ($del) {
            echo "<script>alert('data berhasil dihapus');
    document.location.href='daftartaxi.php'</script>\n";
        } else {
            echo "<script>alert('data gagal dihapus');
    document.location.href='daftartaxi.php'</script>\n";
        }
    }
} else {
    echo '<script>window.history.back()</script>';
}
