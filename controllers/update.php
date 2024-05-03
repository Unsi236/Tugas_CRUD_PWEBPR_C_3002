<?php

include "koneksi.php";

$idpembeli = $_POST["idpembeli"];
$namapembeli = $_POST["namapembeli"];
$alamat = $_POST["alamat"];
$nomortelepon = $_POST["nomortelepon"];
$totalbelanja = $_POST["totalbelanja"];
$gambarpembeli = $_FILES["gambarpembeli"];


if(isset($_FILES['gambarpembeli']) && $_FILES['gambarpembeli']['name'] != "elektronikapp.php") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg', 'webp');
    $x = explode('.', $_FILES["gambarpembeli"]['name']);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES["gambarpembeli"]['tmp_name'];
    $angka_acak = rand(1, 999);
    $nama_gambar_baru = $angka_acak.'-'.$_FILES["gambarpembeli"]['name'];

    if (in_array($ekstensi, $ekstensi_diperbolehkan)) {
        if (move_uploaded_file($file_tmp, 'images/'.$nama_gambar_baru)) {
            $query = "UPDATE tbelektronik SET Nama_Pembeli='$namapembeli', Alamat='$alamat', Nomor_Telepon='$nomortelepon', Total_Belanja='$totalbelanja', Gambar_Barang='$nama_gambar_baru' WHERE ID_Pembeli='$idpembeli'";
            $result = mysqli_query($conn, $query);

            if (!$result) {
                echo "Gagal memperbarui data!";
            } else {
                header("location: ElektronikApp.php");
            }
        } else {
            echo "Gagal mengunggah file gambar!";
        }
    } else {
        echo "<script>alert('Ekstensi gambar hanya bisa digunakan jpg dan png');window.location='ElektronikApp.php';</script>";
    }
} else {

    $query = "UPDATE tbelektronik SET Nama_Pembeli='$namapembeli', Alamat='$alamat', Nomor_Telepon='$nomortelepon', Total_Belanja='$totalbelanja' WHERE ID_Pembeli='$idpembeli'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo "Gagal memperbarui data!";
    } else {
        header("location: ElektronikApp.php");
    }
}
