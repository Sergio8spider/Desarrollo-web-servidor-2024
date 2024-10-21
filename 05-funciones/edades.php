<?php
function comprobarEdad($edad,$nombre){
    $resultado =match(true){
        $edad<18 => ", es menor de edad.",
        $edad>=18  && $edad<65 => ", es mayor de edad.",
        $edad>=65 => ", se ha jubilado."
    };
    echo "<h2>$nombre $resultado </h2><br>";
}
?>