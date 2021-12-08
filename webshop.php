<?php
include("./Functions.php");
include("./Controller.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farstrup Furniture</title>
</head>
<body style="background-color:#D4D0C1;">
<h1 style="font-family:verdana;">Farstrup Furniture</h1>
    
    <ul>
        <a href="./webshop.php">Webshop</a>
        <a href="./index.php">Forhandlere</a>
        <a href="./index.php">Om os</a>
        <a href="./index.php">Kontakt</a>
        <a href="./index.php">Contract</a>
    </ul>
    <br>
    <br>
    <br>
    <?php
      echo productPlacment(0);
      ?>
      <a href="./produktside.php">Gå til vare</a>
      <br>
      <br>
      <?php
      echo productPlacment(1);
      ?>
      <a href="./produktside.php">Gå til vare</a>
      <br>
      <br>
      <?php
      echo productPlacment(2);
      ?>
      <a href="./produktside.php">Gå til vare</a>
</body>
</html>

    
