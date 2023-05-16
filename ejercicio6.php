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
    <a href="ejercicio7.php">Ejercicio 7</a>
    <a href="ejercicio8.php">Ejercicio 8</a>
    <a href="ejercicio9.php">Ejercicio 9</a>
    <a href="ejercicio10.php">Ejercicio 10</a>
    <br><br>
    <form action="ejercicio6.php" method="post">
        <label>Nombre del estudiante 1</label>
        <input type="text" name="nombre1">
        <br>

        <label>Genero del estudiante</label>
        <select name="genero1">
            <option value="hombre">H</option>
            <option value="mujer">M</option>
        </select>
        <br>

        <label>Nota definitiva</label>
        <input type="number" step="0.01" name="definitiva1">
        <br><br>

        <label>Nombre del estudiante 2</label>
        <input type="text" name="nombre2">
        <br>

        <label>Genero del estudiante</label>
        <select name="genero2">
            <option value="hombre">H</option>
            <option value="mujer">M</option>
        </select>
        <br>

        <label>Nota definitiva</label>
        <input type="number" step="0.01" name="definitiva2">
        <br><br>

        <label>Nombre del estudiante 3</label>
        <input type="text" name="nombre3">
        <br>

        <label>Genero del estudiante</label>
        <select name="genero3">
            <option value="hombre">H</option>
            <option value="mujer">M</option>
        </select>
        <br>

        <label>Nota definitiva</label>
        <input type="number" step="0.01" name="definitiva3">
        <br><br>

        <label>Nombre del estudiante 4</label>
        <input type="text" name="nombre4">
        <br>

        <label>Genero del estudiante</label>
        <select name="genero4">
            <option value="hombre">H</option>
            <option value="mujer">M</option>
        </select>
        <br>

        <label>Nota definitiva</label>
        <input type="number" step="0.01" name="definitiva4">
        <br><br>

        <input type="submit">
        <br><br>
    </form>
</body>
</html>

<?php
    $definitiva_1 = $_POST["definitiva1"];
    $definitiva_2 = $_POST["definitiva2"];
    $definitiva_3 = $_POST["definitiva3"];
    $definitiva_4 = $_POST["definitiva4"];
    $genero_1 = $_POST["genero1"];
    $genero_2 = $_POST["genero2"];
    $genero_3 = $_POST["genero3"];
    $genero_4 = $_POST["genero4"];
    $hombres = 0;
    $mujeres = 0;

    if ($definitiva_1 > $definitiva_2){
        if ($definitiva_1 > $definitiva_3){
            if ($definitiva_1 > $definitiva_4){
                echo "{$_POST["nombre1"]} es el/la estudiante con mayor nota con un promedio de {$definitiva_1}<br>";
            } else if ($definitiva_1 == $definitiva_4){
                echo "{$_POST["nombre1"]} y {$_POST["nombre4"]} son los estudiantes con mayor nota con un promedio de {$definitiva_1}<br>";
            } 
        } else if ($definitiva_1 == $definitiva_3){
            echo "{$_POST["nombre1"]} y {$_POST["nombre3"]} son los estudiantes con mayor nota con un promedio de {$definitiva_1}<br>";
        }
    } else if ($definitiva_1 == $definitiva_2){
        echo "{$_POST["nombre1"]} y {$_POST["nombre2"]} son los estudiantes con mayor nota con un promedio de {$definitiva_1}";
    } else if ($definitiva_2 > $definitiva_3){
        if ($definitiva_2 > $definitiva_4){
            echo "{$_POST["nombre2"]} es el/la estudiante con mayor nota con un promedio de {$definitiva_2}<br>";
        } else if ($definitiva_2 == $definitiva_4){
            echo "{$_POST["nombre2"]} y {$_POST["nombre4"]} son los estudiantes con mayor nota con un promedio de {$definitiva_2}<br>";   
        }
    } else if ($definitiva_3 > $definitiva_4){
        echo "{$_POST["nombre3"]} es el/la estudiante con mayor nota con un promedio de {$definitiva_3}<br>";
    } else if ($definitiva_3 == $definitiva_4){
        echo "{$_POST["nombre3"]} y {$_POST["nombre4"]} son los estudiantes con mayor nota con un promedio de {$definitiva_3}<br>";
    } else {
        echo "{$_POST["nombre4"]} es el/la estudiante con mayor nota con un promedio de {$definitiva_4}<br>";
    }

    if ($definitiva_1 < $definitiva_2){
        if ($definitiva_1 < $definitiva_3){
            if ($definitiva_1 < $definitiva_4){
                echo "{$_POST["nombre1"]} es el/la estudiante con menor nota con un promedio de {$definitiva_1}<br>";
            } else if ($definitiva_1 == $definitiva_4){
                echo "{$_POST["nombre1"]} y {$_POST["nombre4"]} son los estudiantes con menor nota con un promedio de {$definitiva_1}<br>";
            } 
        } else if ($definitiva_1 == $definitiva_3){
            echo "{$_POST["nombre1"]} y {$_POST["nombre3"]} son los estudiantes con menor nota con un promedio de {$definitiva_1}<br>";
        }
    } else if ($definitiva_2 < $definitiva_3){
        if ($definitiva_2 == $definitiva_4){
            echo "{$_POST["nombre2"]} y {$_POST["nombre4"]} son los estudiantes con menor nota con un promedio de {$definitiva_2}<br>";
        } else if ($definitiva_2 > $definitiva_4){
            echo "{$_POST["nombre2"]} es el/la estudiante con menor nota con un promedio de {$definitiva_2}<br>";
        }
    } else if ($definitiva_3 < $definitiva_4){
        echo "{$_POST["nombre3"]} es el/la estudiante con menor nota con un promedio de {$definitiva_3}<br>";
    } else if ($definitiva_3 == $definitiva_4){
        echo "{$_POST["nombre3"]} y {$_POST["nombre4"]} son los estudiantes con menor nota con un promedio de {$definitiva_3}<br>";
    } else {
        echo "{$_POST["nombre4"]} es el/la estudiante con menor nota con un promedio de {$definitiva_4}<br>";
    }

    if ($genero_1 == "hombre"){
        $hombres++; 
    } else {
        $mujeres++;
    }

    if ($genero_2 == "hombre"){
        $hombres++;
    } else {
        $mujeres++;
    }

    if ($genero_3 == "hombre"){
        $hombres++;
    } else {
        $mujeres++;
    }

    if ($genero_4 == "hombre"){
        $hombres++;
    } else {
        $mujeres++;
    }

    echo "En el salon hay {$hombres} hombres y {$mujeres} mujeres";
?>