<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rick and Morty</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <?php

    if(isset($_GET["cantidad"]) && isset($_GET["genero"]) && isset($_GET["especie"])){
        $cantidad = $_GET["cantidad"];
        $genero = $_GET["genero"];
        $especie = $_GET["especie"];
        $apiUrl =  "https://rickandmortyapi.com/api/character?gender=$genero&species=$especie";
    }else{
        $apiUrl =  "https://rickandmortyapi.com/api/character";
    }

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $apiUrl);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $respuesta = curl_exec($curl);
    curl_close($curl);

    $datos = json_decode($respuesta, true);
    $personajes = $datos["results"];  
    ?>
    <table class="table">
        <thead class="thead-dark">
            <h3>Buscar</h1>
            <form action="" method="get">
                <label for="cantidad">Cantidad de personajes</label>
                <input type="text" name="cantidad">
                <label for="genero">Género</label>
                <select name="genero" id="">
                    <option value="male">Hombre</option>
                    <option value="female">Mujer</option>
                </select>
                <label for="especie">Especie</label>
                <select name="especie" id="">
                    <option value="human">Humano</option>
                    <option value="alien">Alien</option>
                </select>
                <input type="submit" value="Filtrar">
            </form>
            <h1>Tabla</h1>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Genero</th>
                <th scope="col">Especie</th>
                <th scope="col">Imagen</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if ($cantidad > count($personajes)) $cantidad = count($personajes);
                for($i = 0; $i < $cantidad; $i++) { ?>
                    <tr>
                        <td><?php echo $personajes[$i]["name"]?></td>
                        <td><?php echo $personajes[$i]["gender"]?></td>
                        <td><?php echo $personajes[$i]["species"]?></td>
                        <td>
                            <img width="100px" src="<?php echo $personajes[$i]["image"]?>">
                        </td>
                    </tr>
                <?php } ?>
        </tbody>
    </table>
</body>
</html>