<!DOCTYPE html>
<html>
<head>
</head>
<body>
    
<?php
// Obtener el número de la query_string
$numero = $_GET['numero'];

// Definir la función para calcular el factorial
function calcularFactorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * calcularFactorial($n - 1);
    }
}

// Calcular el factorial del número
$factorial = calcularFactorial($numero);

// Imprimir el resultado
echo "El factorial de " . $numero . " es: " . $factorial;
?>

</body>
</html>