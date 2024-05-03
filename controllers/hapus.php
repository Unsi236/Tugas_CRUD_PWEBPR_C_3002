<?php
include "koneksi.php";

$namapembeli = $_GET["namapembeli"];
$hapus = mysqli_query($conn, "DELETE FROM tbelektronik WHERE Nama_Pembeli = '$namapembeli'");

if ($hapus) {
    header("location: ElektronikController.php?deleted=true");
} else {
    echo "Data gagal dihapus";
}
?>
