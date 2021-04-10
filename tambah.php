<?php

require 'functions.php';

if (isset($_POST["submit"])) {
    // cek apakah data berhasil ditambahkan atau tidak. 
    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal ditambahkan');
            document.location.href = 'index.php';
        </script>
        ";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST"  enctype="multipart/form-data">
            <div class="formfield">
                <label for="idperson">idPerson</label>
                <input type="text" name="idPerson" id="idPerson">
            </div>
            <div class="formfield">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama">
            </div>
           
            <div class="formfield">
                <label for="">Gender</label>
                <input type="radio" id="lakilaki" name="gender" value="lakilaki">
                <label for="lakilaki">Laki-Laki</label>
                <input type="radio" id="perempuan" name="gender" value="perempuan">
                <label for="perempuan">Perempuan</label>
            </div>
            <div class="formfield">
                <label for="kotaLahir">Kota Lahir</label>
                <input type="text" name="kotaLahir" id="kotaLahir">
            </div>
            <div class="formfield">
                <label for="tanggalLahir">Tanggal Lahir:</label>
                <input type="date" id="tanggalLahir" name="tanggalLahir">
            </div>
            <div class="formfield">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat">
            </div>
            <div class="formfield">
                <label for="kota">Kota</label>
                <input type="text" name="kota" id="kota">
            </div>
            <div>
                <label for="gambar"> Gambar : </label>
                <input type="file" name="gambar" id="gambar">
            </div>
            <button type="submit" name="submit">Submit Data</button>

    </div>

    </form>

    </div>
</body>

</html>