<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /**
     * CREAR UN FORMULARIO QUE RESIBA DOS PARAMETROS BASE Y EXPO
     * 
     * CUANDO SE ENVIE EL FORMUILARIO, SE CALCULARA EL RESULTADO DE ELEVAR LA BASE AL EXPONENTE
     * 
     * EJEMPLOS:
     * 
     * 2 ELEVADO A 3 => 2X2X2 = 8
     * 3 ELEVADO A 2 => 3X3 =9
     * 2 ELEVADO A 1 = 2
     */
    ?>

    <form action="" method="post">
        <label for="base">Base</label>
        <input type="text" name="mensaje" id="base">
        <br><br>
        <label for="exponente">Exponente</label>
        <input type="text" name="mensaje2" id="exponente">
        <br><br>
        <input type="submit" value="Enviar">
        <br><br>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $base=$_POST["mensaje"];
        $exponente=$_POST["mensaje2"];
        echo "formulario enviado";
        $resultado=0;

        for($i=0; $i<$exponente; $i++){            
            $resultado+=$base*$exponente;           
        }
        echo "<h1>$resultado</h1>";
    }
    ?>
</body>
</html>