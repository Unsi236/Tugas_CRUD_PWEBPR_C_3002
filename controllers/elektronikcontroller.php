<?php
require_once "model/rental.php";
require_once "function/function.php";
require_once "config/database.php";

class elektronikcontroller {

  public function create(){
    global $url;
    $data = rental::insert($_POST["namapembeli"], $_POST["alamat"], $_POST["nomortelepon"], $_POST["totalbelanja"]);
    header("Location:".$url."/ElektronikApp");
  }

  public function update($id){
    global $url;
    $data = rental::update($id,$_POST["Nama_Pembeli"],$_POST["Alamat"],$_POST["Nomor_Telepon"],$_POST["Total_Belanja"]);
    header("Location:".$url."/ElektronikApp");
  }

  public function delete($id){
    global $url;
    $data = rental::hapus($id);
    header("Location:".$url."/ElektronikApp");
  }

  public function insertpage(){
    loadView('insertpage');
  }
  public function updatepage(){
    loadView('updatepage');
  }
  public function login(){
    loadView('updatepage');
  }
  public function register(){
    loadView('updatepage');
  }
}


