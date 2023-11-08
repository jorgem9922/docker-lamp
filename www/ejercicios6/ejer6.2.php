<!DOCTYPE html>
<html>
<head>
    <title>Formulario y Vector</title>
</head>
<body>
    <h1>Formulario y Vector</h1>

    <form method="POST" action="ejer6.2.php">
        <label for="numero">Ingrese un número:</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        $vector = array();

        // Llenar el vector con valores aleatorios
        for ($i = 0; $i < $numero; $i++) {
            $valor = rand(1, 100);
            array_push($vector, $valor);
        }

        // Mostrar el vector inicial
        echo "Array inicial:";
        echo "<br>";
        echo "[ ";
        foreach ($vector as $valor) {
            echo $valor . " ";
        }
        
        echo "]";
        echo "<br>";
        echo "<br>";
        // Mostrar el vector en orden inverso
        echo "Array reverso:";
        echo "<br>";
        echo "[ ";
        for ($i = count($vector) - 1; $i >= 0; $i--) {
            echo $vector[$i] . " ";
        }
        echo "]";
    }
    ?>

</body>
</html>