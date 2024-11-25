<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <?php require 'conexion.php'; ?>
</head>
<body>
    <?php
    function depurar(string $elemento): string{
        $salida=htmlspecialchars($elemento);
        $salida=trim($elemento);
        $salida=stripslashes($elemento);
        $salida= preg_replace('!\s+!',' ',$elemento);
        return $salida;
    }
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $tmp_titulo=depurar($_POST["titulo"]);
        $tmp_estudio=($_POST["nombre_estudio"]);
        $tmp_anno_estreno=depurar($_POST["anno_estreno"]);
        $tmp_num_temporadas=depurar($_POST["num_temporadas"]);
        /**
         * $_FILES -> que es un array BIDIMENSIONAL
         */
        $nombre_imagen=$_FILES["imagen"]["name"];
        $ubicacion_temporal=$_FILES["imagen"]["tmp_name"];
        $ubicacion_final="./imagenes/$nombre_imagen";

        move_uploaded_file($ubicacion_temporal,$ubicacion_final);

        if($tmp_titulo==""){
            $err_titulo="El titulo es obligatorio";
        }elseif(strlen($tmp_titulo)>80){
            $err_titulo="El titulo no puede superar los 80 caracteres";
        }else{
            $titulo=$tmp_titulo;
        }

        if($tmp_estudio==""){
            $err_estudio="El estudio es obligatorio";
        }else{
            $estudio=$tmp_estudio;
        }

        if($tmp_anno_estreno==""){
        }else{
            if($tmp_anno_estreno < 1960 || $tmp_anno_estreno>date("Y")+5){
                $err_anno_estreno="El año de estreno debe estar entre 1960 y dentro de 5 años";
            }else{
                $anno_estreno=$tmp_anno_estreno;
            }    
        }

        
        if($tmp_num_temporadas==""){
            $err_num_temporadas="El numero de temporadas es obligatorio";
        }else{
            if($tmp_num_temporadas> 99 || $tmp_num_temporadas<1){
                $err_num_temporadas="El numero de temporadas tiene que estar entre 99 y 1";
            }else{
                $num_temporadas=$tmp_num_temporadas;
            }
        }

        $sql = "INSERT INTO animes (titulo, nombre_estudio, anno_estreno, num_temporadas, imagen) 
                VALUES ('$titulo', '$estudio', $anno_estreno, $num_temporadas,'$ubicacion_final')";

        $_conexion -> query($sql);

    }

    $sql="SELECT * FROM estudios ORDER BY nombre_estudio";
    $resultado=$_conexion-> query($sql);
    $estudios=[];

    while($fila=$resultado -> fetch_assoc()){
        array_push($estudios,$fila["nombre_estudio"]);
    }

    ?>
    <div class="container">
        <h1>Añadir anime</h1>
        <form class="col-6" action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Titulo</label>
                <input class="form-control" type="text" name="titulo">
                <?php if(isset($err_titulo)) echo "<h1 class='error'>$err_titulo</h1>" ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Nombre estudio</label>
                <select class="form-select" name="nombre_estudio">
                    <?php 
                        foreach($estudios as $estudio) { ?>
                            <option value="<?php echo $estudio ?>">
                                <?php echo $estudio ?>
                    <?php } ?>
                    
                </select>
                <?php if(isset($err_estudio)) echo "<h1 class='error'>$err_estudio</h1>" ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Año de estreno (opcional)</label>
                <input class="form-control" type="texto" name="anno_estreno">
                <?php if(isset($err_anno_estreno)) echo "<h1 class='error'>$err_anno_estreno</h1>" ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Numero de temporadas</label>
                <input class="form-control" type="text" name="num_temporadas">
                <?php if(isset($err_num_temporadas)) echo "<h1 class='error'>$err_num_temporadas</h1>" ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Imagen</label>
                <input class="form-control" type="file" name="imagen">
                <?php if(isset($err_imagen)) echo "<h1 class='error'>$err_imagen</h1>" ?>
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-primary" value="Enviar">
            </div>
        </form>
    </div>
</body>
</html>