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
        <a href="./kurv.php">Kurv</a>
    </ul>
    <img src= "Stol1.png" alt="Farstrup Furniture product picture" width="300" height="300"
         align="middle">

    <img src= "Stol2.png" alt="Farstrup Furniture product picture" width="300" height="300"
         align="middle">

    <img src= "Stol3.png" alt="Farstrup Furniture product picture" width="300" height="300"
         align="middle">

    <form method="post">
        <?php
        echo "Sædehøjde"
        ?>
        <input type="text" name="sædehøjde">
        <?php
        echo "Sædedybde"
        ?>
        <input type="text" name="sædedybde">
        <?php
        echo "Sædebredde"
        ?>
        <input type="text" name="sædebredde">
        <?php
        echo "Andre tilføjelser"
        ?>
        <input type="text" name="andremuligheder">
        <button type="submit">Tilføj</button>

    </form>
<br>
<br>
<form method="get" action="./kurv.php">
    <button type="submit">Til kurven</button>
</form>
 
</body>
</html>