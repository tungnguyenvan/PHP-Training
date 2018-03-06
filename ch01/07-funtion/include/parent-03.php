<?php

  include ("child.php");
  include_once ("child.php"); //khi kéo file nào đó vào file hiện tại nó sẽ kiểm tra xem file đó đã được kéo vào
  //chưa, nếu file đó đã được kéo vào thì sẽ được kéo vào, và nếu kéo rồi thì thôi
  echo "parent file";
 ?>
