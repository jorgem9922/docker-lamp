<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>salarios jorge mira</title>
</head>
<body>
  <form action="forms5.2.php" method="post">
    <input type="text" name="nombre" placeholder="Introduce tu nombre">
    <input type="text" name="apellidos" placeholder="Introduce tus apellidos">
    <input type="number" name="edad" placeholder="Introduce tu edad">
    <input type="number" name="salario" placeholder="Introduce tu salario">
    <input type="submit" value="Enviar">
  </form>
  <?php
// Comprobar que se han recibido todos los parámetros
if (!isset($_POST['nombre']) || $_POST['nombre'] == '') {
  // No se ha recibido el nombre
  echo 'No se ha introducido ningún nombre.';
  exit;
}
if (!isset($_POST['apellidos']) || $_POST['apellidos'] == '') {
  // No se han recibido los apellidos
  echo 'No se han introducido ningún apellidos.';
  exit;
}
if (!isset($_POST['edad']) || $_POST['edad'] == '') {
  // No se ha recibido la edad
  echo 'No se ha introducido ninguna edad.';
  exit;
}
if (!isset($_POST['salario']) || $_POST['salario'] == '') {
  // No se ha recibido el salario
  echo 'No se ha introducido ningún salario.';
  exit;
}

// Calcular el incremento del salario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];
$salario = $_POST['salario'];

$incremento = 0;
if ($salario < 1000 && $edad < 35) {
  $incremento = 0.15;
} else if ($salario < 1000 && $edad >= 35) {
  $incremento = 0.10;
} else if ($salario >= 1000 && $salario < 2000 && $edad > 50) {
  $incremento = 0.05;
} else if ($salario >= 1000 && $salario < 2000 && $edad <= 50) {
  $incremento = 0.02;
}

// Actualizar el salario
$salarioNuevo = $salario * (1 + $incremento);

// Mostrar el resultado
echo '<h1>Resultado</h1>';
echo '<p>Nombre: ' . $nombre . '</p>';
echo '<p>Apellidos: ' . $apellidos . '</p>';
echo '<p>Edad: ' . $edad . '</p>';
echo '<p>Salario original: ' . $salario . '</p>';
echo '<p>Salario incrementado: ' . $salarioNuevo . '</p>';
?>
</body>
</html>
