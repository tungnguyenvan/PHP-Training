<?php


  $courses = array("PHP", "zend framework", "joomla");

if (!empty($courses)) {
  for ($i=0; $i < count($courses) ; $i++) {
    # code...
    echo $courses[$i] . "<br/>";
  }
}
 ?>
