<?php 

    require "validaciones.php";

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];


    if (
        validarId($id) == true &&
        validarNombre($nombre) == true &&
        validarApellido($apellido) == true &&
        validarTelefono($telefono) == true &&
        validarDireccion($direccion) == true
    )
    {
        echo "ID: $id  <br />";
        echo "Nombre: $nombre  <br />";
        echo "Apellido: $apellido  <br />";
        echo "Telefono: $telefono  <br />";
        echo "Direccion: $direccion  <br />";

    }
    else 
        echo "Fallo la validacion de los campos";
    

