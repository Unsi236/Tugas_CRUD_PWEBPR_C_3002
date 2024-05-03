<?php

include "koneksi.php";

// $idpembeli = $_POST["idpembeli"];
$namapembeli = $_POST["namapembeli"];
$alamat = $_POST["alamat"];
$nomortelepon = $_POST["nomortelepon"];
$totalbelanja = $_POST["totalbelanja"];
$gambarpembeli = $_FILES["gambarpembeli"];

if ($_FILES['gambarpembeli']['name'] != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg', 'webp');
    $x = explode('.', $_FILES['gambarpembeli']['name']);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambarpembeli']['tmp_name'];
    $angka_acak = rand(1, 999);
    $nama_gambar_baru = $angka_acak.'-'.$_FILES['gambarpembeli']['name'];

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, 'images/'.$nama_gambar_baru);

        $_query = "INSERT INTO tbelektronik (Nama_Pembeli, Alamat, Nomor_Telepon, Total_Belanja, Gambar_Barang) VALUES ('$namapembeli', '$alamat', '$nomortelepon', '$totalbelanja', '$nama_gambar_baru')";
        $_result = mysqli_query($conn, $_query);

        if (!$_result) {
            echo "Gagal menambahkan data!";
        } else {
            header("location: ElektronikApp.php");
        }
    } else {
        echo "<script>alert('Ekstensi gambar hanya bisa digunakan jpg dan png');window.location='ElektronikApp.php';</script>";
    }
}

// $simpan = mysqli_query($conn,"insert into tbelektronik(Nama_Pembeli, Alamat, Nomor_Telepon, Total_Belanja, Gambar_Pembeli) values ('$namapembeli', '$alamat', '$nomortelepon', '$totalbelanja', '$gambarpembeli')");

// if ($simpan){
//     header("location:ElektronikApp.php");
// }   else {
//     header("location:tambah.php"); 
// }