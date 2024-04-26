<?php

$host ='localhost';
$username ='root';
$password = '';
$database = 'dbelektronik';

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Database gagal dikoneksikan". $conn->connect_error);
}

// echo "Koneksi berhasil";