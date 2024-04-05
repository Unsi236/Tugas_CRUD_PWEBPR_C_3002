<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Elektroik App</title>
    <link rel="stylesheet" href="styleelektronik.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
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
            <li><i class="fa-solid fa-display"></i>&nbsp;&nbsp;<span>Komputer</span></li>
            <li><i class="fa-solid fa-camera-retro"></i>&nbsp;&nbsp;<span>Kamera</span></li>
            <li><i class="fa-solid fa-mobile-screen-button"></i>&nbsp;&nbsp;<span>Handphone</span></li>
            <li><i class="fa-solid fa-right-from-bracket"></i>&nbsp;&nbsp;<span>Log Out</span></li>
        </ul>
    </div>

    <div class="responsivetable">
        <div class="table_container">
            <h2>History Pembeli</h2>
            <table class="tbl">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pembeli</th>
                        <th>Alamat</th>
                        <th>Nomor Telepon</th>
                        <th>Total Belanja</th>
                        <th colspan="2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Dwi Atikoh</td>
                        <td>Sukowono</td>
                        <td>08962618xxx</td>
                        <td>3.500.000</td>
                        <td>
                            <button class="btn_edit"><iclass="button _dit"><i class="fa-solid fa-pen-to-square"></i>Edit</button>
                        </td>
                        <td>
                            <button class="btn_delete"><iclass="button_delete"><i class="fa-solid fa-trash"></i>Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Ajay Tenggara</td>
                        <td>Sukowono</td>
                        <td>08962618xxx</td>
                        <td>3.500.000</td>
                        <td>
                            <button class="btn_edit"><iclass="button_edit"><i class="fa-solid fa-pen-to-square"></i>Edit</button>
                        </td>
                        <td>
                            <button class="btn_delete"><iclass="button_delete"><i class="fa-solid fa-trash"></i>Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>Intan Andini</td>
                        <td>Jember</td>
                        <td>087012638xxx</td>
                        <td>5.800.000</td>
                        <td>
                            <button class="btn_edit"><iclass="button_edit"><i class="fa-solid fa-pen-to-square"></i>Edit</button>
                        </td>
                        <td>
                            <button class="btn_delete"><iclass="button_delete"><i class="fa-solid fa-trash"></i>Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>04</td>
                        <td>Yasin Nur Aziz</td>
                        <td>Patrang</td>
                        <td>085389018xxx</td>
                        <td>10.000.000</td>
                        <td>
                            <button class="btn_edit"><iclass="button_edit"><i class="fa-solid fa-pen-to-square"></i>Edit</button>
                        </td>
                        <td>
                            <button class="btn_delete"><iclass="button_delete"><i class="fa-solid fa-trash"></i>Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>05</td>
                        <td>Nusa Perdana</td>
                        <td>Bangsalsari</td>
                        <td>08962618xxx</td>
                        <td>7.800.000</td>
                        <td>
                            <button class="btn_edit"><iclass="button_edit"><i class="fa-solid fa-pen-to-square"></i>Edit</button>
                        </td>
                        <td>
                            <button class="btn_delete"><iclass="button_delete"><i class="fa-solid fa-trash"></i>Hapus</button>
                        </td>
                    </tr>
                </tbody>
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
                    <a href="#" class="button plus"><i class="fa-solid fa-plus"></i></a>
                    <a href="#" class="button minus"><i class="fa-solid fa-square-minus"></i></a>
                    <a href="#" class="button edit"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="#" class="button delete"><i class="fa-solid fa-trash"></i></a>
                    <a href="#" class="button account"><i class="fa-solid fa-user"></i></a>
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
