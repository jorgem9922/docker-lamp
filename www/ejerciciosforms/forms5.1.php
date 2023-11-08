<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>paridad jorge mira</title>
</head>
<body>

  <form action="forms5.1.php" method="post">
    <input type="number" name="numero" placeholder="Introduce un número">
    <input type="submit" value="Enviar">
    <?php
    // introduccion de valores
    if (!isset($_POST['numero']) || $_POST['numero'] == '') {
      // No se ha recibido ningún valor
      echo 'No se ha introducido ningún número.';
      exit;
    }
    
    // numero
    $numero = $_POST['numero'];
    if (!is_numeric($numero)) {
      // No es un número
      echo 'El valor introducido no es un número.';
      exit;
    }
    
    //  menor que 1000?
    if ($numero < 1000) {
      // Es menor que 1000
      if ($numero % 2 == 0) {
        // Es par
        echo 'El número es par y menor que 1000.';
      } else {
        // Es impar
        echo 'El número es impar y menor que 1000.';
      }
    } else {
      // mayor que 1000
      echo 'El número es mayor o igual que 1000.';
    }
    ?>
</form>

</body>
</html>


