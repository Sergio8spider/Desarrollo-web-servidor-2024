<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numero ="2";

        if($numero==2){
            echo"EXITO";
        }else{
            echo "NO EXITO";
        }

        if($numero===2){
            echo"EXITO";
        }else{
            echo "NO EXITO";
        }

        $numero=(int)$numero;//convierte a int

        if($numero===2){
            echo"EXITO";
        }else{
            echo "NO EXITO";
        }

        /*Dos iguales compara que lo escrito sea los mismo
        Tres iguales compara que sea lo mismo escrito y el mismo tipo
        */
        /*
        "2" == 2       "2" es igual a 2          
        "2" !== 2      "2" no es identico a 2
        2 === 2         2 si es identico a 2
        2 !== 2.0       2 no es identico a 2.0
         */

         $hora=(int)date("G");
         //var_dump($hora);//var_dump te dice el tipo

         /*
         SI $hora ENTRE 6 y 11 es MAÑANA
         SI $hora ENTRE 12 y 14 es MEDIODIA
         SI $hora ENTRE 15 y 20 es TARDE
         SI $hora ENTRE 21 y 0 es NOCHE
         SI $hora ENTRE 1 y 5 es MADRUGADA
         */

         if($hora <=6 && $hora>=11){
            echo "<p>La $numero es MAÑANA</p>";
         }elseif($hora <=12 && $hora>=14){
            echo "<p>La $numero es MEDIODIA</p>";
         }elseif($hora <=15 && $hora>=20){
            echo "<p>La $numero es TARDE</p>";
        }elseif($hora <=21 && $hora>=0){
            echo "<p>La $numero es NOCHE</p>";
        }elseif($hora <=1 && $hora>=5){
            echo "<p>La $numero es MADRUGADA</p>";
        }

        $hora_exacta=date("H:i:s");
        echo "<h2>$hora_exacta</h1>";

        $dia=date("l");
        echo "<h2>Hoy es dia $dia</h2>";

        /*
        TENEMOS CLASE LUJES, MIERCOLES Y VIERNES
        NO TENEMOS CLASE EL RESTO

        HACER UN SWITCH QUE DIGA SI HOY TENEMOD CLASE
        */
        switch($dia){
            case "Lunes":
            case "Wednesday":
            case "Monday":
                echo "Hoy tenemos clase";
                break;
            default:
                echo "Hoy no tenemos clase";
        }

    ?>
</body>
</html>