<?php
require 'functions.php';
$person = query("SELECT * FROM person_41");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Dua - Nazla</title>
</head>

<body>
    <h1>Data Person</h1>
    <a href="tambah.php"> Tambah Data Mahasiswa</a>
    <table>
        <tr>
            <th>No</th>
            <th>IdPerson</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>control</th>
        </tr>
        <?php $i = 1;  ?>
        <?php foreach ($person as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["idPerson"] ?></td>
                <td><?= $row["nama"] ?></td>
                <td><?= $row["alamat"] ?></td>
                <td>
                    <a href="edit.php?id=<?= $row["idPerson"]; ?>">Edit</a>
                    <a href="profile.php?id=<?= $row["idPerson"]; ?>">profile</a>
                    <a href="hapus.php?id=<?= $row["idPerson"]; ?>" onclick="return confirm ('yakin?');">hapus</a>
                    <button>Active</button>
                </td>
                
                
            </tr>
            <?php $i++ ?>
        <?php endforeach; ?>

    </table>
</body>

</html>