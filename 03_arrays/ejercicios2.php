<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="estilos.css" rel="stylesheet" type="text/css">
</head>
<body>
    <!--
        EJERCICIO 1

        Desarrollo web en entorno servidor => Alejandra
        Desarrollo webn en entorno cliente => Jose Miguel
        Diseño den interfaces web => Jose Miguel
        Despliegue de aplicaciones => Jaime
        Empresa e iniciativa emprendedora => Andrea
        Ingles => Virginia

        mostrarlo en una tabla
    --> 
    <?php
        $array=array(
            "Desarrollo web en entorno servidor" => "Alejandra",
            "Desarrollo webn en entorno cliente" => "Jose Miguel",
            "Diseño den interfaces web" => "Jose Miguel",
            "Despliegue de aplicaciones" => "Jaime",
            "Empresa e iniciativa emprendedora" => "Andrea",
            "Ingles" => "Virginia"
        );
    ?>

    <table>
        <caption>EJERCICIO 1</caption>
            <thead>
                <tr>
                    <th>Asignatura</th>
                    <th>Profesor</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                        foreach($array as $asignatura => $profesor){
                            echo "<tr>";
                            echo "<td>$asignatura</td>";
                            echo "<td>$profesor</td>";
                            echo "</tr>";
                        }
                    ?>
            </tbody>
    </table>
    
    <!--
        EJERCICIO 2

        Francisco => 3
        Daniel => 5
        Aurora=> 7
        Luis => 7
        Samuel => 9

        MOSTRAR EN UNA TABLA CON 3 COLUMNAS
        -COLUMNA 1: ALUMNO
        -COLUMNA 2:NOTA
        -COLUMNA 3: SI NOTA < 5, SUSPENSO, ELSE, APROBADO
    --> 
        <?php
            $array=array(
                "Francisco" => 3,
                "Daniel" => 5,
                "Aurora"=> 7,
                "Luis" => 7,
                "Samuel" => 9
            );
    ?>
        <table>
        <caption>EJERCICIO 2</caption>
            <thead>
                <tr>
                    <th>Alumno</th>
                    <th>Nota</th>
                    <th>Calificacion</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                        foreach($array as $alumno => $nota){
                            echo "<tr>";
                            echo "<td>$alumno</td>";
                            echo "<td>$nota</td>";
                            if($nota >= 5 && $nota<=6){
                                echo "<td class='aprobado'>Aprobado</td>";
                            }elseif($nota >= 5 && $nota <= 8){
                                echo "<td class='notable'>Notable</td>";
                            }
                            elseif($nota >= 9 && $nota <= 10){
                                echo "<td class='sobresaliente'>Sobresaliente</td>";
                            }else{
                                echo "<td class='suspenso'>Suspenso</td>";
                            }
                            
                            echo "</tr>";
                        }
                    ?>
            </tbody>
    </table>

</body>
</html>