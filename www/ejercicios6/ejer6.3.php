<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulario PHP</title>
</head>
<body>
    <form method="post" action="">
    <h2>Creador de vectores</h2>
        <label for="numero1">Introduce el primer número:</label>
        <input type="number" name="numero1" id="numero1">
        <br>
        <label for="numero2">Introduce el segundo número:</label>
        <input type="number" name="numero2" id="numero2">
        <br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los números del formulario
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];

        // Crear el primer vector con números aleatorios pares
        $vector1 = array();
        for ($i = 0; $i < $numero1; $i++) {
            $numeroAleatorio = rand(1, 10) * 2;
            $vector1[] = $numeroAleatorio;
        }

        // Crear el segundo vector con números aleatorios impares
        $vector2 = array();
        for ($i = 0; $i < $numero2; $i++) {
            $numeroAleatorio = (rand(1, 10) * 2) - 1;
            $vector2[] = $numeroAleatorio;
        }

        // Crear el vector resultante con la unión de los dos vectores
        $vectorResultante = array_merge($vector1, $vector2);

        // Mostrar los valores de los vectores
        echo "Array1 : [ ";
        foreach ($vector1 as $valor) {
            echo $valor . ", ";
        }
        echo "]<br>";
        echo "Array2 : [ ";
        foreach ($vector2 as $valor) {
            echo $valor . ", ";
        }
        echo "]<br>";
        echo "Vector resultante: [ ";
        foreach ($vectorResultante as $valor) {
            echo $valor . ", ";
        }
        echo "]";
    }
    ?>
</body>
</html>