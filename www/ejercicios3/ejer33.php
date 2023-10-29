<!DOCTYPE html>
<html>
<head>
</head>
<body>
  
<?php
$numeros = [];
for ($i = 0; $i < 10; $i++) {
    $numeros[] = rand(1, 100);
}
echo "los numeros son: ";
foreach ($numeros as $numero) {
    echo $numero . " ";
}
echo "<br>";
$suma = array_sum($numeros);
$media = $suma / count($numeros);
$maximo = max($numeros);
$minimo = min($numeros);
echo "<br>";
echo "Suma de los numeros: " . $suma . "<br>";
echo "<br>";
echo "Media de los numeros: " . $media . "<br>";
echo "<br>";
echo "el numero mas alto es: " . $maximo . "<br>";
echo "<br>";
echo "El numero mas bajo es: " . $minimo . "<br>";
?>


</body>
</html>