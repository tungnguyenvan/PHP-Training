<?php

  $courses = array();
  $courses[] = "PHP";
  $courses[] = "Zend framework";
  $courses[] = "joomla";

  $length = count($courses); //hàm count trả về độ dài mảng
  echo $length;

//kiểm tra mảng rỗng
  // C1: length
  if ($length > 0) {
    echo "Không phải là mảng rỗng";
  }else{
    echo "mảng rống";
  }

  // C2: empty
  if (!empty($courses)) {
    echo "Không phải là mảng rống";
  }else{
    echo "mảng rỗng";
  }

 ?>
