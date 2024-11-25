<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="salario" placeholder="Salario">
        <input type="submit" value="Calcular salario bruto">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $tmp_salario=$_POST["salario"];

        if($tmp_salario==""){
            echo "<p>El salario es obligatorio</p>";
        }else{
            if(filter_var($tmp_salario,FILTER_VALIDATE_FLOAT)===FALSE){
                echo "<p>El salario debe ser un numero</p>";
            }else{
                if($tmp_salario<0){
                    echo "<p>EL salario debe ser mayor o igual que cero</p>";
                }else{
                    $salario=$tmp_salario;
                }
            }
        }
    }
    
    ?>
</body>
</html>