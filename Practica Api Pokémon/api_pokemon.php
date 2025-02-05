<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
    if(isset($_GET["cantidad"])){
        $cantidad = $_GET["cantidad"];
    }else{
        $cantidad = 5;
    }
    if(isset($_GET["offset"])){
        $offset = $_GET["offset"];
    }else{
        $offset = 0;
    }
    
    //API GENERAL
    $apiGeneral = "https://pokeapi.co/api/v2/pokemon?offset=$offset&limit=$cantidad";
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $apiGeneral);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $respuesta = curl_exec($curl);
    curl_close($curl);

    $datos = json_decode($respuesta, true);
    $pokemons = $datos["results"];
    $next = $datos["next"];
    $previous = $datos["previous"];

    ?>
</body>
    <table class="table">
        <thead class="thead-dark">
            <h3>Buscar</h1>
            <form action="" method="get">
                <label for="cantidad">Introduce cantidad de pokémons: </label>
                <input type="text" name="cantidad">
                <input type="submit" value="Buscar" class="btn btn-primary"><br><br>
            </form>
            <h1>Tabla</h1>
            <tr>
                <th scope="col">Pokémon</th>
                <th scope="col">Imagen</th>
                <th scope="col">Tipos</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($pokemons as $pokemon) { ?>
                    <tr>
                        <td>
                            <?php echo ucfirst($pokemon["name"])?>
                        </td>
                        <?php
                            //API 2
                            $api2 = $pokemon["url"];
                            $curl = curl_init();
                            curl_setopt($curl, CURLOPT_URL, $api2);
                            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                            $respuesta = curl_exec($curl);
                            curl_close($curl);
                        
                            $datos2 = json_decode($respuesta, true);
                            $tipos = $datos2["types"];
                        ?>
                        <td>
                            <img width="100px" src="<?php echo $datos2["sprites"]["front_default"]?>">
                        </td>
                        <td>
                            <?php foreach($tipos as $tipo) { 
                                echo ucfirst($tipo["type"]["name"]." ");
                            } ?>
                        </td>
                <?php } ?>
        </tbody>
    </table>
    <?php
        if ($previous) { ?>
            <?php 
            $siguienteCantidad -= $cantidad; 
            if($siguienteCantidad < 0){
                $siguienteCantidad = 0;
            }?>
            <?php $nuevoEnlace = "./api_pokemon.php?offset=".$offset-$cantidad."&cantidad=$cantidad"; ?>
            <a href="<?php echo $nuevoEnlace ?>">Anterior</a>
        <?php }
        if ($next) { ?>
            <?php
            $siguienteCantidad += $cantidad; 
            if($siguienteCantidad > count($pokemons)){
                $siguienteCantidad = count($pokemons);
            }?>
            <?php $nuevoEnlace = "./api_pokemon.php?offset=".$cantidad+$offset."&cantidad=$cantidad"; ?>
            <a href="<?php echo $nuevoEnlace ?>">Siguiente</a>
        <?php } ?>
</html>