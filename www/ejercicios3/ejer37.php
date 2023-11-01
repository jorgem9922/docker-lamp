<!DOCTYPE html>
<html>
<head>
</head>
<body>
    
<?php

function generarTabla($base, $tope) {
  echo "<pre>";
  for ($i = $base; $i <= $tope; $i++) {
    echo "Número: $i | Cuadrado: $i^2 | Cubo: $i^3" . PHP_EOL;
  }
  echo "</pre>";
}

$base = 1;
$tope = 10;

generarTabla($base, $tope);

?>

</body>
</html>