<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        error_reporting( E_ALL );
        ini_set( "display_errors",1);    

        require("../05-funciones/economia.php");
    ?>
</head>
<body>
    <!--
    GENERAL = 21%
    REDUCIDO = 10%
    SUPERREDUCIDO = 4%

    10€ IVA = GENERAL, PVP = 12,1€ PVP = precio * 1.21
    10€ iva = REDUCIDO, PVP = 11€  PVP = precio * 1.1
    -->
    <form action="" method="post">
        <label for="precio">Precio</label>
        <input type="text" name="precio" id="precio">
        <br><br>
        <select name="iva">
            <option value="general">General</option>
            <option value="reducido">Reducido</option>
            <option value="superreducido">Superreducido</option>
        </select>
        <br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $tmp_precio = $_POST["precio"];
        $tmp_iva = $_POST["iva"];

        if($tmp_precio!=""){
            if(filter_var($tmp_precio,FILTER_VALIDATE_INT) !== FALSE){
                if($tmp_precio>0){
                    $precio=$tmp_precio;
                }else{
                    echo "<p>El precio debe ser mayor que 0</p>";
                }
            }else{
                echo "<p>El precio debe ser un numero</p>";
            }
        }else{
            echo "<p>El precio es obligatorio</p>";
        }
        if($tmp_iva!=""){
            $iva_posibles=["general","reducido","superreducido"];
            if(in_array($tmp_iva,$iva_posibles)){
                $iva=$tmp_iva;
            }else{
                echo "<p>El iva solo puede ser general, reducido o superreducido</p>";
            }
        }else{
            echo "<p>EL iva es obligatorio</p>";
        }

        if(isset($iva) && isset($precio)){
            $resultado= calcularPVP($precio,$iva);
            echo "<p>$resultado</p>";
        }
    }
    ?>
</body>
</html>