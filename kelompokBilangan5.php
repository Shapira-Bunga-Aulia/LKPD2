<?php
    $bill1 = [80, 77, 65, 89, 55, 12, 90, 86];
    $bill2 = [77, 99, 55, 81, 45, 90, 98,];
    
    $common_numbers = array_intersect($bill1, $bill2);
    $different_numbers = array_merge(array_diff($bill1, $bill2), array_diff($bill2, $bill1));

    echo" <b>Bilangan yang ada di kedua variabel</b> <br>". implode(", ", $common_numbers);
    echo"<br><br><b>Bilangan yang tidak ada di kedua variabel</b> <br>". implode(", ", $different_numbers);
?>
