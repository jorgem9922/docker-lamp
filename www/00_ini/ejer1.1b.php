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
            
   
<svg height="2100px" width="1000px">

<?php

$posx2=rand(10,1000);
if ($posx2<1000)
{
    echo '<line x1="0" y1="100" x2="'. $posx2 .'" y2="100" style="stroke:rgb(0,125,125);stroke-width:3" />';
    
}
?>
</svg>


</body>
</html>