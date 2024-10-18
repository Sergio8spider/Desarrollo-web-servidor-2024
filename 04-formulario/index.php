<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
    <?php
        error_reporting( E_ALL );
        ini_set( "display_errors", 1 );    
    ?>
</head>
<body>
<table>
        <caption>Tablas de contenido</caption>
        <thead>
            <tr>
                <th>Archivo</th>
                <th>Descripcion</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <a href="ejemplo.php">ejemplo.php</a>
                </td>
                <td>
                    Formularios
                </td>
            </tr>
            <tr>
                <td>
                    <a href="potencias.php">potencias.php</a>
                </td>
                <td>
                    Potencias
                </td>
            </tr>
            <tr>
                <td>
                    <a href="edades.php">edades.php</a>
                </td>
                <td>
                    Edades
                </td>
            </tr>
            <tr>
                <td>
                    <a href="mult.php">mult.php</a>
                </td>
                <td>
                    Ejercicio multi form
                </td>
            </tr>
            <tr>
                <td>
                    <a href="iva.php">iva.php</a>
                </td>
                <td>
                    Ejercicio IVA con GET
                </td>
            </tr>
            <tr>
                <td>
                    <a href="iva_post.php">iva_post.php</a>
                </td>
                <td>
                    Ejercicio IVA con POST
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>