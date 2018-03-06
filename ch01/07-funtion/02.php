<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <title></title>
</head>
<body>
  <div class="content">
    <?php
    function createBox(){
      $value = '<div style="width: 200px; height: 50px">';
      $value .= '<p>box A<span>(300x200)</span></p>';
      $value .= '</div>';

      return $value;
      }

      $result = createBox();
      echo $result;
    ?>

    </div>
  </div>
</body>
</html>
