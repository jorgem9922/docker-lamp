<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$jugador1_dado1 = rand(1, 6); 
$jugador1_dado2 = rand(1, 6); 
$jugador2_dado1 = rand(1, 6); 
$jugador2_dado2 = rand(1, 6); 
if ($jugador1_dado1 == $jugador1_dado2 && $jugador2_dado1 != $jugador2_dado2) {
    $ganador = "Jugador 1";
    $ganadorColor = "blue";
    $perdedorColor = "red";
} elseif ($jugador2_dado1 == $jugador2_dado2 && $jugador1_dado1 != $jugador1_dado2) {
    $ganador = "Jugador 2";
    $ganadorColor = "blue";
    $perdedorColor = "red";
} elseif ($jugador1_dado1 + $jugador1_dado2 > $jugador2_dado1 + $jugador2_dado2) {
    $ganador = "Jugador 1";
    $ganadorColor = "blue";
    $perdedorColor = "red";
} elseif ($jugador2_dado1 + $jugador2_dado2 > $jugador1_dado1 + $jugador1_dado2) {
    $ganador = "Jugador 2";
    $ganadorColor = "blue";
    $perdedorColor = "red";
} else {
    $ganador = "Empate";
    $ganadorColor = "grey";
    $perdedorColor = "grey";
}

echo '<img src="Recursos/' . $jugador1_dado1 . '.svg" alt="Dado" width="100" height="100" style="background-color: ' . $ganadorColor . ';">';
echo '<img src="Recursos/' . $jugador1_dado2 . '.svg" alt="Dado" width="100" height="100" style="background-color: ' . $ganadorColor . ';">';
echo '<img src="Recursos/' . $jugador2_dado1 . '.svg" alt="Dado" width="100" height="100" style="background-color: ' . $perdedorColor . ';">';
echo '<img src="Recursos/' . $jugador2_dado2 . '.svg" alt="Dado" width="100" height="100" style="background-color: ' . $perdedorColor . ';">';
echo '<p>El ganador es: ' . $ganador . '</p>';
?>
</body>
</html>