<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db = "crud_php";

$conn = mysqli_connect($host,$user,$pass,$db);

if (!$conn) {
    die("koneksi database gagal:".mysqli_connect_error());

}

?>