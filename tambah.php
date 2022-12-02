<?php 

require "functions.php";
// cek apakah tombol submit sudah diteken atau belum

if (isset($_POST["submit"])) {
    

    // cek apakah data berhasil ditambahkan
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
            alert('data Gagal ditambahkan');
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
    <title>tambah data makanan</title>
</head>

<body>
    <h1>Tambah data makanan</h1>

    <form action="#" method="post">
        <ul>
            <li>
                <label for="nama">Nama makanan :</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="jenis">Jenis :</label>
                <input type="text" name="jenis" id="jenis" required>
            </li>
            <li>
                <label for="harga">harga :</label>
                <input type="text" name="harga" id="harga">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah data</button>
            </li>
        </ul>
    </form>
</body>

</html>