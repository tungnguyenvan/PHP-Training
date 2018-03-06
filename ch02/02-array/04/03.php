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

   //tên của sv002
   echo "<pre>";
   print_r($student["SV002"]);
   echo "</pre>";

   //xuất thông tin name của sv002
   echo $student["SV002"]["name"] . "<br/>"; // ===> Peter

   //xuất điểm môn thứ 2 của sv003
   echo $student["SV003"]["scorce"][1] . "<br/>"; //===> 8

   //thay đổi tên của sv003 thành anne
   $student["SV003"]["name"] = "Anne";

   //thay đổi điểm của sv003 môn thứ 2 thành 10
   $student["SV003"]["scorce"][2] = 10;
   echo "<pre>";
   print_r($student);
   echo "</pre>";


 ?>
