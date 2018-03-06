<?php
  $course = array("PHP" , "Joomla" , "Zend Framework" , "JQuery");

  echo "<pre>";
  print_r($course);
  echo "</pre>";

  $firstItem = array_shift($course); //loại bỏ phần tử đầu tiên trong mảng, và sau khi xóa sẽ trả lại phần tử cuối cùng đó
  echo $lastItem;
 ?>
