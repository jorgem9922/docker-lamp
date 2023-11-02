<!DOCTYPE html>
<html>
<head>
</head>
<body>
    
<?php

$base = $_GET['base'];
$tope = $_GET['tope'];

echo "Número\tCuadrado\tCubo\n";
for ($i = $base; $i <= $tope; $i++) {
    $cuadrado = $i * $i;
    $cubo = $i * $i * $i;
    echo "$i\t$cuadrado\t$cubo\n";
}

?>

</body>
</html>