<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="ejercicio2.php">Ejercicio 2</a>
    <a href="ejercicio3.php">Ejercicio 3</a>
    <a href="ejercicio4.php">Ejercicio 4</a>
    <a href="ejercicio5.php">Ejercicio 5</a>
    <a href="ejercicio6.php">Ejercicio 6</a>
    <a href="ejercicio7.php">Ejercicio 7</a>
    <a href="ejercicio8.php">Ejercicio 8</a>
    <a href="ejercicio9.php">Ejercicio 9</a>
    <a href="ejercicio10.php">Ejercicio 10</a>
    <br><br>
    <form action="ejercicio1.php" method="post">
        <label>Nombre del alumno</label>
        <input type="text" name="nombre">
        <br><br>

        <label>Ingrese la primera nota</label>
        <input type="number" step="0.01" name="nota1">

        <label>Ingrese la segunda nota</label>
        <input type="number" step="0.01" name="nota2">

        <label>Ingrese la tercera nota</label>
        <input type="number" step="0.01" name="nota3">
        <br><br>

        <input type="submit">
    </form>
</body>
</html>

<?php
    $nota_1 = $_POST["nota1"];
    $nota_2 = $_POST["nota2"];
    $nota_3 = $_POST["nota3"];

    $promedio = ($nota_1 + $nota_2 + $nota_3) / 3;

    echo "Su promedio es {$promedio} <br>";

    if (3.9 >= $promedio){
        echo "El estudiante {$_POST["nombre"]} debe estudiar <br>";
    } else {
        echo "El estudiante {$_POST["nombre"]} está becado";
    }
?>