<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario libro</title>
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
    function depurar(string $entrada) : string{
        $salida = htmlspecialchars($entrada);
        $salida = trim($salida);
        $salida = stripslashes($salida);
        $salida = preg_replace('!\s+!',' ',$salida);
        return $salida;
    }
    ?>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $tmp_titulo = depurar($_POST["titulo"]);
        $tmp_paginas = depurar($_POST["paginas"]);
        $tmp_secuela = depurar($_POST["secuela"]);
        $tmp_fecha = depurar($_POST["fecha"]);
        $tmp_sinopsis = depurar($_POST["sinopsis"]);

        //TITULO
        if($tmp_titulo  == ''){
            $err_titulo="El titulo es obligatorio";
        }else{
            if(strlen($tmp_titulo) < 1 || strlen($tmp_titulo) > 40) {
                $err_titulo="El titulo tiene que tener entre 1 y 40 caracteres";
            }else{
                if(!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñ]{1}[a-zA-ZáéíóúÁÉÍÓÚñ1-9.,; ]+$/", $tmp_titulo)){
                    $err_titulo="El titulo tiene un patrón incorrecto";
                }else{
                    $titulo=$tmp_titulo;
                }
            }
        }

        //PAGINAS
        if($tmp_paginas  == ''){
            $err_paginas="El numero de paginas es obligatorio";
        }else{
            if(filter_var($tmp_paginas, FILTER_VALIDATE_INT) === FALSE){
                $err_paginas="No has introducido un numero";
            }else{
                if($tmp_paginas < 10 || $tmp_paginas > 9999){
                    $err_paginas="El numero de paginas debe estar entre 10 y 9999";
                }else{
                    $paginas=$tmp_paginas;
                }
            }
        }

        //GENERO
        if(isset($_POST["genero"])) {
            $tmp_genero = $_POST["genero"];
        } else {
            $err_genero="El genero es obligatorio";
            $tmp_genero = "";
        }

        if(!$tmp_genero == '') {
            $generos_validos = ["fantasia","ciencia_ficcion","drama","romance"];
            if(!in_array($tmp_genero,$generos_validos)) {
                $err_genero = "El genero no es valido";
            } else {
                $genero = $tmp_genero;
            }
        }

        //SECUELA
        if(!$tmp_secuela == 'si') {
            $secuela="Si";
        }else{
            $secuela="No";
        }

        //FECHA
        if(!$tmp_fecha == '') {
            $min_date = '1800-01-01'; 
            $max_date = date('Y-m-d', strtotime('+3 years')); 
            if($tmp_fecha < $min_date || $tmp_fecha > $max_date) {
                $err_fecha = "La fecha debe estar entre el uno de enero de 1800 y dentro de 3 años";
            } else {
                $fecha = $tmp_fecha;
            }
        }

        //SINOPSIS
        if(!$tmp_sinopsis == '') {
            if(strlen($tmp_sinopsis) > 200){
                $err_sinopsis = "La sinopsis no puede superar las 200 letras";
            }else{
                if(!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñ ]+$/", $tmp_sinopsis)){
                    $err_sinopsis = "La sinopsis solo puede tener letras y espacios";
                }else{
                    $sinopsis=$tmp_sinopsis;
                }
            }
        }
    }
    ?>


    <div class="container">
        <h1>Formulario libro</h1>

        <form class="col-4" action="" method="post">
            <div class="mb-3">
                <label class="form-label">Titulo</label>
                <input type="text" class="form-control" name="titulo">
                <?php if(isset($err_titulo)) echo "<span class='error'>$err_titulo</span>"; ?>
            </div>

            <div class="mb-3">
                <label class="form-label">Paginas</label>
                <input type="text" class="form-control" name="paginas">
                <?php if(isset($err_paginas)) echo "<span class='error'>$err_paginas</span>"; ?>
            </div>

            <div class="mb-3">Genero
                <div class="form-check">
                        <input class="form-check-input" type="radio" name="genero" value="fantasia">
                        <label class="form-check-label">Fantasia</label>
                </div>
                <div class="form-check">
                        <input class="form-check-input" type="radio" name="genero" value="ciencia_ficcion">
                        <label class="form-check-label">Ciencia Ficcion</label>
                </div>
                <div class="form-check">
                        <input class="form-check-input" type="radio" name="genero" value="romance">
                        <label class="form-check-label">Romance</label>
                </div>
                <div class="form-check">
                        <input class="form-check-input" type="radio" name="genero" value="drama">
                        <label class="form-check-label">Drama</label>
                </div>
                <?php if(isset($err_genero)) echo "<span class='error'>$err_genero</span>" ?>
            </div>
            
            <div class="mb-3">Secuela (opcional)
                <select name="secuela">
                    <option value="no" selected></option>
                    <option value="si">Si</option>
                    <option value="no">No</option>
                </select> 
            </div>

            <div class="mb-3">
                <label class="form-label">Fecha de publicacion (opcional)</label>
                <input type="date" class="form-control" name="fecha">
                <?php if(isset($err_fecha)) echo "<span class='error'>$err_fecha</span>"; ?>
            </div>

            <div class="mb-3">
                <label class="form-label">Sinopsis (opcional)</label>
                <textarea class="form-control" name="sinopsis"></textarea>
                <?php if(isset($err_sinopsis)) echo "<span class='error'>$err_sinopsis</span>"; ?>
            </div>

            <div class="mb-3">
                <input type="submit" class="btn btn-primary" value="Enviar">
            </div>
        </form>
        <?php
        if(isset($titulo) && isset($paginas) && isset($genero) && isset($secuela)&& isset($fecha)&& isset($sinopsis)) { ?>
            <h1><?php echo $titulo ?></h1>
            <h1><?php echo $paginas ?></h1>
            <h1><?php echo $genero ?></h1>
            <h1><?php echo $secuela ?></h1>
            <h1><?php echo $fecha ?></h1>
            <h1><?php echo $sinopsis ?></h1>
        <?php } ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>