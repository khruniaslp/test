<?php 
require 'koneksi.php';

$sql = "SELECT * FROM pelanggan";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<head>
    <title>Data Customer</title>
</head>

<body>
    <a href="form_pelanggan.html">Tambah Data Pelanggan</a>
    <table border="1">
        <tr>
            <th>Id pelanggan</th>
            <th>Nama Pelanggan</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?=$row['id_pelanggan']?></td>
            <td><?=$row['nama_pelanggan']?></td>
            <td><?=$row['alamat']?></td>
            <td> 
                <a href="editform_pelanggan.php?id_pelanggan=<?=$row['id_pelanggan']?>"?>Edit </a>
                <a href="delete_pelanggan.php?id_pelanggan=<?=$row['id_pelanggan']?>"?>Hapus</a>
            </td>            
        </tr>
        <?php endwhile ?>
     </table>
</body>
</html>