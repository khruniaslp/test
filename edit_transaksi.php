<?php
require "koneksi.php";
$id_transaksi = $_POST['id_transaksi'];
$id_pelanggan = $_POST['id_pelanggan'];
$id_buku = $_POST['id_buku'];
$kuantitas = $_POST['kuantitas'];

$sql = "SELECT harga from buku WHERE id_buku = '$id_buku'";
var_dump($sql);
$result = mysqli_query($conn, $sql);
echo "<br>";

while ($row = mysqli_fetch_array($result));
      var_dump($row);
      echo "<br>";
      $harga = $row['harga'];
      $total_pembayaran = $POST['kuantitas']*$row['harga'];
      var_dump($total_pembayaran);

      $query = "UPDATE transaksi SET id_pelanggan = '$id_pelanggan', id_buku = '$id_buku', kuantitas = '$kuantitas', harga = '$harga', total_pembayaran = '$total_pembayaran' WHERE id_transaksi = '$id_trasaksi'";
      var_dump($query);
      $hasil = mysqli_query($conn, $query);
      if($hasil){
        header ("location:data_transaksi.php");
      }
    endwhile;
?>