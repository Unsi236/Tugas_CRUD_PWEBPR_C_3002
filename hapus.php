<?php
include "koneksi.php";

$namapembeli = $_GET ["namapembeli"];
$hapus = mysqli_query($conn,"delete from tbelektronik where Nama_Pembeli = '$namapembeli'");

if ($hapus) {
    header("location: ElektronikApp.php");
} else {
    echo "Data gagal dihapus";
}

?>