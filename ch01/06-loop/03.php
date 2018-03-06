<!DOCTYPE html>
<html>
<head>
  <title>Vẽ tam giá</title>
</head>
<body>
  <div class="content">
    <h1>Vẽ tam giá</h1>

    <a href="03.php?type=1">01</a>
    <a href="03.php?type=2">02</a>
    <a href="03.php?type=3">03</a>
  </div>
  <div class="result">
    <?php
      echo str_repeat("0", 10) . "<br/>"; //hàm cho phép lặp lại một kết quả trong bao nhiêu lần
      if (isset($_GET["type"])) {
        # code...
        echo $type = $_GET["type"];
        switch ($type) {
          case 1:
            # code...
          /*
              *   i-1
              **  i=2
              *** i=3
          */
          $i = 1;
          while ($i <= 6) {
            # code...
          $result = str_repeat("*", $i);
          $i++;
          echo $result . "<br/>";
          }
            break;
          case 2:
            # code...
          $i = 6;
          while ($i >= 1 ) {
            # code...
            $result = str_repeat("*", $i);
            $i--;
            echo $result . "<br/>";
          }
            break;
            case 3:
              # code...
            $i = 1;
            $n = 6;
            while ($i <= $n) {
              # code...
              $space = str_repeat("&nbsp;", $n - $i);
              $character = str_repeat("*", 2*$i - 1);
              $result = $space . $character;
              $i++;
              echo $result . "<br/>";
            }
              break;
          default:
            # code...
            break;
        }
      }
     ?>
  </div>
</body>
</html>

