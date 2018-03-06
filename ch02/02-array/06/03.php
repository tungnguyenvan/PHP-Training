<?php
  $course = array("PHP" , "Joomla" , "Zend Framework" , "JQuery");

  function  removeItem(&$array , $type = "first" , $total = 2){
      $result = array();

      if (!empty($array)) {
        if ($type == "first") {
          for ($i=1; $i <= $total; $i++) {
            $result[] = array_shift($array);
          }
        }elseif ($type == "last") {
          $result[] = array_pop($array);
        }
      }

      return $result;
  }

  $arrTemp = removeItem($course, "first" , 2);

  echo "arrItemp : <br/>";
  echo "<pre>";
  print_r($arrTemp);
  echo "</pre>";

  echo "course: <br/>";
  echo "<pre>";
  print_r($course);
  echo "</pre>";

 ?>
