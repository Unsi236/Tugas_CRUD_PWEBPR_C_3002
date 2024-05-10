<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Elektronik App</title>
    <!-- <link rel="stylesheet" href="stylelogin.css"> -->
    <link rel="stylesheet" href="styleelek.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    .tabel {
        margin: 0 auto; /* Menengahkan tabel */
    }

    h4 {
    width: 710px;
    text-align: justify;
}

h4 a {
    padding: 10px;
    color: white;
    background: limegreen;
    border: 1px solid black;
    text-decoration: none;
}

h4 a:hover {
    background: transparent;
    color: black;
}
</style>
<body>
    <div class="beranda">
        <div class="heading">
            <i class="fa-solid fa-laptop-medical"></i> &nbsp;&nbsp;
            <h2>Rental Elektronik</h2>
        </div>
        <div class="headingowner">
            <i class="fa-solid fa-user"></i> &nbsp;&nbsp;
            <h3>Unsiyatul Muhtaromah</h3>
        </div>
        <ul>
            <li><i class="fa-solid fa-gauge-high"></i>&nbsp;&nbsp;<span>Dashboard</span></li>
            <li class="tombol-tambah"> <a href="tambahdata.php"><i class="fa-solid fa-plus"></i>&nbsp;&nbsp;<span>Tambah Data History</span></a></li>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <li><a href="index.php"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;&nbsp;<span>Log Out</span></a></li>
        </ul>
    </div>

    <div class="responsivetable">
        <div class="table_container">
            <h2>History Pembeli</h2>
            <br>
            <h4><a href="tambahdata.php"><i class="fa-solid fa-plus"></i>&nbsp;&nbsp;Tambah Data History</a></h4>
            <br>
            <table align="center" class="tbl">
                <thead> 
                    <tr>
                        <th>No</th>
                        <th>Nama Pembeli</th>
                        <th>Alamat</th>
                        <th>Nomor Telepon</th>
                        <th>Total Belanja</th>
                        <th>Gambar Barang</th>
                        <th colspan="2">Aksi</th>
                    </tr>
                    <?php
                    include "../config/database.php";
                    $no=1;
                    $data = mysqli_query($conn,"select * from tbelektronik");
                    while ($row = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['Nama_Pembeli']; ?></td>
                        <td><?php echo $row['Alamat']; ?></td>
                        <td><?php echo $row['Nomor_Telepon']; ?></td>
                        <td><?php echo $row['Total_Belanja']; ?></td>
                        <td><img style="width: 200px;" src="images/<?php echo $row['Gambar_Barang']; ?>"></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['ID_Pembeli']; ?>"><i class="fa-solid fa-pen-to-square"></i>&nbsp;&nbsp;Edit</a> ||
                            <a href="hapus.php?namapembeli=<?php echo $row['Nama_Pembeli']; ?>"  onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><i class="fa-solid fa-trash"></i>&nbsp;&nbsp;Hapus</a>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </thead>
            </table>
        </div>
    </div>
    
    <div class="container">
        <div class="header">
            <div class="navbar">
                <div class="search">
                    <input type="text" placeholder="pencarian...">
                    <button type="submit"><i class="fa-brands fa-searchengin"></i></button>
                </div>
                <div class="user">
                    <!-- <a href="#" class="button plus"><i class="fa-solid fa-plus"></i></a>
                    <a href="#" class="button minus"><i class="fa-solid fa-square-minus"></i></a>
                    <a href="#" class="button edit"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="#" class="button delete"><i class="fa-solid fa-trash"></i></a>
                    <a href="#" class="button account"><i class="fa-solid fa-user"></i></a> -->
                </div>
            </div>
        </div>
        <div class="body-content">
            <div class="card">
                <img src="image/komputer.png">
                <div class="card-content">
                    <h3>Komputer</h3>
                    <h4>Second Mulus</h4>
                    <p>Banyak Tersedia piihan buat kamu yang butuh komputer dalam waktu cepat dengan budget yang pas pasan</p>
                    <a href="" class="btn">Cek Sekarang</a>
                </div>
            </div>
            <div class="card">
                <img src="image/kamera.png">
                <div class="card-content">
                    <h3>Kamera</h3>
                    <h4>ORI Anyar</h4>
                    <h4>Second Mulus</h4>
                    <p>Banyak Tersedia piihan buat kamu yang butuh kameradalam waktu cepat dengan budget yang pas pasan</p>
                    <a href="" class="btn">Cek Sekarang</a>
                </div>
            </div>
            <div class="card">
                <img src="image/handphone.png">
                <div class="card-content">
                    <h3>Handphone</h3>
                    <h4>ORI Anyar</h4>
                    <h4>Second Mulus</h4>
                    <p>Banyak Tersedia piihan buat kamu yang butuh handphone dalam waktu cepat dengan budget yang pas pasan</p>
                    <a href="" class="btn">Cek Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
