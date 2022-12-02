<?php
require "functions.php";


// ambil data dari tabel makanan / query makanan
$makanan = query("SELECT id,nama,jenis,harga,gambar FROM produk");



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin Warmingup</title>
</head>

<body>
    <h1>Daftar makanan</h1>
    <a href="tambah.php">
        tambah data makanan
    </a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Harga</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($makanan as $mkn) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="#">Ubah</a>
                    |
                    <a href="hapus.php?id=<?= $mkn = ["id"]; ?>" onclick="return confirm('yakin?');">Hapus</a>
                </td>
                <td><img src="./img/<?= $mkn = ["gambar"]; ?>" alt="katsu" width="80px"></td>
                <td><?= $mkn = ["nama"]; ?></td>
                <td><?= $mkn = ["jenis"];  ?></td>
                <td><?= $mkn = ["harga"];  ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>