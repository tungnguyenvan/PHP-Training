<?php
  $number = -10;


  $resultFirst = ($number >= 0) ? "nguyên dương" : "nguyên âm";
  $resultLast = ($number % 2 == 0) ? "chẵn" : "lẻ";

  $result = $resultFirst . " " . $resultLast;
  echo $result;
?>
