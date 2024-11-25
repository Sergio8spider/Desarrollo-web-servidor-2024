<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro   </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php
        error_reporting( E_ALL );
        ini_set("display_errors", 1 );    

        require('../conexion.php');
    ?>
</head>
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
            $usuario = $_POST["usuario"];
            $contraseña = $_POST["contraseña"];

            $sql="SELECT * FROM usuarios WHERE usuario ='$usuario'";
            $resultado=$_conexion -> query($sql);

            if($resultado -> num_rows == 0){
                echo "<h2>El usuario $usuario no existe</h2>";
            }else{
                $datos_usuario = $resultado -> fetch_assoc();
                /**
                 * Podemos acceder a:
                 * 
                 * $datos_usuario["usuario]
                 * $datos_usuario["contraseña"]
                 */
                $acceso_concedido = password_verify($contraseña,$datos_usuario["contraseña"]);

                if($acceso_concedido){
                    session_start();
                    $_SESSION["usuario"] = $usuario;
                    header("location: ../index.php");
                }else{
                    echo "<h1>La contraseña no es correcta</h1>";
                }
            }
        } 
    ?>
    <div class="container">
        <h1>Iniciar sesion</h1>
        
        <form class="col-6" action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Usuario</label>
                <input class="form-control" type="text" name="usuario">
            </div>
            <div class="mb-3">
                <label class="form-label">Contraseña</label>
                <input class="form-control" type="password" name="contraseña">
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" value="Iniciar sesion">
            </div>
            <div class="mb-3">
                <h3>Si no tienes cuenta,</h3>
                <a class="btn btn-secondary" href="registro.php">Registrarse
                </a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>