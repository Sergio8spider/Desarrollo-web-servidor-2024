<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index de animes</title>
    <?php
        error_reporting(E_ALL);
        ini_set("display_errors",1);

        require("conexion.php");
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Tabla de animes</h1>
    <?php
        $sql="SELECT * FROM animes";
        $resultado = $_conexion -> query($sql);
        /**
         * Aplicamos la funcion query a la conexion, donde se ejecuta la sentencia SQL hecha
         * 
         * El resultado ses almacena $resultado, que es un objeto con una estructura parecida
         * a los arrays
         */
    ?>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Titulos</th>
                <th>Estudio</th>
                <th>Año</th>
                <th>Numero de temporadas</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($fila=$resultado -> fetch_assoc()){ //trata el resultado como un array associativo
                    echo "<tr>";
                    echo "<td>" . $fila["titulo"] . "</td>";
                    echo "<td>" . $fila["nombre_estudio"] . "</td>";
                    echo "<td>" . $fila["anno_estreno"] . "</td>";
                    echo "<td>" . $fila["num_temporadas"] . "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>