<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
// para que los dados salgan con el mismo numero colocamos la declaracion de la variable fuera del bucle
// $dado1=rand(1,6);
$numerodados=1;
while($numerodados<50){
    // si queremos que el dado se randomize las 50 veces colocaremos la declaracion de la variable dentro del bucle para que se randomize cada vez que se entre al bucle
    $dado1=rand(1,6);
echo '<img src="/Recursos/' . $dado1 . '.svg " " style="width: 5%"style="height=10%">';
$numerodados++;
}
?>

</body>
</html>