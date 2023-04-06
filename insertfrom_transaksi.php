<?php
require "koneksi.php";

$result_pelanggan = mysqli_query($conn, "SELECT id_pelanggan, nama_pelanggan FROM pelanggan");
$result_buku = mysqli_query($conn, "SELECT id_buku, nama_buku, harga FROM buku");
$options_pelanggan = mysqli_fetch_array($result_pelanggan, MYSQLI_ASSOC);
$options_buku = mysqli_fetch_array($result_buku, MYSQLI_ASSOC);
?>
<DOCTYPE html>
<head></head>
<body>
<form action="insert_transaksi.php" method="post">
    <label for="nama_pelanggan">Nama Pelanggan</label><br>
    <select name="id_pelanggan" id="nama_pelanggan">
        <option disabled selected>pilih nama pelanggan..</option>
        <?php foreach ($options_pelanggan as $option) { ?>
        <option value="<? =$option['id_pelanggan']?>"><?= $option['nama_pelanggan']?></option>
        <?php } ?>
     </select><br> 
     <label for="nama_buku">nama buku</label><br>
    <select name="id_buku" id="nama_buku">
        <option disabled selected>pilih nama buku..</option>
        <?php foreach ($options_buku as $option) { ?>
        <option value="<? =$option['id_buku']?>"><?= $option['nama_buku'] . '' . "-Rp " . $option['harga']?></option>
        <?php } ?>
    </select><br> 
    <label for="kuantitas">kuantitas</label><br>
    <input type="number" name="kuantitas" id="kuantitas"/></br>
    <input type="submit" value="simpan" class="button4">
</form>
</body>
</html>

    
    

