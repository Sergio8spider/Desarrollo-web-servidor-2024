<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $i=1;
    echo "<ul>";
    while($i<=10){
        echo "<li>$i</li>";
        $i++;
    }
    echo "</ul>";
    ?>

    <h1>Lista con WHILE alternativa</h1>
    <?php
    $i=1;

    echo "<ul>";
    while($i<=10):
        echo "<li>$i</li>";
        $i++;
    endwhile;
    echo "</ul>";
    ?>
</body>
</html>