<?php


  $courses = array("PHP", "zend framework", "joomla");

  echo "<pre>";
  print_r($courses);
  echo "</pre>";

  if (!empty($courses)) {
    foreach ($courses as $key => $value) {
      echo $value . " <br/>";
    }
  }
 ?>
