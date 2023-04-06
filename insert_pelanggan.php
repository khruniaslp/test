 <?php
require "koneksi.php";

    $nama_pelanggan = $_POST['nama_pelanggan'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO pelanggan VALUES ('', '$nama_pelanggan', '$alamat')";
    
    mysqli_query($conn, $sql );
    header("location: data_pelanggan.php");
?>