# Product Information System

Ini adalah Mini Project 1 dari materi "Pemrograman Web: PHP Fundamental & Data Structure". Proyek ini merupakan purwarupa sistem informasi manajemen produk sederhana yang mendemonstrasikan konsep dasar pemrosesan *server-side*, manajemen data *array multidimensi*, dan desain *modular* pada PHP.

## 🏗️ Struktur Proyek (Arsitektur Desain Konseptual)

Proyek ini mengadopsi prinsip pemisahan logika (*Separation of Concerns*) menjadi tiga lapisan utama:

1. **Data Layer (`products.php`)**
   Berfungsi sebagai basis data konseptual (pengganti database nyata). File ini menyimpan *multidimensional array* yang memuat daftar komoditas produk beserta atributnya (ID, Nama, Kategori, Harga, Stok, dan Deskripsi).

2. **Processing Layer (`functions.php`)**
   Pusat logika dan operasi aplikasi (*helper functions*). File ini berisi dua fungsi utama:
   - `hitungTotalNilaiStok($harga, $stok)`: Mengalkulasi total nilai aset gudang dari setiap produk.
   - `cekStatusStok($stok)`: Logika *conditional* untuk menandai dan mengubah warna baris (*highlight* merah muda) pada antarmuka tabel jika stok barang sedang kritis (kurang dari 3).

3. **Presentation Layer (`index.php`)**
   Lapisan antarmuka pengguna (UI). File ini bertugas merajut file *Data Layer* dan *Processing Layer* menggunakan fungsi `require_once`. Data kemudian dirender secara dinamis ke dalam *layout* tabel HTML menggunakan perulangan `foreach`.

## 🚀 Panduan Instalasi dan Menjalankan Proyek

1. **Persiapan Lingkungan (Environment):**
   Pastikan Anda memiliki *local web server* yang mendukung PHP (seperti XAMPP, MAMP, Laragon, atau PHP Built-in Server).
2. **Penempatan File:**
   Buat folder baru bernama `product-information-system` di dalam direktori root server Anda (misalnya: `htdocs` untuk XAMPP, atau `www` untuk Laragon).
3. **Salin File:**
   Pastikan ketiga file (`products.php`, `functions.php`, dan `index.php`) berada di dalam satu folder tersebut.
4. **Jalankan Aplikasi:**
   Buka peramban web (browser) dan akses URL proyek Anda, contohnya: 
   `http://localhost/product-information-system/index.php`

## 📚 Konsep PHP Fundamental yang Diterapkan

Proyek ini menjadi wadah praktik langsung dari berbagai materi teori PHP:
- **Variabel & Tipe Data Array:** Penggunaan *Associative* dan *Multidimensional Array* untuk merepresentasikan skema tabel data.
- **Modular Programming:** Penggunaan `require_once` untuk menghindari penumpukan kode pada satu file serta menghindari pemanggilan file ganda.
- **Control Flow:** Penggunaan `foreach` untuk iterasi atau *traversal* array secara aman.
- **Logic & Conditionals:** Penggunaan `if-statement` untuk memeriksa batas aman stok produk dan merender class/style HTML secara dinamis.
- **Fungsi (Function):** Penerapan *Single Responsibility Principle* dalam membuat fungsi perhitungan dan logika presentasi.

## 🛠️ Pengembangan Lanjutan (Opsional)

Sebagai bahan latihan dan eksplorasi lanjutan, Anda dapat mengembangkan proyek ini dengan:
- Menerapkan fungsi bawaan manipulasi string (seperti `strtoupper` untuk ID Produk).
- Menambahkan perhitungan ringkasan (Total seluruh item di gudang, Grand Total Aset Gudang) di bagian *footer* tabel.
- Mengganti array mentah ini dengan koneksi *database* nyata seperti MySQL di masa depan.