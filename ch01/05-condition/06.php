<!DOCTYPE html>
<html>
<head>
  <title>lấy chòm sao</title>
</head>
<body>

<?php
  $day = "";
  $month = "";
  $images = "";
  $nameEng = "";
  $name = "";
  $time = "";


  //if (isset($_POST["day"] && isset($_POST["month"])) {
    # code...
    $day = $_POST["day"];
    $month = $_POST["month"];

    if (is_numeric($day) && is_numeric($month)) {
      # code...
        switch ($month ) {
          case 1:
            # code...
            if ($day <= 19) {
              # code...
              $images = "http://lichvansu.wap.vn/images/12Cung/cung-ma-ket.png";
              $name = "ma kết";
              $nameEng = "Capricorn";
              $time = " 22/12 – 19/1 ";
            }
            if ($day >= 20) {
              # code...
              $images = "http://lichvansu.wap.vn/images/12Cung/cung-bao-binh.png";
              $name = "Bảo bình";
              $nameEng = "Aquarius";
              $time = " 20/1- 19/2 ";
            }

            break;

          default:
            # code...
            break;
        }
    }
  //}
 ?>

  <div class="content">
    <h1>Lấy chòn sao</h1>
    <form action="#" method="post" name="main-form">
      <div class="row">
        <span>Ngày sinh</span>
        <input type="text" name="day" value="<?php echo $day ?>">
      </div>

      <div class="row">
        <span>Tháng sinh</span>
        <input type="text" name="month" value="<?php echo $month ?>">
      </div>

      <div class="row">
        <input type="submit" name="submit" value="lấy chòm sao">
      </div>
    </form>

   <div class="result">
        <img src="<?php echo $images ?>" alt="<?php echo $images ?>">
        <p> <?php echo $name ?> <span>(<?php echo $nameEng . $time ?>)</span></p>
    </div>

  </div>
</body>
</html>
