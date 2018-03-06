<?php
//biến scorse dùng để lưu trữ thông tin của các môn học
  $scorse = array("name" => "PHP" , "time" => "200");

  echo "<pre>";
  print_r($scorse);
  echo "</pre>";


  //nếu chỉ muốn lấy value của mảng thì ta dùng hàm array_value
  $newArray = array_values($scorse); // khi gọi hàm này nó sẽ lấy danh sách các giá trị của mảng và nó sẽ trả về một mảng mới

  echo "<pre>";
  print_r($newArray);
  echo "</pre>";
 ?>
