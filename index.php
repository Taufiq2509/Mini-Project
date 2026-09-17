<?php
/**
 * PRESENTATION LAYER
 * -------------------
 * File ini bertugas menyatukan Data Layer (products.php) dan
 * Processing Layer (functions.php), lalu merender hasilnya ke tabel HTML.
 *
 * Blueprint (Mini Project 1 - Desain):
 * - require_once 'products.php'  -> ambil data produk
 * - require_once 'functions.php' -> ambil fungsi pengolahan data
 * - Looping (foreach) data produk untuk membangun baris tabel
 * - Baris dengan stok kritis (< 3) ditandai/diberi warna berbeda
 * - Menampilkan total nilai aset gudang hasil hitungTotalNilaiStok()
 *
 */

require_once 'products.php';
require_once 'functions.php';

$totalNilaiStok = hitungTotalNilaiStok($products);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Product Information System</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 24px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #333; padding: 8px 12px; text-align: left; }
        th { background-color: #f0f0f0; }
        tr.stok-kritis { background-color: #ffe0e0; }
        tr.stok-kritis td.stok { color: #b00020; font-weight: bold; }
        .total-aset { margin-top: 16px; font-size: 1.1em; }
    </style>
</head>
<body>
    <h1>Data Produk</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $produk): ?>
                <?php $kritis = isStokKritis($produk['stok'] ?? 0); ?>
                <tr class="<?= $kritis ? 'stok-kritis' : '' ?>">
                    <td><?= htmlspecialchars($produk['id'] ?? '') ?></td>
                    <td><?= htmlspecialchars($produk['nama'] ?? '') ?></td>
                    <td><?= htmlspecialchars($produk['kategori'] ?? '') ?></td>
                    <td><?= formatRupiah($produk['harga'] ?? 0) ?></td>
                    <td class="stok"><?= htmlspecialchars($produk['stok'] ?? '') ?><?= $kritis ? ' ⚠️' : '' ?></td>
                    <td><?= htmlspecialchars($produk['deskripsi'] ?? '') ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <p class="total-aset"><strong>Total Nilai Aset Gudang:</strong> <?= formatRupiah($totalNilaiStok) ?></p>
</body>
</html>
