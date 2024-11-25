<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mult</title>
    <link rel="stylesheet" href="estilos.css">
    <?php
        error_reporting( E_ALL );
        ini_set( "display_errors", 1 );    
    ?>
</head>
<body>
    <!--
        CREAR UN FORMLUARIO QUE RECIBA UN NUMERO

        SE MOSTRAR LA TABLA DE MULTILICAR DE ESRE ENUMERO EN UNA TABLA HTML

        2 X 1 = 2
        2 X 2 = 4
    -->
    <form action="" method="post">
        <label for="num">Numero</label>
        <input type="text" name="mensaje" id="num">
        <br><br>
        <input type="submit" value="Enviar">
        <br><br>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $num=$_POST["mensaje"];
        echo "Formulario enviado";
        $resultado=0;?>

        <table>
            <thead>
                <tr>
                    <th>Multiplicacion</th>
                    <th>Resultado</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                    for($i=1; $i<=10; $i++){    
                    echo "<tr>";
                        $resultado=$num*$i;       
                        echo "<td>$num x $i</td>";     
                        echo "<td>$resultado</td>";
                    echo "</tr>";                               
                    }?>
            </tbody>
        </table>
        
        <?php } ?>
</body>
</html>