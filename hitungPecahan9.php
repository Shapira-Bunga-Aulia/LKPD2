<?php
function hitungPecahanUang($jumlah) {
    $pecahan = [
        1000000, 500000, 200000, 100000, 50000, 20000, 10000, 5000, 2000, 1000, 500
    ];

    $hasil = [];
    $sisa_jumlah = $jumlah;
    foreach ($pecahan as $nilai) {
        $jumlah_lembar = floor($sisa_jumlah / $nilai);
        if ($jumlah_lembar > 0) {
            $hasil["Rp. " . number_format($nilai, 0, ',', '.')] = $jumlah_lembar;
            $sisa_jumlah -= $nilai * $jumlah_lembar; 
        }
    }

    return $hasil;
}

$jumlah = 140500;
$pecahan = hitungPecahanUang($jumlah);

echo "Uang: Rp. " . number_format($jumlah, 0, ',', '.') . "<br>";
echo "Lembaran Rupiah:<br>";
foreach ($pecahan as $deskripsi => $jumlah_lembar) {
    echo "$deskripsi : $jumlah_lembar<br>";
}
?>