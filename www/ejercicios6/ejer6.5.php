<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulario PHP</title>
</head>
<body>
    <form method="post" action="">
        <label for="numero">Introduce un número:</label>
        <input type="number" name="numero" id="numero">
        <br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener el número del formulario
        $numero = $_POST["numero"];

        // Crear el primer array con números aleatorios
        $array1 = generarArrayAleatorio($numero);

        // Crear el segundo array con números aleatorios
        $array2 = generarArrayAleatorio($numero);

        // Crear el array resultante con la suma de los elementos de los dos arrays iniciales
        $resultado = array();
        for ($i = 0; $i < $numero; $i++) {
            $resultado[] = $array1[$i] + $array2[$i];
        }

        // Mostrar los valores de los arrays
        echo "Array 1: [ ";
        foreach ($array1 as $valor) {
            echo $valor . ", ";
        }
        echo "]<br>";
        echo "Array 2: [ ";
        foreach ($array2 as $valor) {
            echo $valor . ", ";
        }
        echo "]<br>";
        echo "Resultado: [ ";
        foreach ($resultado as $valor) {
            echo $valor . ", ";
        }
        echo "]";
    }

    function generarArrayAleatorio($cantidad) {
        $array = array();

        for ($i = 0; $i < $cantidad; $i++) {
            $numeroAleatorio = rand(1, 20);
            $array[] = $numeroAleatorio;
        }

        return $array;
    }
    ?>
</body>
</html>