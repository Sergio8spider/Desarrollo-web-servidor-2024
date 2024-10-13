<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio formulario 1</title>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    ?>
</head>

<body>
    <!--
        Realiza un formulario que reciba 3 números y devuelva el mayor de ellos.
    -->

    <form action="" method="post">
        <label for="numero1">Numero 1</label>
        <input type="text" name="mensaje" id="numero1">
        <br><br>
        <label for="numero2">Numero 2</label>
        <input type="text" name="mensaje2" id="numero2">
        <br><br>
        <label for="numero3">Numero 3</label>
        <input type="text" name="mensaje3" id="numero3">
        <br><br>
        <input type="submit" value="Enviar">
        <br><br>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST["mensaje"];
        $numero2 = $_POST["mensaje2"];
        $numero3 = $_POST["mensaje3"];
        $resultado;

        echo "<p>Formulario enviado</p>";

        if ($numero1 > $numero2 && $numero1 > $numero3) {
            $resultado = "El mayor es $numero1";
        } elseif ($numero2 > $numero1 && $numero2 > $numero3) {
            $resultado = "El mayor es $numero2";
        } elseif ($numero3 > $numero1 && $numero3 > $numero2) {
            $resultado = "El mayor es $numero3";
        } else {
            $resultado = "Hay varios numeros iguales";
        }
        echo "<h2>$resultado</h2>";
    }
    ?>
</body>

</html>