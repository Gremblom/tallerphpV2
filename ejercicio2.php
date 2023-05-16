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
    <a href="ejercicio3.php">Ejercicio 3</a>
    <a href="ejercicio4.php">Ejercicio 4</a>
    <a href="ejercicio5.php">Ejercicio 5</a>
    <a href="ejercicio6.php">Ejercicio 6</a>
    <a href="ejercicio7.php">Ejercicio 7</a>
    <a href="ejercicio8.php">Ejercicio 8</a>
    <a href="ejercicio9.php">Ejercicio 9</a>
    <a href="ejercicio10.php">Ejercicio 10</a>
    <br><br>
    <form action="ejercicio2.php" method="post">
        <label>Por favor ingrese un numero entero</label>
        <input type="number" name="numero">
        <br><br>

        <input type="submit">
    </form>
</body>
</html>

<?php
    $numero = $_POST["numero"];

    if ($numero % 2 == 0){
        if ($numero > 10){
            echo "{$numero} es par y mayor a 10";
        } else if ($numero < 10){
            echo "{$numero} es par y menor que 10";
        } else {
            echo "{$numero} es par e igual a 10";
        }
    } else if ($numero % 2 != 0){
        if ($numero > 10){
            echo "{$numero} es impar y mayor a 10";
        } else if ($numero < 10){
            echo "{$numero} es impar y menor que 10";
        } else {
            echo "{$numero} es impar e igual a 10";
        }
    }
?>