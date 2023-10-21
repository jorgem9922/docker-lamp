<DOCTYPE html>
<style>
</style>



<?php
    echo "esta funcion cuenta las letras de esta frase:";
    echo "<br><br>";
    echo strlen("esta funcion cuenta las letras de esta frase");"<br>" // outputs numero de letras
?> 
<?php
 echo "esta funcion le da la vuelta a esta frase:";
 echo "<br><br>";
echo strrev("esta funcion le da la vuelta a esta frase"); // outputs reverse string

?>
<?php
 echo "esta funcion cuenta la posicion de la palabra indicada en esta frase:";
 echo "<br><br>";
echo strpos("esta funcion cuenta la posicion de la palabra indicada en esta frase:", "indicada"); // outputs posicion de la palabra indicada
?>
<?php
 echo "esta funcion sustityue la palabra indicada:azul por la palabra proporcionada:rojo:";
 echo "<br><br>";
echo str_replace("esta funcion sustityue la palabra indicada por la palabra proporcionada", "azul", " "); // outputs Hello Dolly!
?>







</html>