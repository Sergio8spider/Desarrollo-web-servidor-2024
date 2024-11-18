<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Estudio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php
        error_reporting( E_ALL );
        ini_set("display_errors", 1 );  
    ?>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tmp_nombre_estudio = $_POST['nombre_estudio'];
    $tmp_ciudad = $_POST['ciudad'];

    if($tmp_nombre_estudio==""){
        $err_nombre_estudio="El nombre del estudio es obligatorio";
    }else{
        if (!preg_match("/^[a-zA-Z0-9 ]+$/", $tmp_nombre_estudio)) {
            $err_nombre_estudio="El nombre del estudio solo puede contener letras, números y espacios.";
            $nombre_estudio=$tmp_nombre_estudio;
        }
    }
    
    if($tmp_ciudad==""){
        $err_ciudad="La ciudad es oblgatoria";
    }else{
        if (!preg_match("/^[a-zA-Z ]+$/", $tmp_ciudad)) {
            $err_ciudad="La ciudad solo puede contener letras y espacios.";
            $ciudad=$tmp_ciudad;
        }
    }
}
?>
    <div class="container">
        <h1>Formulario estudio</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label class="form-label">Nombre del Estudio</label>
                <input class="form-control" type="text" name="nombre_estudio">
                <?php if(isset($err_nombre_estudio)) echo "<h1 class='error'>$err_nombre_estudio</h1>" ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Ciudad</label>
                <input class="form-control" type="text" name="ciudad">
                <?php if(isset($err_ciudad)) echo "<h1 class='error'>$err_ciudad</h1>" ?>
            </div>
            <input class="btn btn-primary" type="submit" value="Enviar"></input>
        </form>
    </div>
</body>
</html>