<?php
//in mảng không liên tục
//cách khai báo
  $courses = array("php" => "PHP", "zend" => "Zend Framework", "joomla" => "Joomla", 0 => "Item1", 1 => "Item1");
 /*
  Array
      (
          [php] => PHP
          [zend] => Zend Framework
          [joomla] => Joomla
          [0] => Item1
          [1] => Item1
      )
 */
  foreach ($courses as $key => $value) {
      echo $key . " : " . $value . "<br/>";
  }

 ?>
