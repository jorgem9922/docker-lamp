<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php 
$dado1 = rand(1, 6);
$dado2 = rand(1, 6);
echo '<img src="/Recursos/' . $dado2 . '.svg" >';
echo '<img src="/Recursos/' . $dado1 . '.svg" >';
echo "<br>";
echo 'la suma de los dados es: ' . ($dado1 + $dado2);

?>
</body>
</html>
