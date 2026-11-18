<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lab 7a Q1</title> 
</head>
<body>
  <?php
    $name = "Aliff Soufi Yahaya";
    $matric = "CI250061";
    $course = "Bachelor of Software Engineering With Honours";
    $year = 2;
    $address = "No. 713, Jalan Seri Impian 3/14, Taman Seri Impian 86000 Kluamg, Johor";
  ?>

  <table border="1">
    <tr>
      <td>Name</td>
      <td><?php echo "$name"; ?></td>
    </tr>
    <tr>
      <td>Matric number</td>
      <td><?php echo "$matric"; ?></td>
    </tr>
    <tr>
      <td>Course</td>
      <td><?php echo "$course"; ?></td>
    </tr>
    <tr>
      <td>Year of study</td>
      <td><?php echo "$year"; ?></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><?php echo "$address"; ?></td>
    </tr>
  </table>
</body>
</html>

