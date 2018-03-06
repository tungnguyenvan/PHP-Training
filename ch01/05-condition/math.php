<?php
  $number1 = $_POST["number1"];
  $number2 = $_POST["number2"];
  $caculate = $_POST["caculate"];

  switch ($caculate) {
    case "+":
      # code...
      echo ($number1 + $number2);
      break;
    case "-":
      # code...
      echo ($number1 - $number2);
      break;
      case "*":
        # code...
      echo ($number1 * $number2);
        break;
        case "/":
          # code...
        echo ($number1 / $number2);
          break;
    default:
      # code...
      break;
  }

?>
