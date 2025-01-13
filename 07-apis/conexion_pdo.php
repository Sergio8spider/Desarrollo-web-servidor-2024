<?php
    $_servidor = "localhost";
    $_usuario = "estudiante";
    $_contrasena = "estudiante";
    $_bd = "animes_bd";

    try {
        $_conexion = new PDO("mysql:host=$_servidor;dbname=$bd",$_usuario, $_contrasena);
        $_conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException){
        
    }
?>