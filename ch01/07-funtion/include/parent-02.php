<?php

  //cach 2: dùng include
  //chức năng của nó là kéo file nào đó vào file của chúng ta

  include ("child.php");
  echo "parent file";


//include và require có sự khác nhau: nếu
  //require và truyền vào đường dấn không đúng, nó sẽ thông báo lỗi và không chạy tiếp
  //còn include và truyền vào đường dẫn không đúng, nó sẽ thông báo lỗi và vẫn chạy các câu lệnh dưới
 ?>
