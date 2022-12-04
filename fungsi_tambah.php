<?php 
require "koneksi.php";

$nama_produk = $_POST['nama_produk'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$gambar_produk = $_FILES['gambar_produk']['name'];


if ($gambar_produk != ""){
    $ekstensi_diperbolehkan = array('png','jpg');
    $x = explode('.', $gambar_produk);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar_produk']['tmp_name'];
    $angka_acak = rand(1,999);
    $nama_gambar_baru = $angka_acak. '-'. $gambar_produk;

    if(in_array($ekstensi,$ekstensi_diperbolehkan)=== true){
        move_uploaded_file($file_tmp,'gambar/'. $nama_gambar_baru);

        $query = "INSERT INTO produk (nama_produk,deskripsi,harga,gambar_produk) VALUES ('$nama_produk','$deskripsi','$harga','$nama_gambar_baru')";

        $result = mysqli_query($conn , $query);

        if (!$result) {
            die("query eror :".mysqli_errno($conn)."-". mysqli_errno($conn));
        } else {
            echo "<script>alert('data berhasil ditambah');window.location='index.php';</script>";
        }

    } else {
        echo "<script>alert('Ekstensi gambar hanya bisa jpg,jpeg dan png!');window.location='tambah_produk.php';</script>";
    }

} else {
    $query = "INSERT INTO produk (nama_produk,deskripsi,harga) VALUES ('$nama_produk','$deskripsi','$harga')";

    $result = mysqli_query($conn , $query);

    if (!$result) {
        die("query eror :".mysqli_errno($conn)."-". mysqli_errno($conn));
    } else {
        echo "<script>alert('data berhasil ditambah');window.location='index.php';</script>";
    }

}



?>