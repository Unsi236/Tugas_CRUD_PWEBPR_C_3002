<?php

include "koneksi.php";

// $idpembeli = $_POST["idpembeli"];
$namapembeli = $_POST["namapembeli"];
$alamat = $_POST["alamat"];
$nomortelepon = $_POST["nomortelepon"];
$totalbelanja = $_POST["totalbelanja"];

$simpan = mysqli_query($conn,"insert into tbelektronik(Nama_Pembeli, Alamat, Nomor_Telepon, Total_Belanja) values ('$namapembeli', '$alamat', '$nomortelepon', '$totalbelanja')");

if ($simpan){
    header("location:ElektronikApp.php");
}   else {
    header("location:tambah.php"); 
}