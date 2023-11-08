<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulario PHP</title>
</head>
<body>
    <form method="post" action="">
        <label for="numero1">Introduce el número:</label>
        <input type="number" name="numero1" id="numero1">
        <br>
        <label for="numero2">Introduce el número a buscar:</label>
        <input type="number" name="numero2" id="numero2">
        <br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los números del formulario
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];

        // Crear el vector con números aleatorios
        $vector = array();
        for ($i = 0; $i <= $numero1; $i++) {
            $vector[] = rand(0, 100);
        }

        // Verificar si el segundo número está en el vector y en qué posición
        $posicion = array_search($numero2, $vector);

        // Mostrar los valores del vector y la información sobre el segundo número
        echo "Array: [ ";
        foreach ($vector as $valor) {
            echo $valor . ", ";
        }
        echo "]<br>";

        if ($posicion !== false) {
            echo "El número $numero2 está en la posición $posicion del array.";
        } else {
            echo "El número $numero2 no está en el array.";
        }
    }
    ?>
</body>
</html>
