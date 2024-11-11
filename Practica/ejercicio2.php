<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    ?>
</head>
<body>
    <?php
    $array1=[];
    $array2=[];
    $array3=[];
    $media1=0;
    $media2=0;

    for($i=0; $i<5; $i++){
        $array1[$i]=rand(1,10);
        $media1+=$array1[$i];
        $array2[$i]=rand(10,100);
        $media2+=$array2[$i];
    };

    $media1=$media1/count($array1);
    $media2=$media2/count($array2);

    array_push($array3,$array1);
    array_push($array3,$array2);

    for($i=0; $i<5; $i++){
        echo "$array1[$i], ";
    };
    echo "<br>";
    for($i=0; $i<5; $i++){
        echo "$array2[$i], ";
    };

    $max=1;
    $min=10;

    for($i=0; $i<5; $i++){
        if ($array1[$i] > $max) {
            $max = $array1[$i];
        }
        if ($array1[$i] < $min) {
            $min = $array1[$i];
        }
    };

    echo "<h1>Del array 1:</h1><h2>El maximo es $max</h2><h2>El minimo es $min</h2><h2>La media es es $media1</h2>";

    $max=10;
    $min=100;

    for($i=0; $i<5; $i++){
        if ($array2[$i] > $max) {
            $max = $array2[$i];
        }
        if ($array2[$i] < $min) {
            $min = $array2[$i];
        }
    };

    echo "<h1>Del array 2:</h1><h2>El maximo es $max</h2><h2>El minimo es $min</h2><h2>La media es es $media2</h2>";
    ?>
</body>
</html>