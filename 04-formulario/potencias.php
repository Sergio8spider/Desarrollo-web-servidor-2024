<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        error_reporting( E_ALL );
        ini_set( "display_errors",1);    

        require("../05-funciones/potencias.php");
    ?>
</head>
<body>
    <form action="" method="post">
        <label for="base">Base</label>
        <input type="text" name="base" id="base">
        <br><br>
        <label for="exponente">Exponente</label>
        <input type="text" name="exponente" id="exponente">
        <br><br>
        <input type="submit" value="Enviar">
        <br><br>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $tmp_base=$_POST["base"];
        $tmp_exponente=$_POST["exponente"];

        if($tmp_base!=""){
            if(filter_var($tmp_exponente,FILTER_VALIDATE_INT) !== FALSE){
                $base=$tmp_base;
            }else{
                echo "<p>La base debe ser un numero</p>";
            }
        }else{
            echo "<p>La base es obligatoria</p>";
        }

        if($tmp_exponente!=""){
            if(filter_var($tmp_exponente,FILTER_VALIDATE_INT) !== FALSE){
                    $exponente=$tmp_exponente;
            }else{
                echo "<p>El exponente debe ser un numero</p>";
            }
        }else{
            echo "<p>El exponente es obligatorio</p>";
        }

        if(isset($base) && isset($exponente)){
            $resultado=calcularPotencia($base,$exponente);
            echo "El resultado es $resultado";
            echo "<p>Esto es del manuva</p>";
        }
    }
    ?>
</body>
</html>