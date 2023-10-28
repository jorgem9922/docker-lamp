<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Actualice la pagina para mostrar una nueva tirada</h2>
<?php



$jugador1 = rand(1, 6); 
$jugador2 = rand(1, 6); 


if ($jugador1 > $jugador2) {
    echo '<img src="Recursos/' . $jugador1 . '.svg" alt="Dado" width="100" height="100" style="Background-color: red;">';
    echo '<p>Jugador 1: ' . $jugador1 . '</p>';
    echo '<img src="Recursos/' . $jugador2 . '.svg" alt="Dado" width="100" height="100" ;">';
    echo '<p>Jugador 2: ' . $jugador2 . '</p>';
    echo '<p>El ganador es: Jugador 1</p>';
} elseif ($jugador2 > $jugador1) {
    echo '<img src="Recursos/' . $jugador1 . '.svg" alt="Dado" width="100" height="100" ;">';
    echo '<p>Jugador 1: ' . $jugador1 . '</p>';
    echo '<img src="Recursos/' . $jugador2 . '.svg" alt="Dado" width="100" height="100" style="Background-color: blue;">';
    echo '<p>Jugador 2: ' . $jugador2 . '</p>';
    echo '<p>El ganador es: Jugador 2</p>';
} else {
    echo '<img src="Recursos/' . $jugador1 . '.svg" alt="Dado" width="100" height="100" style="Background-color: red;">';
    echo '<p>Jugador 1: ' . $jugador1 . '</p>';
    echo '</div>';
    echo '<img src="Recursos/' . $jugador2 . '.svg" alt="Dado" width="100" height="100" style="Background-color: blue;">';
    echo '<p>Jugador 2: ' . $jugador2 . '</p>';
    echo '<p>Empate</p>';
}
?>
</svg>
</body>
</html>