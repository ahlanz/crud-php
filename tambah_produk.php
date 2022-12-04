<?php
require "koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah produk</title>
</head>
<style>
    * {
        font-family: sans-serif;
    }

    h1 {
        text-transform: uppercase;
        color: salmon;
    }

    .base {
        width: 400px;
        padding: 20px;
        margin-left:auto;
        margin-right: auto;
        background-color: #ededed;
        border-radius: 5px;
    }

    label {
        margin-top: 10px;
        float: left;
        text-align: left;
        width: 100%;
    }

    input {
        padding: 6px;
        width: 100%;
        box-sizing: border-box;
        background-color: #f8f8f8;
        border: 2px solid #ccc;
        outline-color: salmon;
    }

    button {
        background-color:  salmon;
        color: #fff;
        padding: 10px;
        font-size: 12px;
        border: 0;
        margin-top: 20px;
        border-radius: 5px;
    }
</style>

<body>
    <center>
        <h1>Tambah produk</h1>
    </center>
    <form action="fungsi_tambah.php" method="POST" enctype="multipart/form-data">
        <section class="base">
            <div>
                <label for="nama_produk">Nama produk :</label>
                <input type="text" name="nama_produk" id="nama_produk" autofocus="" required="">
            </div>
            <div>
                <label for="deskripsi">Deskripsi :</label>
                <input type="text" name="deskripsi" id="deskripsi" autofocus="" required="">
            </div>
            <div>
                <label for="harga">Harga :</label>
                <input type="text" name="harga" id="harga" autofocus="" required="">
            </div>
            <div>
                <label for="gambar_produk">Gambar produk :</label>
                <input type="file" name="gambar_produk" id="gambar_produk" autofocus="" required="">
            </div>
            <div>
                <button type="submit">Simpan</button>
            </div>
        </section>
    </form>
</body>

</html>