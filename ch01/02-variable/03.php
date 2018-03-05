<?php
    /* muốn ép kiểu thì ta dùng settype()
     */
    $number = 12.34;
    echo $number;
    echo "<br/>";
    echo (int)$number; //ép kiểu theo cách 1

    echo "<br/>";
    echo $number;
    settype($number, "integer"); //ép kiểu theo cách 2
    echo "<br/>";
    echo $number;
 ?>
