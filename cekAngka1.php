<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="text">Text :</label>
        <input type="text" id="text" name="text">
        <input type="submit" name="submit" value="cekAngka">
    </form>
    <?php 
      if($_SERVER ['REQUEST_METHOD'] == "POST") {
        $text = $_POST['text'];
        $numbers = preg_replace('/\D/', '', $text);
        if ($numbers !== '') {
            $numberA = str_split($numbers);

            $formattedNumbers = implode(', ', $numberA);
            echo "Text Mengandung Angka: $formattedNumbers";
        } else {
            echo "Text TIDAK Mengandung Angka.";
        }
      }
    ?>
</body>
</html>