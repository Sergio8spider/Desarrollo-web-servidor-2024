<?php
function calcularPotencia($base,$exponente){
        $resultado=0;
        for($i=0; $i<$exponente; $i++){            
            $resultado+=$base*$exponente;           
        }
        echo "<h1>$resultado</h1>";
}
?>