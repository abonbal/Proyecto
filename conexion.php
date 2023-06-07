<?php

    //nueva conexion de la clase mysqli
    //Parametros: ubicacion del servidor, nombre de usuario, contraseña, base de datos
    $mysqli = new mysqli("localhost","root","","Proyecto");
    if($mysqli->connect_errno){
        echo "fallo al conectar con la base de datos: (", $mysqli->connect_errno, ")", $mysqli->connect_errno;
    }

?>
