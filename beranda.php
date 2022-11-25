<?php

$nama = $_POST['nama'];

echo "<h1>Welcome $nama";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="kotak">
        <center>
            <?php 
            $email = $_POST['email'];
            echo "<h4>$email</h4>";
            ?>  
            <br>
            <?php 
            $nohp = $_POST['nohp'];
            echo "<h4>$nohp</h4>";
            ?>
            <br>
            <?php 
            $tgl = $_POST['tgl'];
            echo "<h4>$tgl</h4>";
            ?>
            <br>
            <?php  
            $jk = $_POST['jk'];
            if ($jk == "Laki laki"){
                echo ("Laki laki");
            } else {
                echo ("Perempuan");
            }
            ?>
            <br>
        <?php 
        if ($_POST){
            $jurusan = $_POST['jurusan'];
            if ($jurusan == "Teknik Informatika")
            {
                $harga = "Rp 2.000.000";
                $jurusan = "Teknik Informatika";
            }
            else if ($jurusan == "Ilmu Pendidikan"){
                $harga = "Rp 1.750.000";
                $jurusan = "Ilmu Pendidikan";
            }
            else if ($jurusan == "Hukum"){
                $harga = "Rp 2.400.000";
                $jurusan = "Hukum";
            }
            else if ($jurusan == "Kedoteran"){
                $harga = "Rp 3.500.000";
                $jurusan = "Kedoteran";
            }
            else {
                $harga = "Eror, Silahkan pilih salah satu jurusan!";
            }
            echo ("Jurusan : $jurusan");
            
        }
            ?>
            <br>
            <?php 
            echo ("Biaya : $harga");
            ?>
        </center>

    </div>
</body>
</html>