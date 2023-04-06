<?php
require "koneksi.php";

$id_buku = $_GET['id_buku'];
$sql = "SELECT * FROM buku WHERE id_buku = '$id_buku'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)):
?>

<!DOCTYPE html>
<head></head>
<body>
    <h2> Edit Data </h2>
    <form action="edit_buku.php" method="POST">
        <input type="hidden" name="id_buku" value="<?=$row['id_buku']?>">
        
        <label for="nama_buku">Nama Buku</label>
        <input type="text" id="nama_buku" name="nama_buku" value="<?=$row['nama_buku']?>"/><br>

        <label for="penulis">Penulis</label>
        <input type="text" id="penulis" name="penulis" value="<?=$row['penulis']?>"/><br>

        <label for="penerbit">Penerbit</label>
        <input type="text" id="penerbit" name="penerbit" value="<?=$row['penerbit']?>"/><br>

        <label for="harga">Harga</label>
        <input type="text" id="harga" name="harga" value="<?=$row['harga']?>"/><br>
        
        <input type="submit" value="simpan"/>
</form>
<?php endwhile ?>
</body>
</html>

