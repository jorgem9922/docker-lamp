
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<svg height="2100" width="5000">
<line x1="0" y1="0" x2="200" y2="200" style="stroke:rgb(255,0,0);stroke-width:3" />
<line x1="200" y1="0" x2="0" y2="200" style="stroke:rgb(0,255,0);stroke-width:3" />
<line x1="100" y1="0" x2="100" y2="200" style="stroke:rgb(0,0,255);stroke-width:3" />
<line x1="0" y1="100" x2="200" y2="100" style="stroke:rgb(0,125,125);stroke-width:3" />

<?php
$posx=20;
while ($posx<500){
echo '<circle cx="'. $posx .'" cy="100" r="40" stroke="black" stroke-width="5" fill="red" />';
$posx=$posx+15;
}
?>
</svg>
<!-- ejercicio1 -->
<svg height="2100" width="5000">



</svg>








</body>
</html>

