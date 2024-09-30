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

    <h1>Lista con FOR</h1>
    <ul>
    <?php
    for ($i=1;$i<=10;$i++){
        echo "<li>$i</li>";
    }
    ?>
    </ul>

    <h1>Lista con FOR alternativa</h1>
    <ul>
    <?php
    for ($i=1;$i<=10;$i++):
        echo "<li>$i</li>";
    endfor;
    ?>
    </ul>

    <h1>Lista con FOR con BREAK</h1>
    <ul>
    <?php
    for ($i=1;;$i++):
        if($i>10){
            break;
        }
        echo "<li>$i</li>";
        
    endfor;
    ?>
    </ul>
</body>
</html>