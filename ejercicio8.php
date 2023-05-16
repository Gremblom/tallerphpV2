<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="ejercicio1.php">Ejercicio 1</a>
    <a href="ejercicio2.php">Ejercicio 2</a>
    <a href="ejercicio3.php">Ejercicio 3</a>
    <a href="ejercicio4.php">Ejercicio 4</a>
    <a href="ejercicio5.php">Ejercicio 5</a>
    <a href="ejercicio6.php">Ejercicio 6</a>
    <a href="ejercicio7.php">Ejercicio 7</a>
    <a href="ejercicio9.php">Ejercicio 9</a>
    <a href="ejercicio10.php">Ejercicio 10</a>
    <br><br>
    <form action="ejercicio8.php" method="post">
        <label>Ingrese la medida de uno de los lados del cuadrado</label>
        <input type="number" name="pCuadrado">
        <br><br>

        <label>Ingrese la base y la altura del rectángulo en su respectivo orden</label>
        <br>
        <input type="number" name="bRectangulo">
        <br>
        <input type="number" name="aRectangulo">
        <br><br>

        <input type="submit">
    </form>
</body>
</html>

<?php
    $lado_cuadrado = $_POST["pCuadrado"];
    $base_rectangulo = $_POST["bRectangulo"];
    $altura_rectangulo = $_POST["aRectangulo"];

    if ($lado_cuadrado == ""){

    } else {
    $perimetro = $lado_cuadrado + $lado_cuadrado + $lado_cuadrado +$lado_cuadrado;
    echo "El perimetro del cuadrado es de {$perimetro} <br>";
    }

    if ($base_rectangulo == "" || $altura_rectangulo == ""){

    } else {
        $area_rectangulo = $base_rectangulo * $altura_rectangulo;
        echo "El área del rectangulo es de {$area_rectangulo}";
    }

?>