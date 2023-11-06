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
// Obtener el número ingresado por el usuario
$numero = $_POST['numero'];

// Generar el código SVG para los cuadrados de colores
$svg = '<svg width="800" height="800">';
for ($i = 0; $i < $numero; $i++) {
    // Generar una posición aleatoria para el cuadrado
    $x = rand(0, 800);
    $y = rand(0, 800);

    // Generar un color aleatorio en formato hexadecimal
    $color = '#' . dechex(rand(0x000000, 0xFFFFFF));

    // Agregar el cuadrado al código SVG
    $svg .= '<rect x="' . $x . '" y="' . $y . '" width="50" height="50" fill="' . $color . '"/>';
}
$svg .= '</svg>';

// Mostrar el código SVG al usuario
echo $svg;
?>

</body>
</html>