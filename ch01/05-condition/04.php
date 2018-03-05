<!DOCTYPE html>
<html>
<head>
  <title>Mô phỏng máy tính điện tử</title>
  <link rel="stylesheet" type="text/css" href="style.css" media="screen">
</head>
<body>
<?php
  $number1 = "";
  $number2 = "";
  $caculate = "";
  $result = "";

  if(isset($_POST["number1"]) && isset($_POST["number2"]) && isset($_POST["caculate"])){

  $number1 = $_POST["number1"];
  $number2 = $_POST["number2"];
  $caculate = $_POST["caculate"];
  switch ($caculate){
    case "+":
      $result = $number1 + $number2;
    break;
    default;

    break;
  }
}
?>

  <div class="content">
    <h1>Mô phỏng máy tính điện tử</h1>
    <form action="#" method="post" name="main_form">
      <div class="row">
        <span>Số thứ nhất:</span>
        <input type="text" name="number1" value="<?php echo $number1; ?>">
      </div>

      <div class="row">
        <span>Phép toán:</span>
        <input type="text" name="caculate" value="<?php echo $caculate; ?>">
      </div>

      <div class="row">
        <span>Số thứ hai:</span>
        <input type="text" value="<?php echo $number2; ?>">
      </div>

      <div class="row">
        <input type="submit" name="xem kết quả">
      </div>

      <div class="row">
        <p>kết quả: <?php echo $result; ?></p>
      </div>
    </form>
  </div>
</body>
</html>
