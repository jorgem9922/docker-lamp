<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <table>
        
            <?php
            // Generar un número aleatorio entre 1 y 10 para determinar la cantidad de círculos
            $numCirculos = rand(1, 10);

            for ($i = 1; $i <= $numCirculos; $i++) {
                echo '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="70" height="70">';
                echo '<circle cx="35" cy="35" r="30" fill="black" />';
                echo '</svg>';
            }
            ?>
        
    </table>
</body>
</html>
