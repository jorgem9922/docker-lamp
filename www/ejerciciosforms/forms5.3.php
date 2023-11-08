<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Círculos o cuadrados</title>
</head>
<body>
  <form action="forms5.3.php" method="post">
    <input type="number" name="numero" placeholder="Introduce un número">
    <input type="radio" name="forma" value="circulo"> Círculos
    <input type="radio" name="forma" value="cuadrado"> Cuadrados
    <input type="submit" value="Enviar">
  </form>
  <?php
// introduccion de numero
if (!isset($_POST['numero']) || $_POST['numero'] == '') {
  // No se ha recibido ningún número
  echo 'No se ha introducido ningún número.';
  exit;
}

// Comprobar que es un número
$numero = $_POST['numero'];
if (!is_numeric($numero)) {
  // No es un número
  echo 'El valor introducido no es un número.';
  exit;
}

// Comprobar  forma
$forma = $_POST['forma'];

// if de círculos o cuadrados
if ($forma == 'circulo') {
  for ($i = 0; $i < $numero; $i++) {
    echo '<svg width="100" height="100">
      <circle cx="50" cy="50" r="25" stroke="yellow" fill="purple"></circle>
    </svg>';
  }
} else {
  for ($i = 0; $i < $numero; $i++) {
    echo '<svg width="100" height="100">
      <rect x="25" y="25" width="50" height="50" stroke="pink" fill="purple"></rect>
    </svg>';
  }
}
?>
</body>
</html>