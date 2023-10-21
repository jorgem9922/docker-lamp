 <?php
  /*function sumanumeros(int $a, int $b) {
  return $a + $b;
}
echo sumanumeros(5, 5);
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
echo "<br>";
echo "<br>";
echo "<br>";
function multiplicanumeros(int $a, int $b) {
  return $a * $b;
}
echo multiplicanumeros(5, 5);
echo "<br>";

echo  */

function tabla (int $a) {
$x = $a;

  $y=0;
  while($y <= 10) {
    echo "$x" . "x" . "$y" ."=".$x*$y . " <br>";
    $y+=1;
}
}
echo tabla (9);
echo "<br>";
echo "<br>";
 tabla (12);






?>



