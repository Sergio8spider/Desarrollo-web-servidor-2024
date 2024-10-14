<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio dinero</title>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    ?>
</head>
<body>

    <form action="" method="post">
        <label for="dinero">Ingresa dinero</label>
        <input type="text" name="mensaje" id="dinero">
        <br><br>
        <input type="submit" value="Enviar">
        <br><br>
    </form>

    <?php
    /**
     * Primer tramo hasta 12.450 euros en el que se paga un 19%.
     * Segundo tramo hasta 20.199 euros con tipo del 24%
     * Tercer tramo hasta 35.199 euros con un 30%.
     * Cuarto tramo hasta 59.999 euros con un 37%
     * Quinto tramo hasta 299.999 euros con un 45%
     * Sexto tramo a partir de 300.000 euros de 47%.
     */
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bruto=$_POST["mensaje"];
        $neto=0;
    }
    ?>
</body>
</html>