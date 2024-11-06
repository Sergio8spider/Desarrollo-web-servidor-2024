<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <!-- Equipos de la liga

    - Nombre (letras con tilde, ñ, espacios en blanco y punto)
    - Inicial (3 letras)
    - Liga (select con las opciones: Liga EA Sports, Liga Hypermotion, Liga Primera RFEF)
    - Ciudad (letras con tilde, ñ, ç y espacios en blanco)
    - Tiene titulo liga (select con si o no)
    - Fecha de fundación (entre hoy y el 18 de diciembre de 1889)
    - Número de jugadores (entre 19 y 32)
    http://info.cern.ch/hypertext/WWW/TheProject.html -->

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $tmp_nombre=$_POST["nombre"];
        $tmp_inicial=$_POST["inicial"];

        if($tmp_nombre==""){
            $err_nombre="El nombre es obligatorio";
        }else{
            $patron = "/^[a-zA-Z ñÑ.áéíóúÁÉÍÓÚ]+$/";

            if(!preg_match($patron, $tmp_nombre)) {
                $err_nombre = "Formato de nombre incorrecto";
            } else {
                $nombre=$tmp_nombre;
            }
        }
        if($tmp_inicial==""){
            $err_inicial="Las iniciales son obligatorias";
        }else{
            $patron = "/^[a-zA-ZÑñ]{3}$/";

            if(!preg_match($patron, $tmp_inicial)) {
                $err_inicial = "Formato de iniciales incorrecto";
            } else {
                $nombre=strtoupper($tmp_nombre);
            }
        }
    }
    
    ?>
    <div class="container">
    <form class="col-4" action="" method="post">
        <h1>Formulario futbol</h1>
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input class="form-control" type="text" name="nombre">
                <?php if(isset($err_nombre)) echo "<span class='error'>$err_nombre</span>" ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Inicial</label>
                <input class="form-control" type="text" name="inicial">
                <?php if(isset($err_inicial)) echo "<span class='error'>$err_inicial</span>" ?>
            </div>
            <div class="mb-3">
                <select name="liga">
                <option value="easports">Liga EA Sports</option>
                <option value="hypermotion">Liga Hypermotion</option>
                <option value="rfef">Liga Primera RFEF</option>
                </select>
                <?php if(isset($err_liga)) echo "<span class='error'>$err_liga</span>" ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Ciudad</label>
                <input class="form-control" type="text" name="ciudad">
                <?php if(isset($err_ciudad)) echo "<span class='error'>$err_ciudad</span>" ?>
            </div>
            <div class="mb-3">
            <select name="titulo_liga">
                <option value="si">Si</option>
                <option value="no">No</option>
                </select>
                <?php if(isset($err_titulo_liga)) echo "<span class='error'>$err_titulo_liga</span>" ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Fecha de fundacion</label>
                <input class="form-control" type="text" name="fecha_fundacion">
                <?php if(isset($err_fecha_fundacion)) echo "<span class='error'>$err_fecha_fundacion</span>" ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Numero de jugadores</label>
                <input class="form-control" type="text" name="numero_jugadores">
                <?php if(isset($err_numero_jugadores)) echo "<span class='error'>$err_numero_jugadores</span>" ?>
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" value="Enviar">
            </div>
        </form>
    </div>
    </div>
</body>
</html>