<!DOCTYPE html>
<html>
<head>
</head>
<body>
  
<?php
$numero = 1;
while ($numero <= 100) {
    echo $numero;
    $numero++;
    if ($numero % 10 == 1) {
        echo "<br>";
    } else {
        echo " ";
    }
}
echo "Fin del programa";
?>


</body>
</html>