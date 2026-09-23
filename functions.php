<?php
// File: functions.php

// Fungsi kalkulasi nilai aset gudang
function hitungTotalNilaiStok($harga, $stok) {
    return $harga * $stok;
}

// Fungsi conditional untuk warna baris jika stok kritis (< 3)
function cekStatusStok($stok) {
    if ($stok < 3) {
        return "style='background-color: #ffcccc;'"; // Memberikan warna merah muda pada baris
    }
    return ""; // Baris normal jika stok >= 3
}
?>