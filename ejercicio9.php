<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
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
    <a href="ejercicio10.php">Ejercicio 10</a>
    <br><br>
    <form action="ejercicio9.php" method="post">
        <label>Ingrese el nombre de la primera atleta</label>
        <input type="text" name="nombre1">
        <br>

        <label>Ingrese el salto más largo de la atleta</label>
        <input type="number" name="salto1" step="0.01">
        <br><br>

        <label>Ingrese el nombre de la segunda atleta</label>
        <input type="text" name="nombre2">
        <br>

        <label>Ingrese el salto más largo de la segunda atleta</label>
        <input type="number" name="salto2" step="0.01">
        <br><br>

        <label>Ingrese el nombre de la tercera atleta</label>
        <input type="text" name="nombre3">
        <br>

        <label>Ingrese el salto más largo de la tercera atleta</label>
        <input type="number" name="salto3" step="0.01">
        <br><br>

        <input type="submit">
        <br>
</body>
</html>

<?php
    $salto_1 = $_POST["salto1"];
    $salto_2 = $_POST["salto2"];
    $salto_3 = $_POST["salto3"];
    $record = 15.50;

    if ($salto_1 == $salto_2 && $salto_1 == $salto_3){
        echo "Todas las atletas realizaron la misma distancia y deberán competir nuevamente";  
    } else {
        if ($salto_1 > $salto_2){
            if ($salto_1 > $salto_3){
                if ($salto_1 > $record){
                    echo "{$_POST["nombre1"]} rompió el record con un salto de  {$salto_1} metros <br>";
                } else {
                    echo "{$_POST["nombre1"]} ganó el torneo con un salto de {$salto_1} metros <br>";
                } 
            } else if ($salto_1 == $salto_3){
                if ($salto_1 > $record){
                    echo "{$_POST["nombre1"]} y {$_POST["nombre3"]} rompieron el record con un salto de  {$salto_1} metros cada una <br>";
                } else {
                    echo "{$_POST["nombre1"]} y {$_POST["nombre3"]} ganaron el torneo con un salto de {$salto_1} metros cada una <br>";
                } 
            }
        } else if ($salto_1 == $salto_2){
            if ($salto_1 > $record){
                echo "{$_POST["nombre1"]} y {$_POST["nombre2"]} rompieron el record con un salto de  {$salto_1} metros cada una <br>";
            } else {
                echo "{$_POST["nombre1"]} y {$_POST["nombre3"]} ganaron el torneo con un salto de {$salto_1} metros cada una <br>";
            } 
        } else if ($salto_2 > $salto_3){
            if ($salto_2 > $record){
                echo "{$_POST["nombre2"]} rompió el record con un salto de  {$salto_2} metros <br>";
            } else {
                echo "{$_POST["nombre2"]} ganó el torneo con un salto de {$salto_2} metros <br>";
            }
        } else if ($salto_2 == $salto_3){
            if ($salto_2 > $record){
                echo "{$_POST["nombre2"]} y {$_POST["nombre3"]} rompieron el record con un salto de  {$salto_2} metros cada una <br>";
            } else {
                echo "{$_POST["nombre2"]} y {$_POST["nombre3"]} ganaron el torneo con un salto de {$salto_2} metros cada una <br>";
            }  
        } else {
            if ($salto_3 > $record){
                echo "{$_POST["nombre3"]} rompió el record con un salto de  {$salto_3} metros <br>";
            } else {
                echo "{$_POST["nombre3"]} ganó el torneo con un salto de {$salto_3} metros <br>";
            } 
        }
    }
?>