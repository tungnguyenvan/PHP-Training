<?php

  /* để biết biên được lưu giá trị thuộc kiểu dữ liệu nào thì ta có 2 cách
      * sử dụng hàm gettype()
      * sử dụng hàm var_dump() */

  $firsName = "John";
  $number = 12;

  var_dump($firsName); //==>string(4) "John" : kiểu string và độ dài 4 kí tự
  echo gettype($number); //==> integer : sẽ trả về kiểu của biến (lưu ý: phải echo ra mới xem được)
 ?>
