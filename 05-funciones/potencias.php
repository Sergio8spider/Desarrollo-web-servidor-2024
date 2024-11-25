<?php
function calcularPotencia(int|float $base,int|float $exponente):int|float{
        $resultado=1;
        for($i=0; $i<$exponente; $i++){            
            $resultado*=$base;           
        }
        return $resultado;
}
?>