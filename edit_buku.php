<?php
require "koneksi.php";
$id_buku = $_POST['id_buku'];
$nama_buku = $_POST['nama_buku'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$harga = $_POST['harga'];


$sql = "UPDATE buku SET nama_buku ='$nama_buku' , penulis ='$penulis' , penerbit ='$penerbit' , harga='$harga' WHERE id_buku ='$id_buku'";

$result = mysqli_query($conn, $sql);
if ($result) {
    echo "<script>
           alert('Edit Berhasil');
           location.href = 'data_buku.php';
           </script>";
} else {
    echo "<script>
    alert('Edit Gagal');
    location.href = 'data_buku.php';
    </script>";
}
