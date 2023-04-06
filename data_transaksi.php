<?php 
require "koneksi.php";

$sql = "SELECT transaksi.id_transaksi, transaksi.kuantitas, transaksi.harga, transaksi.total_pembayaran, pelanggan.id_pelanggan, pelanggan.nama_pelanggan, buku.id_buku, buku.nama_buku FROM pelanggan INNER JOIN transaksi on pelanggan.id_pelanggan = transaksi.id_pelanggan INNER JOIN buku ON buku.id_buku = transaksi.id_buku ORDER by id_transaksi";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<head>
</head>

<body>
    <a href="insertform_transaksi.php" class="button3">Tambah Data Transaksi</a>
    <table border="1">
        <tr>
            <th>Id Transaksi</th>
            <th>Nama Pelanggan</th>
            <th>Nama Buku</th>
            <th>Qty</th>
            <th>Harga</th>
            <th>Total Harga</th>
            <th class="aksi">Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_array($result)): 
            $total_pembayaran = $row['kuantitas']*$row['harga'] 
        ?> 
        <tr>
            <td class="center-align"><?=$row['id_transaksi']?></td>
            <td><?=$row['nama_pelanggan']?></td>
            <td><?=$row['nama_buku']?></td>
            <td><?=$row['kuantitas']?></td>
            <td><?=$row['harga']?></td>
            <td><?=$total_pembayaran ?></td>
            <td class="center-align"> 
                <a href="editform_transaksi.php?id_transaksi=<?=$row['id_transaksi']?>" ?>Edit </a>
                <a href="delete_transaksi.php?id_transaksi=<?=$row['id_transaksi']?>" ?>Hapus</a>
            </td>
        </tr>
        <?php endwhile ?>
     </table>
</body>
</html>