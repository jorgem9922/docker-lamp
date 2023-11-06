<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Cuadrados de colores</title>
</head>
<body>
  <form action="forms5.6.php" method="post">
    <input type="number" name="numero" placeholder="Introduce el número de cuadrados">
    <input type="submit" value="Enviar">
  </form>
  <?php
// Obtener el número 
$numero = $_POST['numero'];
$svg = '<svg width="800" height="800">';
for ($i = 0; $i < $numero; $i++) {
    //  posición aleatoria de la posicion del cuadrado

    $x = rand(0, 800);
    $y = rand(0, 800);

    // color aleatorio
    $color = '#' . dechex(rand(0x000000, 0xFFFFFF));

    //  cuadrado SVG
    $svg .= '<rect x="' . $x . '" y="' . $y . '" width="50" height="50" fill="' . $color . '"/>';
}
$svg .= '</svg>';

// Mostrar el código SVG al usuario
echo $svg;
?>

</body>
</html>