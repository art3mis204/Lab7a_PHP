<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lab 7a Q3</title>
</head>
<body>
  <?php
    function calculateArea(float $width, float $length) {
      return $width * $length;
    }

    $width = 4;
    $length = 2;
    $area = calculateArea($width, $length);

    echo "<p><b>The area of a rectangle with a width of $width and $length is $area</b></p>";
  ?>
</body>
</html>

