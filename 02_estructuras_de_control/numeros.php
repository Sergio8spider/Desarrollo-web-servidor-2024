<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numero=2;

        #Forma 1 if
        if($numero>0){
            echo "<p>1 El numero $numero es mayor que 0</p>";
        }elseif($numero==0){
            echo "<p>1 El numero $numero es igual a 0</p>";
        }else{
            echo "<p>1 El numero $numero es menor que 0</p>";
        }

        #Forma 2 if
        if($numero>0)echo "<p>2 El numero $numero es mayor que 0</p>";
        elseif($numero==0) echo "<p>2 El numero $numero es igual a 0</p>";
        else echo "<p>2 El numero $numero es menor que 0</p>";

        #Forma 3 if
        if($numero>0):
            echo "<p>1 El numero $numero es mayor que 0</p>";
        elseif($numero==0):
            echo "<p>1 El numero $numero es igual a 0</p>";
        else:
            echo "<p>1 El numero $numero es menor que 0</p>";
        endif;

        #Rangos [-10,0),[0,10],(10,20]
        $num=-7;

        #and o && para la conjuncion

        #Forma 1
        if($num >= -10 and $num <0){
            echo "<p>El numero $num esta en el rango [-10,0)</p>";
        }elseif($num >= 0 and $num <=10){
            echo "<p>El numero $num esta en el rango [0,10]</p>";
        }elseif($num > 10 and $num <=20){
            echo "<p>El numero $num esta en el rango (10,20]</p>";
        }elseif($num > 10 and $num <=20){
            echo "<p>El numero $num esta en el rango (10,20]</p>";
        }else echo "<p>El numero $num no esta en el rango";
        
        #Forma 2
        if($num >= -10 and $num <0) echo "<p>El numero $num esta en el rango [-10,0)</p>";
        elseif($num >= 0 and $num <=10) echo "<p>El numero $num esta en el rango [0,10]</p>";
        elseif($num > 10 and $num <=20) echo "<p>El numero $num esta en el rango (10,20]</p>";
        else echo "<p>El numero $num no esta en el rango";

        #Forma 3
        if($num >= -10 and $num <0):
            echo "<p>El numero $num esta en el rango [-10,0)</p>";
        elseif($num >= 0 and $num <=10):
            echo "<p>El numero $num esta en el rango [0,10]</p>";
        elseif($num > 10 and $num <=20):
            echo "<p>El numero $num esta en el rango (10,20]</p>";
        elseif($num > 10 and $num <=20):
            echo "<p>El numero $num esta en el rango (10,20]</p>";
        else: 
            echo "<p>El numero $num no esta en el rango";
        endif;

        /*COMPROBAR DE TRES FORMAS DIFERENTES, CON LA ESTRUCTURA IF,
        SI EL NUMERO ALEATORIO TIENE 1,2 O 3 DIGITOS*/
        $digitos=null;

        $numero_aleatorio=rand(1,200);
        if ($numero_aleatorio >0 && $numero_aleatorio <10) {
            $digitos=1;
        }elseif($numero_aleatorio >=10 && $numero_aleatorio <100){
            $digitos=2;
        }elseif($numero_aleatorio >=100 && $numero_aleatorio <=200){
            $digitos=3;
        }else{
            $digitos="ERROR";
        }

        $digitos_texto="digitos";
        if($digitos==1)$digitos_texto="digito";

        echo "<p>El numero aleatorio $numero_aleatorio tiene $digitos $digitos_texto";

        //$numero_aleatorio_decimales=rand(10,100)/10;

        $n=rand(1,3);

        switch($n){
            case 1:
                echo "El numero es 1";
                break;
            case 2:
                echo "El numero es 2";
                break;
            default:
                echo "El numero es 3";
                break;
        }

    ?>
</body>
</html>