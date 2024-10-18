<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    ?>
</head>
<body>

    <form action="" method="post">
        <label for="numero">Numero</label>
        <input type="text" name="mensaje" id="numero">
        <br><br>
        <select name="select">
            <option value="sumatorio">Sumatorio</option>
            <option value="factorial">Factorial</option>
        </select><br><br>
        <input type="submit" value="Enviar">
        <br><br>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $num=$_POST["mensaje"];
            $opcion=$_POST["select"];
            $resultado=0;

            switch ($opcion) {
                case "sumatorio":
                    echo "El sumatorio de $num es: ";
                    for($i=1; $i<=$num; $i++){
                        $resultado+=$i;                                      
                    }   
                    echo "<td>$resultado</td>";
                    break;
                case "factorial":
                    echo "El factorial de $num es: ";
                    if($num!=0){
                        $resultado=1;
                        for($i=1; $i<=$num; $i++){
                            $resultado*=$i;                                      
                        }  
                    }
                    echo "<td>$resultado</td>";
                    break;
            }
        }
    ?>
    
</body>
</html>