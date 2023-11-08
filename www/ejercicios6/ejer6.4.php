<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulario PHP</title>
</head>
<body>
    <form method="post" action="">
        <h2>Creador de vectores</h2>
    <p>Ten e cuenta que los números impares de 1 a 20 suman un total de 10 digitos</p>
        <label for="numero1">Introduce el primer número:</label>
        <input type="number" name="numero1" id="numero1">
        <br>
        <p>Ten e cuenta que los números pares de 1 a 20 suman un total de 10 digitos</p>
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
        $vector1 = generarVectorSinRepetir($numero1, 2);

        // Crear el segundo vector con números aleatorios impares
        $vector2 = generarVectorSinRepetir($numero2, 1);

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

    function generarVectorSinRepetir($cantidad, $valorInicial) {
        $vector = array();
        $numerosPosibles = array();

        // Generar los números posibles según si son pares o impares
        for ($i = $valorInicial; $i <= 20; $i += 2) {
            $numerosPosibles[] = $i;
        }

        // Elegir de forma aleatoria los números del vector sin repetir
        while (count($vector) < $cantidad) {
            $indiceAleatorio = array_rand($numerosPosibles);
            $numeroAleatorio = $numerosPosibles[$indiceAleatorio];

            if (!in_array($numeroAleatorio, $vector)) {
                $vector[] = $numeroAleatorio;
            }
        }

        return $vector;
    }
    ?>
</body>
</html>
