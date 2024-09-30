<?php
// Fungsi untuk membandingkan panjang nama dua orang
function bandingkanNama($nama1, $nama2) {
    // Hilangkan spasi dari nama dan hitung panjangnya
    $panjangNama1 = strlen($nama1); // Hitung panjang $nama1 tanpa spasi
    $panjangNama2 = strlen($nama2); // Hitung panjang $nama2 tanpa spasi

    // Hitung selisih mutlak antara dua panjang
    $selisih = abs($panjangNama1 - $panjangNama2);

    // Bandingkan panjang dan cetak hasilnya
    if ($panjangNama1 != $panjangNama2) {
        // Gunakan operator ternary untuk mencetak pesan yang benar berdasarkan nama yang lebih panjang
        echo ($panjangNama1 > $panjangNama2) ? 
            "$nama1 memiliki jumlah karakter lebih banyak dari $nama2 : selisih $selisih karakter" :
            "$nama2 memiliki jumlah karakter lebih banyak dari $nama1 : selisih $selisih karakter";
    } else {
        // Jika panjangnya sama, cetak pesan bahwa mereka sama
        echo "$nama1 dan $nama2 memiliki jumlah karakter yang sama.";
    }
}

// Contoh penggunaan
$nama1 = "Shapira Bunga Aulia";
$nama2 = "Ayu Sekar Azzkya";

// Cetak nama
echo "nama pertama : " . $nama1 . "<br>";
echo "nama kedua : " . $nama2 . "<br>";

// Panggil fungsi untuk membandingkan nama
bandingkanNama($nama1, $nama2);
?>