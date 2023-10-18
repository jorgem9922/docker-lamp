

<?php

// echo date("Y/M/D H:i:sa l ");
// echo "<br>";


// 

date_default_timezone_set("Europe/Madrid");
$t = date("H");
if ($t < "10") {
 echo "buenos dias!";
}
elseif ($t <"20")
{echo "buenas tardes";
}
?>


