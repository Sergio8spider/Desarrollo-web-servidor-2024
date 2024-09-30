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
    <?php
    /**
     * TODOS LOS ARRAYS EM PPH SON ASOCIATIVOS, COMO LOS MAP EN JAVA
     * 
     * TIENEN PARES CLAVE-VALOR
     */

    $numeros=[5,10,9,6,7,4];
    print_r($numeros);
    echo "<br>";
    $animales=["Perro","Gato","Ornitorrinco","Suricato","Capibara"];
    $animales= array(
        "A01" => "Perro",
        "A02" =>"Gato",
        "A03" =>"Ornitorrinco",
        "A04" =>"Suricato",
        "A05" =>"Capibara"
    );
    print_r($animales);
    ?>
    
</body>
</html>