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
    <a href="ejercicio5.php">Ejercicio 5</a>
    <a href="ejercicio6.php">Ejercicio 6</a>
    <a href="ejercicio7.php">Ejercicio 7</a>
    <a href="ejercicio8.php">Ejercicio 8</a>
    <a href="ejercicio9.php">Ejercicio 9</a>
    <a href="ejercicio10.php">Ejercicio 10</a>
    <br><br>
    <form action="ejercicio4.php" method="post">
        <label>Nombre de la primera persona</label>
        <input type="text" name="nombre1">
        <br>

        <label>Edad</label>
        <input type="number" name="edad1">
        <br><br>

        <label>Nombre de la segunda persona</label>
        <input type="text" name="nombre2">
        <br>

        <label>Edad</label>
        <input type="number" name="edad2">
        <br><br>

        <label>Nombre de la tercera persona</label>
        <input type="text" name="nombre3">
        <br>

        <label>Edad</label>
        <input type="number" name="edad3">
        <br><br>

        <input type="submit">
    </form>
</body>
</html>

<?php
    $edad_1 = $_POST["edad1"];
    $edad_2 = $_POST["edad2"];
    $edad_3 = $_POST["edad3"];

    if ($edad_1 > $edad_2){
        if ($edad_1 > $edad_3){
            echo "{$_POST["nombre1"]} es el/la mayor con {$edad_1} años";
        } else if ($edad_1 == $edad_3){
            echo "{$_POST["nombre1"]} y {$_POST["nombre3"]} son los mayores del grupo con {$edad_1} años";
        }
    } else if ($edad_2 > $edad_3){
        echo "{$_POST["nombre2"]} es el/la mayor con {$edad_2} años";
    } else if ($edad_2 == $edad_3){
        echo "{$_POST["nombre2"]} y {$_POST["nombre3"]} son los mayores del grupo con {$edad_2} años";
    } else {
        echo "{$_POST["nombre3"]} es el/la mayor del grupo con {$edad_3} años";
    }
?>