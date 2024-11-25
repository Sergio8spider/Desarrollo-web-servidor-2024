<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="estilos.css" rel="stylesheet" type="text/css">
    <?php
        error_reporting( E_ALL );
        ini_set( "display_errors", 1 );    
    ?>
</head>
<body>
    <?php
        $videojuegos=[
            ["Disco Elysium","RPG",9.99],
            ["Dragon Ball Z Kakarot","Accion",59.99],
            ["Persona 3","RPG",24.99],
            ["Commando 2","Estrategia",4.99],
            ["Hollow Knight","Metroidvania",9.99],
            ["Stardew valley","Gestion de recursos",7.99]
        ];

        print_r($videojuegos);

        $nuevo_videojuego=["Octopath Traveler","RPG",29.95];    
        array_push($videojuegos,$nuevo_videojuego);
        
        array_push($videojuegos,["Ender Lilies","Metroidvania",9.95]);

        array_push($videojuegos,["Dota 2","MOBA",0]);
        array_push($videojuegos,["Fall Guys","Plataforma",0]);
        array_push($videojuegos,["Rocket League","Deporte",0]);
        array_push($videojuegos,["Lego Fortnite","Accion",0]);

        for($i=0; $i<count($videojuegos); $i++){
            $videojuegos[$i][3]="X";
            if ($videojuegos[$i][2]==0){
                $videojuegos[$i][3]="Gratis";
            }else{
                $videojuegos[$i][3]="No gratis";
            }
        };

        //unset($videojuegos[3]);
        //$videojuegos=array_values($videojuegos);
        //print_r($videojuegos);

        $_titulo=array_column($videojuegos,0);
        $_categoria=array_column($videojuegos,1);
        $_precio=array_column($videojuegos,2);
        
        //si fuera descendente, SORT_DESC
        array_multisort($_titulo,SORT_ASC,$videojuegos);

        $_titulo=array_column($videojuegos,0);
        $_categoria=array_column($videojuegos,1);
        $_precio=array_column($videojuegos,2);

        array_multisort($_categoria,SORT_ASC,
                        $_precio,SORT_ASC,
                        $_titulo,SORT_DESC,
                        $videojuegos);
    ?>
    <table>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Categoria</th>
                <th>Precio</th>
                <th>Gratis</th>
            </tr>
        </thead>
        <tbody>
                <?php
                    foreach($videojuegos as $videojuego){
                        //echo $videojuego[0];
                        //echo "<br>";
                        list ($titulo,$categoria,$precio,$gratis)=$videojuego;
                        echo "<tr>";
                        echo "<td>$titulo</td>";
                        echo "<td>$categoria</td>";
                        echo "<td>$precio</td>";
                        echo "<td>$gratis</td>";
                        echo "</tr>";
                    }
                ?>
        </tbody>
    </table>
</body>
</html>