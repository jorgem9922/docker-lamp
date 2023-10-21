<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   

<?php



$carta1 = rand(1, 10);
$carta2 = rand(1, 10);
$carta3 = rand(1, 10);

$palo ="d";
$cartas = [$carta1, $carta2, $carta3];
sort($cartas);

// muestra las cartas por orden mediante el sort
echo '<img src="Recursos/' . $palo[0] . $cartas[0] . '.svg" width="100" height="100">';
echo '<img src="Recursos/' . $palo[0] . $cartas[1] . '.svg" width="100" height="100">';
echo '<img src="Recursos/' . $palo[0] . $cartas[2] . '.svg" width="100" height="100">';
echo '<br>';



$valorMasAlto = max($cartas);
echo 'El valor más alto de las tres cartas es: ' . $valorMasAlto;
?>



</body>
</html>