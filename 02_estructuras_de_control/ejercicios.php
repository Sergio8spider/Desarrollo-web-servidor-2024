<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        error_reporting( E_ALL );
        ini_set( "display_errors", 1 );    
    ?>
</head>
<body>  
    <!--EJERCICIO 1: MOSTRAR LA FECHA ACTUAL CON EL SIGUIENTE FORMATO:
        Viernes 27 de Septiembre de 2024
    UTILIZAR LAS ESTRUCTURAS DE CONTORL NECESARIAS-->
    <h1>Ejercicio 1</h1>
    <?php 
        $dia=date("l");
        $dia_espanol=match ($dia) {
            "Monday" => "Lunes",
            "Tuesday" =>"Martes",
            "Wednesday" => "Miercoles",
            "Thursday" => "Jueves",
            "Friday" => "Viernes",
            "Saturday" => "Sabado",
            "Sunday"=>"Domingo"
        };
        $num=(int)date("d");
        $mes=date("F");
        $mes_espanol=match ($mes) {
            "January" => "Enero",
            "February" =>"Febrero",
            "March" => "Marzo",
            "April" => "Abril",
            "May" => "Mayo",
            "June" => "Junio",
            "July"=>"Julio",
            "August"=>"Agosto",
            "September"=>"Septiembre",
            "October"=>"Octubre",
            "November"=>"Noviembre",
            "December"=>"Diciembre"
        };
        $año=date("Y");
        echo "<p>$dia_espanol $num de $mes_espanol de $año</p>";

        ?> 
        <h1>Ejercicio 2</h1>
        <!--EJERCICIO 2: MOSTRAR EN UNA LISTA LOS NUMEROS MULTIPLOS DE 3 USANDO WHILE E IF-->
        <ul>
        <?php
        $i=1;
        while($i<=100):
            if($i%3==0){
                echo "<li>$i</li>";
            }
            $i++;
        endwhile;
        
        ?> 
        </ul>

        <!--EJERCICIO 3: CALCULAR LA SUMA DE LOS NUMEROS PARES ENTRE 1 Y 20-->
        <h1>Ejercicio 3</h1>
        <?php
        $i=1;
        $suma=0;
        while($i<=20):
            if($i%2==0){
                $suma+=$i;               
            }
            $i++;
        endwhile;
        echo "<p>La suma es $suma</p>";
        ?>


         <!--EJERCICIO 4: CALCULAR EL FACTORIAL DE 6 CON WHILE-->
         <h1>Ejercicio 4</h1>
         <?php
        $factorial=6;
        $indice=1;
        $resultado=1;
        while($indice<=$factorial):
            $resultado*=$indice;
            $indice++;
        endwhile;
        echo "<p>El factorial de 6 es $resultado</p>";
        ?>

        <!--EJERCICIO 5: MUESTRE POR PANTALLA LOS 50 PRIMEROS NUMEROS PRIMOS-->
        <h1>Ejercicio 5, numeros primos</h1>
        <ol>
        <?php
        $contador=0;
        
        for($numero=2;$contador<50;$numero++){
        for($i = 2; $i < $numero; $i++)
            if($numero%$i == 0){
                break;
            }
            if($numero==$i){
                echo "<li>$numero <br></li>";
                $contador++;
            }
        }
        ?>
        </ol>
    
</body>
</html>