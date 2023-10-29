<!DOCTYPE html>
<html>
<head>
</head>
<body>
  
<?php

$a = rand(1, 10);

$b = rand(-5, 20);


echo "Número: " . $a . "<br>";
echo "Exponente: " . $b . "<br>";


if ($b < 0) {
    echo "El exponente debe ser mayor o igual a 0.";
} else {
    
    $resultado = 1;
    for ($i = 0; $i < $b; $i++) {
        $resultado *= $a;
    }

    if ($b == 0) {
        $resultado = 1;
    }

    echo "Resultado: " . $resultado;
}
?>



</body>
</html>