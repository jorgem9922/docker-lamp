
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
        <h4>Actualice la pagina para mostrar una linea nueva<h4>
            
<?php

$posx2=rand(10,1000);
echo "la longitud es : " . $posx2;
echo "<br>";
if ($posx2<1000)
{
    echo '<svg height="60px" width="1000px">';
  
    echo '<line x1="0" y1="10" x2="'. $posx2 .'" y2="10" style="stroke:rgb(0,125,125);stroke-width:3" />';
    
}
?>
</svg>

</body>
</html>
