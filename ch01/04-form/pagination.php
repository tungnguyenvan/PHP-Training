<!DOCTYPE html>
<html>
<head>
  <title>đây là page pagination</title>
  <style type="text/css">

  .content {
    margin: 10px auto;
    width: 800px;
    text-align: center;
    border: 1px solid #dfd;
    border-radius: 5px;
    padding: 20px;
  }

  </style>
</head>
<body>
  <h1>đây là trang pagination</h1>
  <div class="content">
    <div id="tnt_pagination">
      <span class="disable_tnt_pagination">Prev</span>
      <a href="pagination.php?page=1">1</a>
      <a href="pagination.php?page=2">2</a>
      <a href="pagination.php?page=3">3</a>
      <a href="pagination.php?page=4">4</a>
      <a href="pagination.php?page=5">5</a>
      <a href="pagination.php?page=6">6</a>
      <a href="pagination.php?page=7">7</a>
      <a href="pagination.php?page=8">8</a>
      <a href="pagination.php?page=9">9</a>
      <a href="pagination.php?page=10">10</a>
      <a href="#forwaed">Next</a>
    </div>

    <?php
      $page = (isset($_GET["page"]) == true ) ? $_GET["page"]: 0; //kiểm tra phần $_GET["page"] có phần tử hay không
     ?>

  <p class="result">đây là trang thứ <?php echo $page; ?></p>
  </div>
</body>
</html>
