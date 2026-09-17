# Mini-Project 1: Product Information System

Tugas mata kuliah **Pemrograman Web — Pertemuan 2**.

## Tujuan

Merancang dan mengimplementasikan sistem manajemen data informasi produk
berbasis PHP, menggunakan pendekatan 3 lapis arsitektur.

## Struktur Berkas

| Berkas | Lapisan | Isi |
|---|---|---|
| `products.php` | Data Layer | Multidimensional array data komoditas produk (ID, Nama, Kategori, Harga, Stok, Deskripsi) |
| `functions.php` | Processing Layer | `hitungTotalNilaiStok()` dan logika conditional penanda stok kritis (< 3) |
| `index.php` | Presentation Layer | Merakit kedua lapisan dengan `require_once`, merender tabel HTML lewat `foreach` |

## Cara Menjalankan

Dengan PHP built-in server:

```bash
php -S localhost:8000
```

Lalu buka `http://localhost:8000` di browser.

Atau letakkan folder ini di `htdocs` (XAMPP) / `www` (Laragon), lalu buka
`http://localhost/Mini-Project 1/`.

## Aturan Tampilan

- Stok di bawah 3 unit: baris ditandai **oranye** dengan status **"Segera restock"**.
- Stok 0: baris ditandai **merah** dengan status **"Habis"**.

## Status

- [x] Desain arsitektur (blueprint)
- [x] Implementasi Data Layer, Processing Layer, Presentation Layer
- [x] Perhitungan total nilai aset gudang
- [x] Penanda stok kritis
- [ ] Fitur tambahan (pencarian, sorting, form tambah produk) — menyusul jika diminta
