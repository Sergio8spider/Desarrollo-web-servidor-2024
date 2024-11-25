<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio formulario 2</title>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    ?>
</head>

<body>
    <!--
        Realiza un formulario que reciba 3 números: a, b y c. Se mostrarán en una 
        lista los múltiplos de c que se encuentren entre a y b.

        Por ejemplo, si a = 3, b = 10, c = 2

        Los múltiplos de 2 entre 3 y 10 son: 4, 6, 8 y 10   
    -->

    <form action="" method="post">
        <label for="numero1">Rango A</label>
        <input type="text" name="mensaje" id="numero1">
        <br><br>
        <label for="numero2">Rango B</label>
        <input type="text" name="mensaje2" id="numero2">
        <br><br>
        <label for="numero3">Numero</label>
        <input type="text" name="mensaje3" id="numero3">
        <br><br>
        <input type="submit" value="Enviar">
        <br><br>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST["mensaje"];
        $b = $_POST["mensaje2"];
        $numero = $_POST["mensaje3"];
        $resultado;

        echo "<p>Formulario enviado</p>";

        for ($i = 0; $i <= $b; $i++) {
            echo "<ul>";
            $resultado = $numero * $i;
            if ($resultado <= $b && $resultado >= $a) {
                echo "<li>$resultado</li>";
            }
            echo "</ul>";
        }
    }
    ?>
</body>

</html>