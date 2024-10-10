<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
        CREAR UN FORMULARIO QUEREIBE EL NOMBRE Y LA EDAD DE UNA PERSONA

        SI LA EDAD ES MENOR QUE 18, SE MOSTRARA EL NOMBRE Y QYE ESMENOR DE EDAD

        SI LA EDAD ESTA EMTRE 18 Y 65, SE MOSTRARA EL NOMBRE Y QUE ES MAYOR DE EDAD

        SO LA EDAD ES MAS DE 65, SE MOSTARA EL NOMBRE Y QUE SE HA JUBILADO
    -->
    <form action="" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="mensaje" id="nombre">
        <br><br>
        <label for="edad">Edad</label>
        <input type="text" name="mensaje2" id="edad">
        <br><br>
        <input type="submit" value="Enviar">
        <br><br>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $nombre=$_POST["mensaje"];
        $edad=$_POST["mensaje2"];
        echo "formulario enviado <br>";

        $resultado =match(true){
            $edad<18 => ", es menor de edad.",
            $edad>=18  && $edad<65 => ", es mayor de edad.",
            $edad>=65 => ", se ha jubilado."
        };
        echo "<h2>$nombre $resultado </h2><br>";
    }
    ?>
</body>
</html>