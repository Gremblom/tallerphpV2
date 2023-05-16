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
    <a href="ejercicio4.php">Ejercicio 4</a>
    <a href="ejercicio5.php">Ejercicio 5</a>
    <a href="ejercicio6.php">Ejercicio 6</a>
    <a href="ejercicio7.php">Ejercicio 7</a>
    <a href="ejercicio8.php">Ejercicio 8</a>
    <a href="ejercicio9.php">Ejercicio 9</a>
    <a href="ejercicio10.php">Ejercicio 10</a>
    <br><br>
    <form action="ejercicio3.php" method="post">
        <label>Resistencia del circuito en amperios</label>
        <input type="number" step="0.01" name="resistencia">
        <br><br>

        <label>Intensidad de la corriente en ohmios</label>
        <input type="number" step="0.01" name="intensidad">
        <br><br>

        <input type="submit">
    </form>
</body>
</html>

<?php
    $resistencia = $_POST["resistencia"];
    $intensidad = $_POST["intensidad"];

    $voltaje = $resistencia * $intensidad;

    echo "El voltaje del circuito es de {$voltaje} V";
?>