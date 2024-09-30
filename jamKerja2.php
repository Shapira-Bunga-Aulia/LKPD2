<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jam Kerja</title>
</head>
<body>
        <form action="" method="post">
            <input type="number" name="jamkerja" min="0" step="1" required><br><br>
            <input type="submit" name="submit" value="Submit">
            <!-- <input type="reset" name="reset" value="Reset"> -->
        </form>
        <?php
if(isset($_POST['submit'])) {
    $jam = intval($_POST['jamkerja']);
    $uanglembur = 50000;
    
    if ($jam <= 8) {
        // Tidak ada lembur
        echo "Anda tidak lembur, Jam kerja = $jam Jam";
    } else {
        // Menghitung jumlah jam lembur dan uang lembur
        $totaljamlembur = $jam - 8;
        $uanglemburlanjutan = ($totaljamlembur - 1) * 25000;
        $total = $uanglembur + $uanglemburlanjutan;
        
        echo "Lama Kerja : $jam Jam <br>";
        echo "Jam Lebih : $totaljamlembur Jam <br>";
        echo "Uang lembur : Rp " . number_format($total, 0, ',', '.');
    }
}
?>
</body>
</html>