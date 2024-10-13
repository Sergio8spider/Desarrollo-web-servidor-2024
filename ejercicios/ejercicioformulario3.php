<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio formulario 3</title>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    ?>
</head>

<body>
    <!--
        Realiza un formulario que reciba dos números y devuelva todos los números 
        primos dentro de ese rango (incluidos los extremos).
    -->

    <form action="" method="post">
        <label for="numero1">Numero 1</label>
        <input type="text" name="mensaje" id="numero1">
        <br><br>
        <label for="numero2">Numero 2</label>
        <input type="text" name="mensaje2" id="numero2">
        <br><br>
        <input type="submit" value="Enviar">
        <br><br>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["mensaje"];
        $num2 = $_POST["mensaje2"];
        echo "<p>Formulario enviado<br></p>";

        echo "<h2>Los numeros primos entre $num1 y $num2 son:<br>";

        for ($num1; $num1 <= $num2; $num1++) {
            for ($j = 2; $j <= $num1; $j++) {
                if ($num1 % $j == 0) {
                    break;
                }

            }
            if ($num1 == $j) {
                echo "$num1<br>";
            }
        }
    }

    ?>
</body>

</html>