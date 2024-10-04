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
        $asignaturas=array(
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
                    krsort($asignaturas);
                        foreach($asignaturas as $asignatura => $profesor){
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
                        foreach($array as $alumno => $nota){?>
                            <tr>
                                <td>$alumno</td>
                                <td>$nota</td>
                                    <?php if($nota >= 5 && $nota<=6){?>
                                        <td class='aprobado'>Aprobado</td>
                                    <?php }elseif($nota >= 5 && $nota <= 8){?>
                                        <td class='notable'>Notable</td>
                                    <?php } elseif($nota >= 9 && $nota <= 10){?>
                                        <td class='sobresaliente'>Sobresaliente</td>
                                    <?php }else{?>
                                        <td class='suspenso'>Suspenso</td>
                                    <?php } ?>
                            </tr>
                    <?php } ?>
            </tbody>
    </table>
    /**Insertar dos nuevos estudiantes, con notas aletarorias entre 0 y 10
    Borrar un estudiante (el que peor os caiga) por la clave
    Mostrar en una nueva tabla todo ordenado por los nombres en orden alfabeticamente inversa
    Mostrar en una nueva tabla todo ordenador por la nota de 10 a 0 (prdem inverso)  */

</body>
</html>