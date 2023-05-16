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
    <a href="ejercicio8.php">Ejercicio 8</a>
    <a href="ejercicio9.php">Ejercicio 9</a>
    <a href="ejercicio10.php">Ejercicio 10</a>
    <br><br>
    <form action="ejercicio7.php" method="post">
        <label>Ingrese su primer producto</label>
        <input type="text" name="producto1">
        <br>

        <label>Ingrese el precio</label>
        <input type="number" step="0.01" name="precio1">
        <br><br>

        <label>Ingrese su segundo producto</label>
        <input type="text" name="producto2">
        <br>

        <label>Ingrese el precio</label>
        <input type="number" name="precio2" step="0.01">
        <br><br>

        <label>Ingrese el tercer producto</label>
        <input type="text" name="producto3">
        <br>

        <label>Ingrese el precio</label>
        <input type="number" name="precio3" step="0.01">
        <br><br>

        <input type="submit">
    </form>
</body>
</html>

<?php
    $producto_1 = $_POST["producto1"];
    $producto_2 = $_POST["producto2"];
    $producto_3 = $_POST["producto3"];
    $precio_1 = $_POST["precio1"];
    $precio_2 = $_POST["precio2"];
    $precio_3 = $_POST["precio3"];
    $suma;

    if ($producto_1 == "" || $producto_2 == "" || $producto_3 == "" ){
        if ($precio_1 == "" || $precio_2 == "" || $precio_3 == ""){
            echo "Todos los campos son o0bligatorios";
        }
    } else {
        $suma = $precio_1 + $precio_2 + $precio_3;
        echo "{$producto_1} costó {$precio_1} <br>
        {$producto_2} costó {$precio_2} <br>
        {$producto_3} costó {$precio_3} <br>
        El total fue de {$suma}";
    }
?>