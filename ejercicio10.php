<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <a href="ejercicio1.php">Ejercicio 1</a>
    <a href="ejercicio2.php">Ejercicio 2</a>
    <a href="ejercicio3.php">Ejercicio 3</a>
    <a href="ejercicio4.php">Ejercicio 4</a>
    <a href="ejercicio5.php">Ejercicio 5</a>
    <a href="ejercicio6.php">Ejercicio 6</a>
    <a href="ejercicio7.php">Ejercicio 7</a>
    <a href="ejercicio8.php">Ejercicio 8</a>
    <a href="ejercicio9.php">Ejercicio 9</a>
    <br><br>
    <form action="ejercicio10.php" method="post">
        <label>Ingrese el primer numero</label>
        <input type="number" name="numero1">
        <br><br>

        <label>Ingrese el segundo numero</label>
        <input type="number" name="numero2">
        <br><br>

        <label>Ingrese el tercer numero</label>
        <input type="number" name="numero3">
        <br><br>

        <input type="submit">
        <br>
    </form>
</body>
</html>

<?php
    $numero_1 = $_POST["numero1"];
    $numero_2 = $_POST["numero2"];
    $numero_3 = $_POST["numero3"];

    if ($numero_1 == "" || $numero_2 == "" || $numero_3 == ""){
        echo "Por favor ingrese todos los numeros";
    } else {
        $sumatoria = $numero_1 + $numero_2 + $numero_3 + $numero_4;
        echo "La suma de todos los valores es {$sumatoria} <br>";
        if ($numero_1 > $numero_2){
            if ($numero_1 > $numero_3){
                echo "{$numero_1} es el mayor <br>";
            } else if ($numero_1 == $numero_3){
                echo "{$numero_1} es el mayor <br>";
            }
        } else if ($numero_2 > $numero_3){
            echo "{$numero_2} es el mayor <br>";
        } else if ($edad_2 == $edad_3){
            echo "{$numero_2} es el mayor <br>";
        } else {
            echo "{$numero_3} es el mayor <br>";
        }

        if ($numero_1 < $numero_2){
            if ($numero_1 < $numero_3){
                echo "{$numero_1} es el menor";
            } else if ($numero_1 == $numero_3){
                echo "{$numero_1} es el menor";
            }
        } else if ($numero_2 < $numero_3){
            echo "{$numero_2} es el menor";
        } else if ($edad_2 == $edad_3){
            echo "{$numero_2} es el menor";
        } else {
            echo "{$numero_3} es el menor";
        }
    }
?>