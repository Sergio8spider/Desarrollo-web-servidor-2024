<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo</title>
    <?php
        error_reporting( E_ALL );
        ini_set( "display_errors", 1 );    
    ?>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="mensaje">
        <input type="text" name="mensaje2">
        <input type="submit" value="Enviar">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        /**
         * Este codigo se ejecuta cuando el servidor recibe una peticion POST
         */
        $mensaje=$_POST["mensaje"];
        echo "formulario enviado";

        //añadir al formulario un campo de texto adicional para introducir un numero
        //mostrar el mensaje tantas veces como indique el numero
        $num=$_POST["mensaje2"];

        for($i=0; $i<$num; $i++){
            echo "<h1>$mensaje</h1>";
        }
    }
    ?>
</body>
</html>