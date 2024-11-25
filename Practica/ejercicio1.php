<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    ?>
</head>
<body>
    <?php
        $animes=[];

        array_push($animes,["My Hero Academia","Superpoderes"]);
        array_push($animes,["Dragon Ball","Ficcion"]);

        unset($animes[0]);
        $animes=array_values($animes);
    
        for($i=0; $i<count($animes); $i++){
            $animes[$i][2]=rand(1990,2030);
        };

        for($i=0; $i<count($animes); $i++){
            $animes[$i][3]=rand(1,99);
        };

        for($i=0; $i<count($animes); $i++){
            if ($animes[$i][2]>2024){
                $animes[$i][4]="Próximamente";
            }else{
                $animes[$i][4]="Ya disponible";
            }
        };

        $_genero=array_column($animes,1);
        $_fecha=array_column($animes,2);
        $_titulo=array_column($animes,0);

        array_multisort($_genero,SORT_DESC,
                    $_fecha,SORT_DESC,
                    $_titulo,SORT_DESC,
                    $animes);

    ?>

    <table>
    <thead>
        <tr>
            <th>Titulo</th>
            <th>Genero</th>
            <th>Año</th>
            <th>Episodios</th>
            <th>Disponibilidad</th>
        </tr>
    </thead>
    <tbody>
            <?php
                foreach($animes as $anime){
                    list ($titulo,$genero,$año,$episodios,$disponibilidad)=$anime;
                    echo "<tr>";
                    echo "<td>$titulo</td>";
                    echo "<td>$genero</td>";
                    echo "<td>$año</td>";
                    echo "<td>$episodios</td>";
                    echo "<td>$disponibilidad</td>";
                    echo "</tr>";
                }
            ?>
    </tbody>
    </table>
</body>
</html>