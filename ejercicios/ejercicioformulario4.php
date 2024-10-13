<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio formulario 4</title>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    ?>
</head>

<body>
    <!--
        Realiza un formulario que funcione a modo de conversor de temperaturas. 
        Se introducirá en un campo de texto la temperatura, y luego tendremos un
        select para elegir las unidades de dicha temperatura, y otro select para 
        elegir las unidades a las que queremos convertir la temperatura.

        Por ejemplo, podemos introducir "10", y seleccionar "CELSIUS", y luego "FAHRENHEIT". 
        Se convertirán los 10 CELSIUS a su equivalente en FAHRENHEIT.

        En los select se podrá elegir entre: CELSIUS, KELVIN y FAHRENHEIT.

        Para convertir de ºC a ºF use la fórmula:   ºF = ºC x 1.8 + 32.
        Para convertir de ºF a ºC use la fórmula:   ºC = (ºF-32) ÷ 1.8.
        Para convertir de K a ºC use la fórmula:   ºC = K – 273.15
        Para convertir de ºC a K use la fórmula: K = ºC + 273.15.
        Para convertir de ºF a K use la fórmula: K = 5/9 (ºF – 32) + 273.15.
        Para convertir de K a ºF use la fórmula:   ºF = 1.8(K – 273.15) + 32.
    -->

    <form action="" method="post">
        <label for="numero">Numero</label>
        <input type="text" name="mensaje" id="numero">
        <br><br>
        <select name="select1">
            <option value="celsius">Celsius</option>
            <option value="kelvin">Kelvin</option>
            <option value="fahrenheit">Fahrenheit</option>
        </select><br><br>
        <select name="select2">
            <option value="celsius">Celsius</option>
            <option value="kelvin">Kelvin</option>
            <option value="fahrenheit">Fahrenheit</option>
        </select>
        <input type="submit" value="Enviar">
        <br><br>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["mensaje"];
        $actual = $_POST["select1"];
        $aconvertir = $_POST["select2"];
        echo "<p>Formulario enviado</p>";

        switch ($actual) {
            case "celsius":
                switch ($aconvertir) {
                    case "celsius":
                        echo "Has elegido de Celsius a Celsius. La temperatura es la misma";
                        break;
                    case "kelvin":
                        $num += 273.15;
                        echo "$num";
                        break;
                    case "fahrenheit":
                        $num = ($num * 1.8) + 32;
                        echo "$num";
                        break;
                }
                break;
            case "kelvin":
                switch ($aconvertir) {
                    case "celsius":
                        $num -= 273.15;
                        echo "$num";
                        break;
                    case "kelvin":
                        echo "Has elegido de Kelvin a Kelvin. La temperatura es la misma";
                        break;
                    case "fahrenheit":
                        $num = 1.8 * ($num - 273.15) + 32;
                        echo "$num";
                        break;
                }
                break;
            case "fahrenheit":
                switch ($aconvertir) {
                    case "celsius":
                        $num = ($num - 32) / 1.8;
                        echo "$num";
                        break;
                    case "kelvin":
                        $num = 5 / 9 * ($num - 32) + 273.15;
                        echo "$num";
                        break;
                    case "fahrenheit":
                        echo "Has elegido de Fahrenheit a Fahrenheit. La temperatura es la misma";
                        break;
                }

        }
    }

    ?>
</body>

</html>