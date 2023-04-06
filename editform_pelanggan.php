<?php
require "koneksi.php";

$id_pelanggan = $_GET['id_pelanggan'];
$sql = "SELECT * FROM pelanggan WHERE id_pelanggan='$id_pelanggan'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)):
?>

<!DOCTYPE html>
<head></head>
<body>
    <h2> Edit Data Pelanggan </h2>
    <form action="edit_pelanggan.php" method="POST">
        <input type="hidden" id="id_pelanggan" name="id_pelanggan" value="<?=$row['id_pelanggan']?>">
        <br>
        <label for="nama_pelanggan">Nama Pelanggan</label>
        <input type="text" id="nama_pelanggan" name="nama_pelanggan" value="<?=$row['nama_pelanggan']?>"/><br>
        <label for="alamat">Alamat</label>
        <input type="text" id="alamat" name="alamat" value="<?=$row['alamat']?>"/><br>
        <input type="submit" value="simpan"/>
</form>
<?php endwhile ?>
</body>
</html>

