<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
 <?php

$palo = "d";


$maxCartas = 10; 

// Inicio un bucle para mostrar las cartas
for ($numero = 1; $numero <= $maxCartas; $numero++) {
 
    $nombreCarta = $palo[0] . $numero . '.svg';

 
    echo '<img src="Recursos/' . $nombreCarta . '" alt="Carta" width="10%" height="15%">';
}

?>
</body>
</html>