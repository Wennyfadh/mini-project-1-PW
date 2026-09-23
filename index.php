<?php
// File: index.php
require_once 'products.php';
require_once 'functions.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Product Information System</title>
</head>
<body>
    <h2>Katalog Data Gudang</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID Produk</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Harga Satuan (Rp)</th>
                <th>Stok</th>
                <th>Deskripsi</th>
                <th>Total Nilai Aset (Rp)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($katalogProduk as $produk): ?>
                <!-- Pengecekan kondisi stok kritis untuk mengubah warna baris -->
                <tr <?php echo cekStatusStok($produk['stok']); ?>>
                    <td><?php echo $produk['id']; ?></td>
                    <td><?php echo $produk['nama']; ?></td>
                    <td><?php echo $produk['kategori']; ?></td>
                    <td><?php echo number_format($produk['harga'], 0, ',', '.'); ?></td>
                    <td><?php echo $produk['stok']; ?></td>
                    <td><?php echo $produk['deskripsi']; ?></td>
                    <td>
                        <?php 
                        // Memanggil fungsi hitungTotalNilaiStok
                        $totalNilai = hitungTotalNilaiStok($produk['harga'], $produk['stok']);
                        echo number_format($totalNilai, 0, ',', '.');
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>