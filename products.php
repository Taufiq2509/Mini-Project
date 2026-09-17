<?php
/**
 * DATA LAYER
 * -----------
 * File ini bertugas sebagai "sumber data" untuk aplikasi Product Information System.
 *
 * Blueprint (Mini Project 1 - Desain):
 * - Menyimpan data produk dalam bentuk array multidimensional.
 * - Setiap produk memiliki atribut:
 *      - ID          : Identitas unik produk
 *      - Nama        : Nama produk
 *      - Kategori    : Kategori/jenis produk
 *      - Harga       : Harga satuan produk
 *      - Stok        : Jumlah stok tersedia di gudang
 *      - Deskripsi   : Keterangan singkat produk
 *
 * Catatan:
 * - File ini TIDAK melakukan proses perhitungan atau tampilan (murni data).
 */

$products = [
    [
        'id'        => 1,
        'nama'      => 'Beras Premium 5kg',
        'kategori'  => 'Sembako',
        'harga'     => 65000,
        'stok'      => 12,
        'deskripsi' => 'Beras putih kualitas premium, kemasan 5kg.',
    ],
    [
        'id'        => 2,
        'nama'      => 'Minyak Goreng 2L',
        'kategori'  => 'Sembako',
        'harga'     => 32000,
        'stok'      => 2,
        'deskripsi' => 'Minyak goreng kemasan botol 2 liter.',
    ],
    [
        'id'        => 3,
        'nama'      => 'Gula Pasir 1kg',
        'kategori'  => 'Sembako',
        'harga'     => 15000,
        'stok'      => 20,
        'deskripsi' => 'Gula pasir putih kemasan 1kg.',
    ],
    [
        'id'        => 4,
        'nama'      => 'Telur Ayam 1kg',
        'kategori'  => 'Bahan Segar',
        'harga'     => 28000,
        'stok'      => 1,
        'deskripsi' => 'Telur ayam negeri segar, timbangan 1kg.',
    ],
    [
        'id'        => 5,
        'nama'      => 'Kopi Sachet (Renceng)',
        'kategori'  => 'Minuman',
        'harga'     => 12000,
        'stok'      => 30,
        'deskripsi' => 'Kopi instan sachet, isi 10 per renceng.',
    ],
    [
        'id'        => 6,
        'nama'      => 'Mie Instan Goreng',
        'kategori'  => 'Makanan Instan',
        'harga'     => 3500,
        'stok'      => 0,
        'deskripsi' => 'Mie instan rasa goreng per bungkus.',
    ],
];
