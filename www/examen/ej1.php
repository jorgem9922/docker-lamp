<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> PINTALINEAS de Jorge Mira</title>
</head>
<body>
<a href="http://localhost/examen/ej1.html">volver a introducir los numeros</a>

    <?php
    echo "<br>";
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $numero3 = $_POST['numero3'];
    $numeros = [$numero1, $numero2, $numero3];
    $valormasalto=max($numeros);
    $valormasbajo=min($numeros);
    $num=3;
     $valormedio=($numero1+$numero2+$numero3) / $num;
    echo "<br>";
    echo "la linea mas larga es la linea con valor: ";
    echo $valormasalto;
    echo "<br>";
    echo "la linea mas corta es la linea con valor: ";
    echo $valormasbajo;
    echo "<br>";

     echo "el valor medio es: ";
     echo $valormedio;
   
    echo "<br>";


echo "<br>";
if ($numero1 <500)
{
    echo "la longitud  es : " . $numero1;
    echo "<br>";
    echo '<svg height="60px" width="1000px">';
    echo '<line x1="0" y1="10" x2="'. $numero1 .'" y2="10" style="stroke:rgb(0,125,125);stroke-width:3" />';
    
}
echo "<br>";
if ($numero2 <500)
{
    echo "la longitud es : " . $numero2;
    echo "<br>";
    echo '<svg height="60px" width="1000px">';
    echo '<line x1="0" y1="10" x2="'. $numero2 .'" y2="10" style="stroke:rgb(0,125,125);stroke-width:3" />';
    
}
echo "<br>";
if ($numero3 <500)
{
    echo "la longitud es : " . $numero3;
    echo "<br>";
    echo '<svg height="60px" width="1000px">';
    echo '<line x1="0" y1="10" x2="'. $numero3 .'" y2="10" style="stroke:rgb(0,125,125);stroke-width:3" />';
    
}

    ?>
   
</body>
</html>
