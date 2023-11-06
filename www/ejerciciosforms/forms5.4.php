<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Rectángulo de asteriscos</title>
</head>
<body>
  <form action="forms5.4.php" method="post">
    <input type="number" name="filas" placeholder="Introduce el número de filas">
    <input type="number" name="columnas" placeholder="Introduce el número de columnas">
    <input type="submit" value="Enviar">
  </form>
  <?php
// Comprobar si se han recibido los parámetros
if (!isset($_POST['filas']) || $_POST['filas'] == '') {
  // No se ha recibido el número de filas
  echo 'No se ha introducido el número de filas.';
  exit;
}
if (!isset($_POST['columnas']) || $_POST['columnas'] == '') {
  // No se ha recibido el número de columnas
  echo 'No se ha introducido el número de columnas.';
  exit;
}

// Comprobar que los parámetros son números
$filas = $_POST['filas'];
if (!is_numeric($filas)) {
  // No es un número
  echo 'El valor introducido para el número de filas no es un número.';
  exit;
}
$columnas = $_POST['columnas'];
if (!is_numeric($columnas)) {
  // No es un número
  echo 'El valor introducido para el número de columnas no es un número.';
  exit;
}

// Dibujar el rectángulo
for ($i = 0; $i < $filas; $i++) {
  for ($j = 0; $j < $columnas; $j++) {
    echo '*';
  }
  echo '<br>';
}
?>
</body>
</html>