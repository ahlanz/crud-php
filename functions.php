<?php 
// koneksi database
$conn = mysqli_connect("localhost","root","","db-warmingup");


function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


// fungsi tambah
function tambah($data){
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $jenis = htmlspecialchars( $data["jenis"]);
    $harga = htmlspecialchars($data["harga"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO produk
                VALUES
                ('','$nama','$jenis','$harga','$gambar')
                ";

    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);

}

// fungsi hapus


function hapus($id) {
    global $conn;
    $query = "DELETE FROM produk where id= $id";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

?>