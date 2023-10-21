<?php
// $y = 0;
$x = 0;

while($x <= 10) {
//   echo "The number is: $x <br>";
  $y=0;
  $x+=1;
  while($y <= 10) {
    echo "$x" . "x" . "$y" ."=".$x*$y . " <br>";
    $x+=1;
}
}
?>