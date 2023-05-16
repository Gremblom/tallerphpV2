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
    <a href="ejercicio6.php">Ejercicio 6</a>
    <a href="ejercicio7.php">Ejercicio 7</a>
    <a href="ejercicio8.php">Ejercicio 8</a>
    <a href="ejercicio9.php">Ejercicio 9</a>
    <a href="ejercicio10.php">Ejercicio 10</a>
    <br><br>
    <form action="ejercicio5.php" method="post">
        <label>Ingrese el primer numero</label>
        <input type="number" name="numero1">
        <br><br>

        <label>Ingrese el segundo numero</label>
        <input type="number" name="numero2">
        <br><br>

        <input type="submit">
    </form>
</body>
</html>

<?php
    $numero_1 = $_POST["numero1"];
    $numero_2 = $_POST["numero2"];

    if($numero_1 > $numero_2){
        $suma = $numero_1 + $numero_2;
        $resta = $numero_1 - $numero_2;
        echo "La suma de los numeros es {$suma} y su resta es {$resta}";
    } else if ($numero_1 == $numero_2){
        echo "Por favor ingrese dos numeros distintos";
    } else {
        $multiplicacion = $numero_1 * $numero_2;
        $division = $numero_2 / $numero_1;
        echo "La multiplicacion de los numeros es {$multiplicacion} y su division es {$division}";
    }
?>