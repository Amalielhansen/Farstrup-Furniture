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
    <title>Kurv</title>
</head>
<body>
    <body style="background-color:#D4D0C1;">
    <h1 style="font-family:verdana;">Kurv</h1>
    <ul>
        <a href="./webshop.php">Webshop</a>
        <a href="./index.php">Forhandlere</a>
        <a href="./index.php">Om os</a>
        <a href="./index.php">Kontakt</a>
        <a href="./index.php">Contract</a>
    </ul>
    
    <?php
        echo productPlacment(0);
        print_r(getFromFile());
    ?>

 <form method="get" action="./betalingsside.php">
    <button type="submit">Betal</button>
    </form>
</body>
</html>