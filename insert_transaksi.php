<?php
require "koneksi.php";
$id_buku = $_POST['id_buku'];
$id_pelanggan = $_POST['id_pelanggan'];
$kuantitas = $_POST['kuantitas'];

$query = mysqli_query($conn, "SELECT harga FROM buku WHERE id_buku = '$id_buku'");
while ($row = mysqli_fetch_array($query)):
    $harga = $row['harga'];
    $total_pemabayaran = $_POST['kuantitas']*$row['harga'];

    $sql = "INSERT INTO transaksi VALUES (null, '$id_pelanggan','$id_buku','$kuantitas','$harga','$total_pembayaran')";
    var_dump($sql);
    mysqli_query($conn, $sql);

endwhile;

header("location:data_transaksi.php");
?>