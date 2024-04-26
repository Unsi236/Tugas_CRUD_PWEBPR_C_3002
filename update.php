<?php

include "koneksi.php";

$idpembeli = $_POST["idpembeli"];
$namapembeli = $_POST["namapembeli"];
$alamat = $_POST["alamat"];
$nomortelepon = $_POST["nomortelepon"];
$totalbelanja = $_POST["totalbelanja"];

$update = mysqli_query($conn,"update tbelektronik set Nama_Pembeli='$namapembeli', Alamat='$alamat', Nomor_Telepon='$nomortelepon', Total_Belanja='$totalbelanja' where ID_Pembeli='$idpembeli'"); 

if ($update){
    header("location:ElektronikApp.php");
}   else {
    header("location:edit.php"); 
}