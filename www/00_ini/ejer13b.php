<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
 <?php
// Defino el palo de las cartas
$palo = "d";

// Defino el número máximo de cartas en el mazo
$maxCartas = 10; // Cambio esto según la cantidad de cartas que deseo mostrar

// Inicio un bucle para mostrar las cartas
for ($numero = 1; $numero <= $maxCartas; $numero++) {
    // Construyo el nombre del archivo de la carta
    $nombreCarta = $palo[0] . $numero . '.svg';

    // Muestro la carta en pantalla con un tamaño adecuado
    echo '<img src="Recursos/' . $nombreCarta . '" alt="Carta" width="10%" height="15%">';
}

?>

</body>
</html>