<?php
require_once "env.php";

// $app_name = $_ENV['APP_NAME'];
$url = $env['BASEURL'];
$host = $env['DB_HOST'];
$username = $env['DB_USER'];
$password = $env['DB_PASS'];
$database = $env['DB_NAME'];

// var_dump($env); // Menampilkan seluruh isi dari $_ENV

try {
    $conn = new mysqli($host, $username, $password, $database);
} catch (\Throwable $e) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>



<!-- // $host ='localhost';
// $username ='root';
// $password = '';
// $database = 'dataelektronik';

// $conn = new mysqli($host, $username, $password, $database);
// if ($conn->connect_error) {
//     die("Database gagal dikoneksikan". $conn->connect_error);
// }

// // echo "Koneksi berhasil"; -->