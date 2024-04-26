<?php
include "koneksi.php";

include "elektronik.php";

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

include "elektronik.php";

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


include "koneksi.php";

$namapembeli = $_GET ["namapembeli"];
$hapus = mysqli_query($conn,"delete from tbelektronik where Nama_Pembeli = '$namapembeli'");

if ($hapus) {
    header("location: ElektronikApp.php");
} else {
    echo "Data gagal dihapus";
}

?>




