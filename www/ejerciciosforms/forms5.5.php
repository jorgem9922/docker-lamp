<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Suma de múltiplos de 5</title>
</head>
<body>
  <form action="forms5.5.php" method="post">
    <input type="number" name="numero" placeholder="Introduce un número">
    <input type="submit" value="Enviar">
  </form>
  <?php
$numero = $_POST['numero'];

// Inicializar la variable 
$suma = 0;

//  suma de los múltiplos de 5 
for ($i = 5; $i < $numero; $i += 5) {
    $suma += $i;
}


echo "La suma de todos los múltiplos de 5 anteriores a $numero es: $suma";
?>

</body>
</html>