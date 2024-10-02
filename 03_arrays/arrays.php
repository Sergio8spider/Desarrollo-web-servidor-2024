<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    <?php
        error_reporting( E_ALL );
        ini_set( "display_errors", 1 );    
    ?>
    <link href="estilos.css" rel="stylesheet" type="text/css">
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
    /* $animales= array(
        "A01" => "Perro",
        "A02" =>"Gato",
        "A03" =>"Ornitorrinco",
        "A04" =>"Suricato",
        "A05" =>"Capibara"
    ); */

    print_r($animales);
    echo "<br>";
    //echo "<p>" . $animales[3] . "</p>";

    $animales[2]="Koala";
    print_r($animales);
    echo "<br>";
    $animales[6]="Iguana";
    print_r($animales);
    echo "<br>";
    $animales["A01"]="Elefante";
    print_r($animales);
    echo "<br>";
    array_push($animales,"Morsa","Foca");
    print_r($animales);
    echo "<br>";
    $animales[]="Ganso";
    print_r($animales);
    echo "<br>";
    unset($animales[1]);

    print_r($animales);
    echo "<br>";

    $animales=array_values($animales);

    $cantidad_animales=count($animales);
    echo "<h3>Hay $cantidad_animales animales</h3>";

    echo "<h3>Lista de animales con FOR</h3>";
    echo "<ol>";
    for($i=0;$i<count($animales);$i++){
        echo "<li>".$animales[$i]."</li>";
    }
    echo "</ol>";

    echo "<h3>Lista de animales con WHILE</h3>";
    echo "<ol>";
    $i=0;
    while($i<$cantidad_animales){
        echo "<li>".$animales[$i]."</li>";
        $i++;
    };
    echo "</ol>";

    print_r($animales);
    echo "<br>";
    
    /**
     *  "4312 TDZ => "Audi TT"
     *  "1122" FFF=> "Merecedes CLR"
     *  
     *  CREAR EL ARRAY CON TRES COCHES
     *  
     *  AÑADIR 2 COCHES CON SUS MATRICULAS
     * 
     *  AÑADIR 1 COCHE SIN MATRICULA
     *  
     *  BORAR EL COCHE SIN MATRICULA
     * 
     *  RESETEAR LAS CLAVES Y ALMACENAR EL RESULTADO EN OTRO ARRAY
     */

    $coches= array(
        "7777 VWS" => "Zentorno",
        "6166 DRP" =>"T20",
        "2359 LYS" =>"Citroen Picasso"
    );
    $coches["8124 PWQ"]="X80 Proto";
    $coches["2374 PÑQ"]="Kuruma";
    $coches[]="Pau Cubarsí";
    unset($coches[0]);

    print_r($coches);
    echo "<br>";


    $resultado=array_values($coches);

    

    print_r($resultado);
    echo "<br>";

    echo "<h3>Lista de coche con FOREACH</h3>";
    echo "<ol>";
    foreach($coches as $coche){
        echo "<li>$coche</li>";
    }
    echo "</ol>";

    echo "<h3>Lista de coche con FOREACH con CLAVE</h3>";
    echo "<ol>";
    foreach($coches as $matricula => $coche){
        echo "<li>$matricula, $coche</li>";
    }
    echo "</ol>";
    ?>

    <table>
        <caption>Coches</caption>
            <thead>
                <tr>
                    <th>Matricula</th>
                    <th>Coche</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                        foreach($coches as $matricula => $coche){
                            echo "<tr>";
                            echo "<td>$matricula</td>";
                            echo "<td>$coche</td>";
                            echo "</tr>";
                        }
                    ?>
            </tbody>
    </table>
    
    
</body>
</html>