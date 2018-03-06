<?php
  //mảng không liên tục
  $courses = array();
  $courses["php"] = "PHP";              //key: php
  $courses["zend"] = "Zend framework";  //key: zend
  $courses["joomla"] = "joomla";        //key" joomla
  $courses[] = "item 1";                //key: 0
  $courses[] = "item 1";                //key: 1

  echo "<pre>";
  print_r($courses);
  echo "</pre>";

  /*
  Array
(
    [php] => PHP
    [zend] => Zend framework
    [joomla] => joomla
    [0] => item 1
    [1] => item 1
)
  */

  echo $courses["zend"];
 ?>
