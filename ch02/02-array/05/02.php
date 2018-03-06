<?php
//biến scorse dùng để lưu trữ thông tin của các môn học
  $scorse = array("name" => "PHP" , "time" => "200");

  echo "<pre>";
  print_r($scorse);
  echo "</pre>";


  //nếu chỉ muốn lấy value của mảng thì ta dùng hàm array_value
  $newArray = array_keys($scorse); //hàm sẽ lấy tất cả các key của biến và truyền vào biến mới

  echo "<pre>";
  print_r($newArray);
  echo "</pre>";
 ?>
