<?php
function convertirTemperatura($temp,$unidad_inicial,$unidad_final){
    $temp_noconvert=$temp;
    switch ($unidad_inicial) {
        case "C":
            switch ($unidad_final) {
                case "C":
                    break;
                case "K":
                    $temp += 273.15;
                    break;
                case "F":
                    $temp = ($temp * 1.8) + 32;
                    break;
            }
        break;
        case "K":
            switch ($unidad_final) {
                case "C":
                    $temp -= 273.15;
                    break;
                case "K":
                    break;
                case "F":
                    $temp = 1.8 * ($temp - 273.15) + 32;
                    break;       
            }
        break;
        case "F":
            switch ($unidad_final) {
                case "C":
                    $temp = ($temp - 32) / 1.8;
                    break;
                case "K":
                    $temp = 5 / 9 * ($temp - 32) + 273.15;
                    break;
                case "F":
                    break; 
            }   
        break;
    }
    echo "$temp_noconvert $unidad_inicial son $temp $unidad_final";
    
}


?>