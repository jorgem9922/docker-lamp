<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

$dado1=rand(1,6);
$dado2=rand(1,6);
echo '<img src="/Recursos/' . $dado2 . '.svg " alt="">';

echo '<img src="/Recursos/' . $dado1 . '.svg " alt="">';
echo "<br>";
echo "<br>";

if($dado2<$dado1){
    echo 'dado 1 vence a dado--2';
}
elseif ($dado2>$dado1){
echo 'dado 2 vence a dado 1';
}
else{
echo'empate';
}
?>
</svg>
</body>
</html>