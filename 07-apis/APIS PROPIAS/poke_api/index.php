<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex completa</title>
    <?php
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
    ?>
</head>
<body>
    <?php
        $apiUrl = "https://pokeapi.co/api/v2/pokedex/1/";
        
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $apiUrl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $respuesta = curl_exec($curl);
        curl_close($curl);

        $datos = json_decode($respuesta, true);
        $pokemons = $datos["pokemon_entries"];
    ?>
    <table>
        <thead>
            <tr>
                <th">Orden</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($pokemons as $pokemon) { ?>
                    <tr>
                        <td>
                            <?php echo $pokemon["entry_number"]?>
                        </td>
                        <td>
                            <a href="./pokemon_info.php?id=<?php echo $pokemon["entry_number"]?>">
                                <?php echo ucwords($pokemon["pokemon_species"]["name"])?>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
        </tbody>
    </table>
</body>
</html>