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
$dado3=rand(1,6);
// echo '<img src="/Recursos/' . $dado2 . '.svg " >';
// echo '<img src="/Recursos/' . $dado1 . '.svg " >';
// echo '<img src="/Recursos/' . $dado3 . '.svg " >';
// echo "<br>";
// echo "<br>";

if ($dado1 > $dado2 && $dado1 > $dado3) {
    echo '<img src="/Recursos/' . $dado2 . '.svg "" style="width: 5%;" >';
    echo '<img src="/Recursos/' . $dado1 . '.svg "" style="width: 10%;" >';
    echo '<img src="/Recursos/' . $dado3 . '.svg " " style="width: 5%;">';
    echo "<br>";
    echo "<br>"; 
} elseif ($dado2 > $dado1 && $dado2 > $dado3) {
    echo '<img src="/Recursos/' . $dado2 . '.svg "" style="width: 10%;" >';
echo '<img src="/Recursos/' . $dado1 . '.svg " " style="width: 5%;">';
echo '<img src="/Recursos/' . $dado3 . '.svg " " style="width: 5%;">';
echo "<br>";
echo "<br>";
} elseif ($dado3 > $dado1 && $dado3 > $dado2) {
    echo '<img src="/Recursos/' . $dado2 . '.svg "" style="width: 5%;" >';
echo '<img src="/Recursos/' . $dado1 . '.svg " " style="width: 5%;">';
echo '<img src="/Recursos/' . $dado3 . '.svg " " style="width: 10%;">';
echo "<br>";
echo "<br>";
}
else {
    echo '<img src="/Recursos/' . $dado2 . '.svg "" style="width: 5%;" >';
echo '<img src="/Recursos/' . $dado1 . '.svg " " style="width: 5%;">';
echo '<img src="/Recursos/' . $dado3 . '.svg " " style="width: 5%;">';
echo "<br>";
echo "<br>";
}
?>

</body>
</html>