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
    <title>Betalingsside</title>
</head>
<body>

<body style="background-color:#D4D0C1;">
<h1 style="font-family:verdana;">Farstrup Furniture</h1>

<?php
print_r(productPlacment(0));
print_r(getFromFile());
?>
<br>
<form method="post">
<?php
echo "Kortholders navn"
?>
<br>
<input type="text" name="navn">
<br>
<?php
echo "Reg. nr."
?>
<br>
<input type="text" name="regnr">
<br>
<?php
echo "Konto. nr."
?>
<br>
<input type="text" name="kontonr">
<br>
<form method="POST" action="./ordre.php">
    <input type="submit"/> 
   </form>
</form>
<br>
<form method="get" action="./kurv.php">
    <button type="submit">Til kurven</button>
</form>
<br>
<br>
<?php
echo paymentPage();
?>
</body>
</html>