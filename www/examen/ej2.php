<!DOCTYPE html>
<html>
<body>

<?php
$dado1 = rand(1,6);
$dado2 = rand(1,6);
$dado3 = rand(1,6);
$dado4 = rand(1,6);
$dado5 = rand(1,6);
$dados = array($dado1,$dado2,$dado3,$dado4,$dado5); 
echo $dados[0].",".$dados[1].",".$dados[2].",".$dados[3].",".$dados[4];
echo "<br>";
$i=0;
while($i<5)
{
    
echo '<img src="/Recursos/' . $dados[$i] . '.svg" >';
// echo '<img src="/Recursos/' . $dados[1] . '.svg" >';
// echo '<img src="/Recursos/' . $dados[2] . '.svg" >';
// echo '<img src="/Recursos/' . $dados[3] . '.svg" >';
// echo '<img src="/Recursos/' . $dados[4] . '.svg" >';
$i++;
}

?>

</body>
</html>
