<?php
  $number = 10;
  $result = "";
  if ($number >= 0 && $number%2 == 0) {
    # code...
    $result = "Nguyên dương chẵn";
  }elseif ($number >= 0 && $number%2 != 0) {
    # code...
    $result = "nguyên dương lẻ";
  }elseif ($number < 0 && $number%2 == 0) {
    # code...
    $result = "nguyên âm chẵn";
  }else{
    $result = "nguyên âm lẻ";
  }

  echo $result;
?>
