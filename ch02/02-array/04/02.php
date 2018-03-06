<?php

  //quản lý thông tin sinh viên
  //sv1 : name, sex, scorce

  $student = array(
      "SV001" => array("name" => "John",
                        "sex" => 1,
                        "scorce" => array(4,5,6)),
      "SV002" => array("name" => "Peter",
                        "sex" => 1,
                        "scorce" => array(5,6,7)),
      "SV003" => array("name" => "Marry",
                        "sex" => 0,
                        "scorce" => array(7,8,9))
                  );

   echo "<pre>";
   print_r($student);
   echo "</pre>";

 ?>
