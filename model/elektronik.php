<?php
require 'config/database.php';
//include "database.php";

class rental {
    //Fungsi untuk menambah data
    static function insert($namapembeli, $alamat, $nomortelepon, $totalbelanja) {
        global $conn;
        $simpan = mysqli_query($conn,"insert into tbelektronik(Nama_Pembeli, Alamat, Nomor_Telepon, Total_Belanja) values ('$namapembeli', '$alamat', '$nomortelepon', '$totalbelanja')");
        
        return $simpan; //Mengembalikan nilai keberhasilan operasi
    }

    //Fungsi untuk mengupdate data
    static function update($idpembeli, $namapembeli, $alamat, $nomortelepon, $totalbelanja) {
        global $conn;
        $update = mysqli_query($conn,"update tbelektronik set Nama_Pembeli='$namapembeli', Alamat='$alamat', Nomor_Telepon='$nomortelepon', Total_Belanja='$totalbelanja' where ID_Pembeli='$idpembeli'");
        return $update;//Mengembalikan nilai keberhasilan operasi
    }

    //Fungsi untuk menghapus data
    static function hapus($namapembeli) {
        global $conn;
        $hapus = mysqli_query($conn,"delete from tbelektronik where Nama_Pembeli = '$namapembeli'");
        return $hapus; //Mengembalikan nilai keberhasilan operasi
    }
} 

?>




