<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kertotaulu</title>
</head>
<body>

<h1>Kertotaulu</h1>

<form action="kertotaulu.php" method="post">
<input type="number" name="luku1">
<input type="submit" value="Kerro">

<?php
$luku = $_POST["luku1"];
$taulu = 10;
$kerroin = 1;

echo "<br>";
do {
    echo "$kerroin * $luku = ". ($kerroin * $luku) ."<br>";
    $kerroin++;
} while ($kerroin <= $taulu);
?>

</form>
</body>
</html>