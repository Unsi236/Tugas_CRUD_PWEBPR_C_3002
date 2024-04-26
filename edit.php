<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pembeli</title>
    <style type="text/css">
        body{
            background: radial-gradient(#A3D8FF, #003C43);
        }
        h2 {
            text-align: center;
            color: whitesmoke;

        }
        table {
            width: 450px;
            height: 250px;
            border: 10px solid #2C3333;
            background-color: white;
            border-radius: 20px;
        }
        table td,
        input {
            padding: 7px;
            font-size: 18px;
            background: whitesmoke;
        }
        input[type="submit"] {
            width: 45%;
            background: goldenrod;
            border: 1px solid black;
            color: white;
            border-radius: 20px;
        }
        input[type="reset"] {
            width: 45%;
            background: red;
            border: 1px solid black;
            color: white;
            border-radius: 20px;
        }
        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background: transparent;
            color: green;
        }
    </style>
</head>
<body>
    <h2>Form Edit Data Pembeli</h2>

    <!-- <?php
        include "koneksi.php";
        $namapembeli = $_GET ["id"];
        $data = mysqli_query($conn, "select * from tbelektronik where ID_Pembeli='$namapembeli'");
        while ($row = mysqli_fetch_array($data)) {
    ?> -->

    <div class="box">
        <form action= "update.php" method="post">
            <table align="center" >
                <tr>
                    <td><input type="hidden" name="idpembeli" placeholder="ID Pembeli" 
                    value= "<?php echo $row['ID_Pembeli']; ?>" size="11"></td>
                </tr>
                <tr>
                    <td>Nama Pembeli</td>
                    <td><input type="text" name="namapembeli" placeholder="Nama Pembeli" 
                    value= "<?php echo $row['Nama_Pembeli']; ?>"size="11"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" placeholder="Alamat" 
                    value= "<?php echo $row['Alamat']; ?>"size="11"></td>
                </tr>
                <tr>
                    <td>Nomor Telepon</td>
                    <td><input type="text" name="nomortelepon" placeholder="Nomor Telepon" 
                    value= "<?php echo $row['Nomor_Telepon']; ?>"size="11"></td>
                </tr>
                <tr>
                    <td>Total Belanja</td>
                    <td><input type="text" name="totalbelanja" placeholder="Total Belanja" 
                    value= "<?php echo $row['Total_Belanja']; ?>" size="11"></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="edit" value="Edit">
                        <input type="reset" name="batal" value="Batal">
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <?php
    }
    ?>
</body>
</html>