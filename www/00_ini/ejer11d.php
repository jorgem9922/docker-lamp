<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<svg height="2100" width="5000">

<?php
$posx=20;
while ($posx<500){
echo '<circle cx="'. $posx .'" cy="100" r="40" stroke="black" stroke-width="5" fill="red" />';
$posx=$posx+50;
}
?>

</svg>


</body>
</html>
