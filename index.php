<?php

require_once "products.php";
require_once "functions.php";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Katalog Motor Custom</title>
</head>

<body>

    <h1>Katalog Motor Custom</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Nama Motor</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Status</th>
            <th>Total Nilai Stok</th>
            <th>Deskripsi</th>
        </tr>

        <?php foreach ($katalog as $motor): ?>

        <tr>
            <td><?= $motor["id"] ?></td>
            <td><?= $motor["nama"] ?></td>
            <td><?= $motor["kategori"] ?></td>
            <td>Rp <?= number_format($motor["harga"], 0, ',', '.') ?></td>
            <td><?= $motor["stok"] ?></td>
            <td><?= cekStokKritis($motor["stok"]) ?></td>
            <td>Rp <?= number_format(hitungTotalNilaiStok($motor["harga"], $motor["stok"]), 0, ',', '.') ?></td>
            <td><?= $motor["deskripsi"] ?></td>
        </tr>

        <?php endforeach; ?>

    </table>

</body>
</html>