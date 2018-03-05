<?php
    /*
    echo $_POST["email"];
    echo "<br/>";
    echo $_POST["pass"];
    */
    /* dùng biến $_REQUEST  để có thể nhận được cả post lẫn get*/

    $userName = $_POST["email"];
    $password = $_POST["pass"];

    $result = ($userName == "admin@gmail.com" && $password == "123456")
    ? "đăng nhập thành công" : "Đăng nhập thất bại" ;

    echo $result;
  ?>
