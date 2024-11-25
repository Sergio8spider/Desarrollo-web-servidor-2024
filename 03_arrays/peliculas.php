<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
    <?php
        error_reporting( E_ALL );
        ini_set( "display_errors", 1 );    
    ?>
    <link href="estilos.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php
        $peliculas=[
            ["Karate a muerte en Torremolinos","Accion",1975],
            ["Sharknado 1-5","Accion",2015],
            ["Princesa por sorpresa 2","Comedia",2008],
            ["Temblores 4","Terror",2018],
            ["Cariño he encogido a los niños","Aventura",2001],
            ["Stuart Little","Infancia",2000]
        ];
        /**
         * AÑADIR CON UN RAND, LA DURACION DE CADA PELICULA COMO UNA NUEVA COLUMNA,
         * LA DURACION SERA UN NUMEROO ALEATORIO ENTRE 30 Y 240
         * 
         * AÑADIR COMO UNA NUEVA COLUMNA, EL TIPO DE PELICULA. EL TIPO SERA:
         * -CORTOMETRAJE, SI LA DURACION ES MENOR QUE 60
         * -LARGOMETRAJE, SI LA DURACION ES MAYOR O IGUAL QUE 60
         * 
         * MOSTRAR EN OTRA TABLA TODAS LAS COLUMNAS Y ORDENAR ADEMAS EN ESTE ORDEN:
         * -GENERO
         * -AÑO
         * -TITULO (TODO ALFABETICAMENTE, Y EL AÑO DE MAS RECIENTE A MAS ANTIGUO)
         */
        for($i=0; $i<count($peliculas); $i++){
            $peliculas[$i][3]=rand(30,240);
            if($peliculas[$i][3]<60){
                $peliculas[$i][4]="Cortometraje";
            }else{
                $peliculas[$i][4]="Largometraje";
            };
        };
    ?>
    

    <table>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Genero</th>
                <th>Fecha de lanzamiento</th>
            </tr>
        </thead>
        <tbody>
                <?php
                    foreach($peliculas as $pelicula){
                        list ($titulo,$categoria,$fecha)=$pelicula;
                        echo "<tr>";
                        echo "<td>$titulo</td>";
                        echo "<td>$categoria</td>";
                        echo "<td>$fecha</td>";
                        echo "</tr>";
                    }
                ?>
        </tbody>
    </table>
    <?php
    $_categoria=array_column($peliculas,1);
    $_fecha=array_column($peliculas,2);
    $_titulo=array_column($peliculas,0);

    array_multisort($_categoria,SORT_ASC,
                    $_fecha,SORT_DESC,
                    $_titulo,SORT_ASC,
                    $peliculas);
    ?>
    <table>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Genero</th>
                <th>Fecha de lanzamiento</th>
                <th>Duracion</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
                <?php
                    foreach($peliculas as $pelicula){
                        list ($titulo,$categoria,$fecha,$duracion,$tipo)=$pelicula;
                        echo "<tr>";
                        echo "<td>$titulo</td>";
                        echo "<td>$categoria</td>";
                        echo "<td>$fecha</td>";
                        echo "<td>$duracion</td>";
                        echo "<td>$tipo</td>";
                        echo "</tr>";
                    }
                ?>
        </tbody>
    </table>
</body>
</html>