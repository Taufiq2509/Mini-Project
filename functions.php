<?php
/**
 * PROCESSING LAYER
 * -----------------
 * File ini bertugas mengolah data dari products.php (Data Layer)
 * sebelum ditampilkan oleh index.php (Presentation Layer).
 *
 * Blueprint (Mini Project 1 - Desain):
 * - hitungTotalNilaiStok(): menghitung total nilai aset gudang
 *     (harga x stok, dijumlahkan untuk seluruh produk).
 * - Logika kondisional untuk menandai/menyoroti baris produk
 *     yang stoknya kritis (stok < 3).
 *
 */

/**
 * Menghitung total nilai aset gudang dari seluruh produk.
 *
 * @param array $products Data produk dari Data Layer (products.php)
 * @return float Total nilai stok (harga x stok, dijumlahkan)
 */
function hitungTotalNilaiStok(array $products): float
{
    $total = 0;
    foreach ($products as $produk) {
        $harga = $produk['harga'] ?? 0;
        $stok  = $produk['stok'] ?? 0;
        $total += $harga * $stok;
    }
    return $total;
}

/**
 * Menentukan apakah suatu produk berada dalam kondisi stok kritis.
 *
 * @param int $stok Jumlah stok produk
 * @return bool true jika stok < 3 (kritis), false jika aman
 */
function isStokKritis(int $stok): bool
{
    return $stok < 3;
}

/**
 * Format angka menjadi format Rupiah untuk tampilan.
 *
 * @param float $angka
 * @return string
 */
function formatRupiah(float $angka): string
{
    return 'Rp' . number_format($angka, 0, ',', '.');
}
