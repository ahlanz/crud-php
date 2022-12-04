<?php 
require "koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud produk makanan</title>
</head>
<style>
    * {
        font-family: sans-serif;
    }
    h1 {
        text-transform: uppercase;
        color: salmon;
    }
    table {
        border: 1px solid grey;
        border-collapse: collapse;
        border-spacing:0;
        width: 70%;
        margin: 10px auto 10px auto;

    }

    table thead th {
        background-color: #ddefef;
        border:1px solid #ddeeee;
        color: #336b6b;
        text-align: left;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }

    table tbody td {
        border: 1px solid #ddeeee;
        color: #333;
        padding: 10px;
    }

    a {
        background-color: salmon;
        color: #fff;
        padding: 10px;
        font-size: 12px;
        text-decoration: none;
        border-radius: 5px;
    }

</style>
<body>
    <center><h1>Data produk</h1></center>
    <center><a href="tambah_produk.php">+ &nbsp; Tambah Produk</a></center>
    <br>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Produk</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $query = "SELECT * FROM produk ORDER BY id ASC";
                $result = mysqli_query($conn,$query);

                if (!$result) {
                    die("query eror :".mysqli_errno($conn)."-". mysqli_errno($conn));

                }
                $no = 1;

                while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row['nama_produk']; ?></td>            
                <td><?php echo substr($row['deskripsi'],0,20); ?>...</td>            
                <td>Rp<?php echo number_format($row['harga'],0,',','.'); ?></td>
                <td><img style="width: 100px;" src="img/"<?php echo $row['gambar_produk']; ?>></td>
                <td>
                    <a href="edit_produk.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <a href="edit_produk.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
                </td>            
            </tr>
            <?php 
            $no++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>