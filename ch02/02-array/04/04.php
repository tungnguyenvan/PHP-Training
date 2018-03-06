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

  $scorce = array(6,7,8);


  // xuất thông tin sinh viên gồm name, sex, và tổng điểm các môn trong scorce
   //john - boy - 15
   //peter - boy - 18

   if (!empty($student)) {
     foreach ($student as $key => $value) {
       $name = $value["name"];
       $sex = ($value["sex"]==1) ? "Boy" : "Girl";
       $scorce = $value["scorce"];

       $total = array_sum($scorce); // hàm tính tổng các phần tử trong mảng

        echo "name: " . $name . "- Sex: " . $sex . "- Scorce: " . $total . "<br/>";
     }
   }

 ?>
